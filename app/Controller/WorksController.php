<?php
App::uses('AppController', 'Controller');
/**
 * Works Controller
 *
 * @property Work $Work
 * @property PaginatorComponent $Paginator
 */
class WorksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'Works.status_id'=>'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Work->recursive = 0;
		$this->paginate['Works']['limit']=20;
		$this->paginate['Works']['order']= array('Woks.status_id'=>'asc');
		// $this->paginate['Companies']['conditions']= array('Companies.id'=>1);
		// $this->Paginator->settings=$this->paginate;
		$this->set('works', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
		$this->set('work', $this->Work->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Work->create();
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(
				'Trabajo Agregado','default',
					array(
						'class'=>'alert alert-info animated fadeOut'
						)

					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El trabajo no pudo ser agregado intente nuevamente','default',array('class'=>'alert alert-danger animated fadeOut'
					));
			}
		}
		$statuses = $this->Work->Status->find('list');
		$this->set(compact('statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException('Busqueda inválida');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash('El trabajo ha sido Actualizado', 'default',array('class'=>'alert alert-info animated fadeOut'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El trabajo no pudo ser actualizado, intente nuevamente', 'default',array('class'=>'alert alert-danger animated fadeOut'));
			}
		} else {
			$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
			$this->request->data = $this->Work->find('first', $options);
		}
		$statuses = $this->Work->Status->find('list');
		$this->set(compact('statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Work->id = $id;
		if (!$this->Work->exists()) {
			throw new NotFoundException(__('Invalid work'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Work->delete()) {
			$this->Session->setFlash('Trabajo eliminado', 'default',array('class'=>'alert alert-success animated fadeOut'));
		} else {
			$this->Session->setFlash('El trabajo no pudo ser eliminado', 'default',array('class'=>'alert alert-danger animated fadeOut'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
