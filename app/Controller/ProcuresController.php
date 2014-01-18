<?php
App::uses('AppController', 'Controller');
/**
 * Procures Controller
 *
 * @property Procure $Procure
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProcuresController extends AppController {

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
		$this->Procure->recursive = 0;
		$this->set('procures', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Procure->exists($id)) {
			throw new NotFoundException(__('Invalid procure'));
		}
		$options = array('conditions' => array('Procure.' . $this->Procure->primaryKey => $id));
		$this->set('procure', $this->Procure->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Procure->create();
			if ($this->Procure->save($this->request->data)) {
				$this->Session->setFlash(__('The procure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The procure could not be saved. Please, try again.'));
			}
		}
		$procureEmployees = $this->Procure->ProcureEmployee->find('list');
		$procureBooks = $this->Procure->ProcureBook->find('list');
		$this->set(compact('procureEmployees', 'procureBooks'));
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
		if (!$this->Procure->exists($id)) {
			throw new NotFoundException(__('Invalid procure'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procure->save($this->request->data)) {
				$this->Session->setFlash(__('The procure has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The procure could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Procure.' . $this->Procure->primaryKey => $id));
			$this->request->data = $this->Procure->find('first', $options);
		}
		$procureEmployees = $this->Procure->ProcureEmployee->find('list');
		$procureBooks = $this->Procure->ProcureBook->find('list');
		$this->set(compact('procureEmployees', 'procureBooks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Procure->id = $id;
		if (!$this->Procure->exists()) {
			throw new NotFoundException(__('Invalid procure'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Procure->delete()) {
			$this->Session->setFlash(__('The procure has been deleted.'));
		} else {
			$this->Session->setFlash(__('The procure could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
