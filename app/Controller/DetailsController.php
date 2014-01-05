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
		$this->set('zips', $this->Address->find('list'));
		
		if (!empty($this->request->data)) {
			if ($this->params['data']['hiddenZIP'] == 'zipped') {
				$foundAddress = $this->Address->find('first', array('conditions' => array('Address.zipCode' => $this->params['data']['Detail']['cmnZIP'])));
				$this->request->data['Detail']['cmnCity'] = $foundAddress['Address']['cityName'];
				$this->request->data['Detail']['cmnProvince'] = $foundAddress['Address']['provName'];
				$this->request->data['Detail']['cmnPhone'] = 0 . $foundAddress['Address']['areaCode'];
			}
			else if ($detail = $this->Detail->save($this->request->data)) {
				if (!empty($detail)) {
					$this->request->data['Customer']['cmnID'] = $this->Detail->id;
					$customer = $this->Customer->save($this->request->data);
					$this->Session->setFlash(__('The detail has been saved.'));
					return $this->redirect(array('action' => 'view', $this->Detail->id));
				}
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
