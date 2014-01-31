<?php
App::uses('AppController', 'Controller');

class CreditsController extends AppController {
	public $components = array('Paginator', 'Session');

	public function index() {
		$this->Credit->recursive = 0;
		if ($this->Session->read('Auth')['User']['usrRole'] === '1') {
			$this->paginate = array('conditions' => array('Credit.usrID' => $this->Session->read('Auth')['User']['usrID']));
			$this->set('credits', $this->Paginator->paginate());
		}
		else {
			$this->set('credits', $this->Paginator->paginate());
		}
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Credit->create();
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth')['User']['usrID']));
			}
			if ($this->Credit->save($this->request->data)) {
				$this->Session->setFlash('The credit card has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The credit card could not be saved. Please, try again.', 'flasherBad');
			}
		}
		elseif ($this->Credit->find('count', array('conditions' => array('Credit.usrID' => $this->Session->read('Auth')['User']['usrID']))) == '3') {
			$this->Session->setFlash('You can only store 3 credit cards in your account.', 'flasherNeutral');
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function edit($id = null) {
		if (!$this->Credit->exists($id)) {
			throw new NotFoundException(__('Invalid credit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'index'));
			}
			if ($this->Credit->save($this->request->data)) {
				$this->Session->setFlash('The credit has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The credit could not be saved. Please, try again.', 'flasherBad');
			}
		}
		else {
			$options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
			$this->request->data = $this->Credit->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Credit->id = $id;
		if (!$this->Credit->exists()) {
			throw new NotFoundException(__('Invalid credit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Credit->delete()) {
			$this->Session->setFlash('The credit has been deleted.', 'flasherGood');
		}
		else {
			$this->Session->setFlash('The credit could not be deleted. Please, try again.', 'flasherBad');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function beforeFilter() {
		$this->Auth->allow('index', 'add');
	}

	public function isAuthorized($user) {
		if (in_array($this->action, array('edit', 'delete'))) {
			$creditID = $this->request->params['pass'][0];
			if ($this->Credit->isOwner($creditID, $user)) {
				return true;
			}
		}
		return parent::isAuthorized($user);
	}
}
