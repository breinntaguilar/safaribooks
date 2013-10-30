<?php
App::uses('AppController', 'Controller');

class BooksController extends AppController {
	public $components = array('Paginator', 'Session');
	
	public function index() {
		$this->Book->recursive = 0;
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
			$data = $this->request->data['Book'];
			
			if (!$data['bkCover']['name']) {
				unset($data['bkCover']);
			}
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		}
	}
	
	public function edit($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$data = $this->request->data['Book'];
			
			if (!$data['bkCover']['name']) {
				unset($data['bkCover']);
			}
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
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
		
		$this->request->onlyAllow('post', 'delete');
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('The book has been deleted.'));
		}
		else {
			$this->Session->setFlash(__('The book could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
