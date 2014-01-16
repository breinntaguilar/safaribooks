<?php
App::uses('AppController', 'Controller');
/**
 * Wishlists Controller
 *
 * @property Wishlist $Wishlist
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class WishlistsController extends AppController {

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
	public function index() {
		$this->Wishlist->recursive = 0;
		$this->set('wishlists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
		$this->set('wishlist', $this->Wishlist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Wishlist->create();
			if ($this->Wishlist->save($this->request->data)) {
				$this->Session->setFlash(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wishlist could not be saved. Please, try again.'));
			}
		}
		$wishlistCustomers = $this->Wishlist->WishlistCustomer->find('list');
		$wishlistBooks = $this->Wishlist->WishlistBook->find('list');
		$this->set(compact('wishlistCustomers', 'wishlistBooks'));
		$this->set('bookId', $id);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wishlist->save($this->request->data)) {
				$this->Session->setFlash(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wishlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
			$this->request->data = $this->Wishlist->find('first', $options);
		}
		$wishlistCustomers = $this->Wishlist->WishlistCustomer->find('list');
		$wishlistBooks = $this->Wishlist->WishlistBook->find('list');
		$this->set(compact('wishlistCustomers', 'wishlistBooks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Wishlist->id = $id;
		if (!$this->Wishlist->exists()) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Wishlist->delete()) {
			$this->Session->setFlash(__('The wishlist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wishlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
