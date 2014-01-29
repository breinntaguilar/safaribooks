<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $components = array('Paginator', 'Session');
	
	public function index() {
		$this->User->recursive = 0;
		if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
			$conditions = array('User.usrRole' => '1');
			$this->paginate = array('conditions' => $conditions, 'order' => array('Book.bkTitle' => 'ASC'));
			$this->set('users', $this->Paginator->paginate());
		}
		else {
			$this->paginate = array('order' => array('User.usrRole' => 'ASC', 'User.usrLname' => 'ASC'));
			$this->set('users', $this->Paginator->paginate());
		}
	}
	
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();

			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('controller' => 'books', 'action' => 'index'));
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved.', 'flasherGood');
				if (!isset($this->Session->read('Auth')['User'])) {
					return $this->redirect(array('action' => 'login'));
				}
				else {
					return $this->redirect(array('action' => 'view', $this->User->id));
				}
			}
			else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'flasherBad');
			}
		}
	}
	
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		$this->User->id = $id;
		if ($this->request->is(array('post', 'put'))) {
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'view', $id));
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'flasherBad');
			}
		}
		else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function editPass($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		$this->User->id = $id;
		if ($this->request->is(array('post', 'put'))) {
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'view', $id));
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'flasherBad');
			}
		}
		else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}
	
	public function delete($id = null) {
		$this->User->id = $id;
		$profileID = $this->request->params['pass'][0];
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->User->isOwner($profileID, $this->Session->read('Auth')['User']['usrID']) && $this->User->saveField('usrStat', 1)) {
			$this->Session->setFlash('The user has been deactivated.', 'flasherGood');
			return $this->redirect($this->Auth->logout());
		}
		elseif ($this->User->saveField('usrStat', 1)) {
			$this->Session->setFlash('The user has been deactivated.', 'flasherGood');
		}
		else {
			$this->Session->setFlash('The user could not be deactivated. Please, try again.', 'flasherBad');
		}
		return $this->redirect(array('action' => 'view', $id));
	}

	public function readd($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->User->saveField('usrStat', 0)) {
			$this->Session->setFlash('The user has been reactivated.', 'flasherGood');
		}
		else {
			$this->Session->setFlash('The user could not be reactivated. Please, try again.', 'flasherBad');
		}
		return $this->redirect(array('action' => 'view', $id));
	}
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Login cancelled.', 'flasherNeutral');
				return $this->redirect(array('controller' => 'books', 'action' => 'index'));
			}

			if ($this->Auth->login()) {
				if ($this->Session->read('Auth')['User']['usrStat'] == true) {
					$this->Session->setFlash('Your account is disabled. Please contact the site administrator for help.', 'flasherBad');
					return $this->redirect($this->Auth->logout());
				}
				else {
					$this->Session->setFlash('Welcome ' . $this->Session->read('Auth')['User']['usrFname'] . ' ' . $this->Session->read('Auth')['User']['usrLname'] . '!', 'flasherNeutral');
					return $this->redirect($this->Auth->redirect());
				}
			}
			else {
				$this->Session->setFlash('Invalid email address or password, please try again.', 'flasherBad');
			}
		}
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	public function beforeFilter() {
		$this->Auth->allow('add', 'logout');
	}

	public function isAuthorized($user) {
		if (in_array($this->action, array('view', 'edit', 'delete'))) {
			$profileID = $this->request->params['pass'][0];
			if ($this->User->isOwner($profileID, $user)) {
				return true;
			}
		}
		if (in_array($this->action, array('index', 'view', 'edit', 'delete', 'readd')) && (isset($user['usrRole']) && $user['usrRole'] !== '1')) {
			return true;
		}
		return parent::isAuthorized($user);
	}
}
