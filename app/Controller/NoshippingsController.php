<?php
App::uses('AppController', 'Controller');
/**
 * Noshippings Controller
 *
 * @property Noshipping $Noshipping
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NoshippingsController extends AppController {

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
		$this->Noshipping->recursive = 0;
		$this->set('noshippings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Noshipping->exists($id)) {
			throw new NotFoundException(__('Invalid noshipping'));
		}
		$options = array('conditions' => array('Noshipping.' . $this->Noshipping->primaryKey => $id));
		$this->set('noshipping', $this->Noshipping->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Noshipping->create();
			if ($this->Noshipping->save($this->request->data)) {
				$this->Session->setFlash(__('The noshipping has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noshipping could not be saved. Please, try again.'));
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
		if (!$this->Noshipping->exists($id)) {
			throw new NotFoundException(__('Invalid noshipping'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Noshipping->save($this->request->data)) {
				$this->Session->setFlash(__('The noshipping has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noshipping could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Noshipping.' . $this->Noshipping->primaryKey => $id));
			$this->request->data = $this->Noshipping->find('first', $options);
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
		$this->Noshipping->id = $id;
		if (!$this->Noshipping->exists()) {
			throw new NotFoundException(__('Invalid noshipping'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noshipping->delete()) {
			$this->Session->setFlash(__('The noshipping has been deleted.'));
		} else {
			$this->Session->setFlash(__('The noshipping could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
