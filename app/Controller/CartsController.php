<?php
App::uses('AppController', 'Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CartsController extends AppController {

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
		$this->Cart->recursive = 0;
		$this->set('carts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
		$this->set('cart', $this->Cart->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash('The cart has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The cart could not be saved. Please, try again.', 'flasherBad');
			}
		}
		$cartUsers = $this->Cart->CartUser->find('list');
		$cartBooks = $this->Cart->CartBook->find('list');
		$this->set(compact('cartUsers', 'cartBooks'));
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
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__('Invalid cart'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash('The cart has been saved.', 'flasherGood');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cart could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
			$this->request->data = $this->Cart->find('first', $options);
		}
		$cartCustomers = $this->Cart->CartCustomer->find('list');
		$cartBooks = $this->Cart->CartBook->find('list');
		$this->set(compact('cartCustomers', 'cartBooks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__('Invalid cart'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__('The cart has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cart could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function beforeFilter() {
		$this->Auth->allow('index');
	}

	public function isAuthorized($user) {
		if (in_array($this->action, array('add', 'view', 'edit', 'delete'))) {
			return true;
		}
		return parent::isAuthorized($user);
	}
}
