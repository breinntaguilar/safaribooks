<?php
App::uses('AppController', 'Controller');
/**
 * Checkouts Controller
 *
 * @property Checkout $Checkout
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CheckoutsController extends AppController {

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
		$this->Checkout->recursive = 0;
		$this->set('checkouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Checkout->exists($id)) {
			throw new NotFoundException(__('Invalid checkout'));
		}
		$options = array('conditions' => array('Checkout.' . $this->Checkout->primaryKey => $id));
		$this->set('checkout', $this->Checkout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Checkout->create();
			if ($this->Checkout->save($this->request->data)) {
				$this->Session->setFlash(__('The checkout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checkout could not be saved. Please, try again.'));
			}
		}
		$checkoutCustomers = $this->Checkout->CheckoutCustomer->find('list');
		$this->set(compact('checkoutCustomers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Checkout->exists($id)) {
			throw new NotFoundException(__('Invalid checkout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Checkout->save($this->request->data)) {
				$this->Session->setFlash(__('The checkout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checkout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Checkout.' . $this->Checkout->primaryKey => $id));
			$this->request->data = $this->Checkout->find('first', $options);
		}
		$checkoutCustomers = $this->Checkout->CheckoutCustomer->find('list');
		$this->set(compact('checkoutCustomers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Checkout->id = $id;
		if (!$this->Checkout->exists()) {
			throw new NotFoundException(__('Invalid checkout'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Checkout->delete()) {
			$this->Session->setFlash(__('The checkout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The checkout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
