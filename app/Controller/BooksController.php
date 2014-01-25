<?php
App::uses('AppController', 'Controller');

class BooksController extends AppController {
	public $components = array('Paginator', 'Session');
	
	public function index() {
		$this->Book->recursive = 0;
		$this->paginate = array('limit' => 6, 'order' => array('Book.bkTitle' => 'ASC'));
		$this->set('books', $this->Paginator->paginate());
	}
	
	public function view($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
		$this->set('book', $this->Book->find('first', $options));
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			
			if (!$this->request->data['Book']['bkCover']['name']) {
				unset($this->request->data['Book']['bkCover']);
			}
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'index'));
			}
			else if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash('The book has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The book could not be saved. Please, try again.', 'flasherBad');
			}
		}
		else {
			$this->request->data['Book']['bkAddedDate'] = date('Y-m-d');
		}
	}
	
	public function edit($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if (!$this->request->data['Book']['bkCover']['name']) {
				unset($this->request->data['Book']['bkCover']);
			}
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'view', $id));
			}
			else if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash('The book has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash('The book could not be saved. Please, try again.', 'flasherBad');
			}
		}
		else {
			$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
			$this->request->data = $this->Book->find('first', $options);
		}
	}
	
	public function delete($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		
		if ($this->Book->saveField('bkStat', 1)) {
			$this->Session->setFlash('The book has been deleted.', 'flasherGood');
		}
		else {
			$this->Session->setFlash('The book could not be deleted. Please, try again.', 'flasherBad');
		}
		return $this->redirect(array('action' => 'view', $id));
	}

	public function readd($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		
		if ($this->Book->saveField('bkStat', 0)) {
			$this->Session->setFlash('The book has been re-added.', 'flasherGood');
		}
		else {
			$this->Session->setFlash('The book could not be added back to the inventory. Please, try again.', 'flasherBad');
		}
		return $this->redirect(array('action' => 'view', $id));
	}

	public function search($field = null, $order = null){
		if ($this->request->is('post')) {
			$search_key = $this->request->data('Book')['search_key'];
			$this->Book->recursive = 0;
			$conditions = array('OR' => array(
				'Book.bkTitle LIKE' => '%' . $search_key . '%',
				'Book.bkAuthor LIKE' => '%' . $search_key . '%',
				'Book.bkID LIKE' => '%' . $search_key . '%'));
			if (empty($field) OR empty($order)) {
				$this->set('books', $this->Book->find('all', array('conditions' => $conditions, 'order' => 'Book.bkTitle ASC')));
			}
			else {
				$this->set('books', $this->Book->find('all', array('conditions' => $conditions, 'order' => $field . ' ' . $order)));
			}
		}
	}
	
	public function new_releases($field = null, $order = null) {
		$this->Book->recursive = 0;
		$conditions = array('Book.bkPubDate >' => date('Y-m-d', strtotime('-12 months')));
		if (empty($field) OR empty($order)) {
			$this->set('releases', $this->Book->find('all', array('conditions' => $conditions, 'order' => 'Book.bkPubDate DESC')));
		}
		else {
			$this->set('releases', $this->Book->find('all', array('conditions' => $conditions, 'order' => $field . ' ' . $order)));
		}
	}
	
	public function beforeFilter() {
		$this->Auth->allow('index', 'search', 'new_releases', 'view');
	}
	
	public function isAuthorized($user) {
		return parent::isAuthorized($user);
	}
}
