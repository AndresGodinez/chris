<?php
App::uses('AppController', 'Controller');
/**
 * Modes Controller
 *
 * @property Mode $Mode
 * @property PaginatorComponent $Paginator
 */
class ModesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mode->recursive = 0;
		$this->set('modes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mode->exists($id)) {
			throw new NotFoundException(__('Invalid mode'));
		}
		$options = array('conditions' => array('Mode.' . $this->Mode->primaryKey => $id));
		$this->set('mode', $this->Mode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mode->create();
			if ($this->Mode->save($this->request->data)) {
				$this->Session->setFlash(__('The mode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mode could not be saved. Please, try again.'));
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
		if (!$this->Mode->exists($id)) {
			throw new NotFoundException(__('Invalid mode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mode->save($this->request->data)) {
				$this->Session->setFlash(__('The mode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mode.' . $this->Mode->primaryKey => $id));
			$this->request->data = $this->Mode->find('first', $options);
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
		$this->Mode->id = $id;
		if (!$this->Mode->exists()) {
			throw new NotFoundException(__('Invalid mode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mode->delete()) {
			$this->Session->setFlash(__('The mode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
