<?php
App::uses('AppController', 'Controller');
/**
 * Coupons Controller
 *
 * @property Coupon $Coupon
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CouponsController extends AppController {

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
		$this->Coupon->recursive = 0;
		$this->set('coupons', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		$options = array('conditions' => array('Coupon.' . $this->Coupon->primaryKey => $id));
		$this->set('coupon', $this->Coupon->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coupon->create();
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'index'));
			}
			else if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->params['data']['hiddenCancel'] == 'cancelled') {
				$this->Session->setFlash('Changes were not saved. Operation was cancelled.', 'flasherNeutral');
				return $this->redirect(array('action' => 'index'));
			}
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coupon.' . $this->Coupon->primaryKey => $id));
			$this->request->data = $this->Coupon->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coupon->delete()) {
			$this->Session->setFlash(__('The coupon has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coupon could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
