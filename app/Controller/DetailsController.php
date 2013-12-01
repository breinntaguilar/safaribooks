<?php
App::uses('AppController', 'Controller');

class DetailsController extends AppController {
	public $uses = array('Detail', 'Customer', 'Credit');
	public $components = array('Paginator', 'Session');
	
	//$this->loadModel('Address');
	//$addresses = $this->Address->read();
	
	public function index() {
		$this->Detail->recursive = 0;
		$this->set('details', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Detail->exists($id)) {
			throw new NotFoundException(__('Invalid detail'));
		}
		$options = array('conditions' => array('Detail.' . $this->Detail->primaryKey => $id));
		$this->set('detail', $this->Detail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function register() {
		$this->loadModel('Address');
		$this->set('addresses', $this->Address->find('all'));
		$this->set('zips', $this->Address->find('list'));
		//$addresses = $this->Address->find('all', array('limit' => '44'));
		//$this->setJSvar(compact('addresses'));
		//$this->setJSvar('addresses', array(array('Address' => array('zipCode' => 1000)), array('Address' => array('zipCode' => 2000))));
		//$this->setJSvar('addresses', array('qwe','asd'));
		
		if (!empty($this->request->data)) {
			if ($detail = $this->Detail->save($this->request->data)) {
				if (!empty($detail)) {
					$this->request->data['Customer']['cmnID'] = $this->Detail->id;
					$customer = $this->Customer->save($this->request->data);
					$this->Session->setFlash(__('The detail has been saved.'));
					return $this->redirect(array('action' => 'view', $this->Detail->id));
				}
				/*if(!empty($customer)) {
					$this->request->data['Credit']['cusID'] = $this->Customer->id;
					$this->Credit->save($this->request->data);
					
					$this->Session->setFlash(__('The detail has been saved.'));
					return $this->redirect(array('action' => 'index'));
				}*/
			}
			else {
				$this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
			}
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detail->create();
			if ($this->Detail->save($this->request->data)) {
				$this->Session->setFlash(__('The detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
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
		if (!$this->Detail->exists($id)) {
			throw new NotFoundException(__('Invalid detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Detail->save($this->request->data)) {
				$this->Session->setFlash(__('The detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Detail.' . $this->Detail->primaryKey => $id));
			$this->request->data = $this->Detail->find('first', $options);
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
		$this->Detail->id = $id;
		if (!$this->Detail->exists()) {
			throw new NotFoundException(__('Invalid detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Detail->delete()) {
			$this->Session->setFlash(__('The detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
