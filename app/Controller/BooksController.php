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
			
			if (!$this->request->data['Book']['bkCover']['name']) {
				unset($this->request->data['Book']['bkCover']);
			}
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'index'));
			}
			else if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved.'));
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
		
		$this->request->onlyAllow('post', 'delete');
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('The book has been deleted.', 'flasherGood'));
		}
		else {
			$this->Session->setFlash(__('The book could not be deleted. Please, try again.', 'flasherBad'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search(){
		// echo "<pre>";
		// print_r($this->request->data);

		// echo "<br><br>";
		// // echo "\r\nKEY:".$search_key=$this->request->data(['Book']['search_key']);
		$search_key=$this->request->data('Book')['search_key']; //$this->request['search_key']; exit;
		$this->request->data=
			array(
			    'Book' => array(
			        'bkTitle' => $search_key,
			        'bkAuthor' => $search_key,
					'bkRating' => $search_key,
					'bkPubDate' => $search_key
			    )
			);

		$conditions = $this->postConditions(
		    $this->request->data,
		    array(
		        'bkTitle' => 'LIKE',
		        'bkAuthor' => 'LIKE',
		        'bkRating' => 'LIKE',
		        'bkPubDate' => 'LIKE'
	    	), 'OR');

		
		$res=$this->Book->find('all', compact('conditions'));
		

		// $db =& ConnectionManager::getDataSource('default');
		// $db->showLog();

		// echo "<pre>\r\nresult:";
		// print_r($res);
		// echo "\r\ncount:".count($res);

		$this->Book->recursive = 0;
		// $this->set('books', $this->Paginator->paginate());
		$this->set('book', $res);

	}

	public function new_releases() {

		$this->loadModel("Book");
		$this->set('releases', $this->Book->getNewReleases());
	}
}
