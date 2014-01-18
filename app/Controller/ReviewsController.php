<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 * @property Review $Review
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReviewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->Review->recursive = 0;
		//$this->Paginator->settings = array('conditions' => array('Review.bkID' => $id));
		$this->set('reviews', $this->Paginator->paginate());
	}
	
/**
 * index_book method
 *
 * @return void
 */
	public function index_book($id = null) {
		$this->Review->recursive = 0;
		$this->Paginator->settings = array('conditions' => array('Review.bkID' => $id));
		$this->set('reviews', $this->Paginator->paginate());
	}

/**
 * index_emp method
 *
 * @return void
 */
	public function index_emp($id = null) {
		$this->Review->recursive = 0;
		$this->Paginator->settings = array('conditions' => array('Review.bkID' => $id));
		$this->set('reviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
		$this->set('review', $this->Review->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Review->create();
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The review has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
			}
		}
		$reviewUsers = $this->Review->ReviewUser->find('list');
		$reviewBooks = $this->Review->ReviewBook->find('list');
		$this->set(compact('reviewUsers', 'reviewBooks'));
		$this->set('bookId', $id);
		$this->set('userId', $this->Session->read('Auth')['User']['usrID']);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The review has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The review could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
			$this->request->data = $this->Review->find('first', $options);
		}
		$reviewUsers = $this->Review->ReviewUser->find('list');
		$reviewBooks = $this->Review->ReviewBook->find('list');
		$this->set(compact('reviewUsers', 'reviewBooks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Review->delete()) {
			$this->Session->setFlash(__('The review has been deleted.'));
		} else {
			$this->Session->setFlash(__('The review could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function isAuthorized($user) {
		if ($this->action === 'add') {
			return true;
		}
		return parent::isAuthorized($user);
	}
}
