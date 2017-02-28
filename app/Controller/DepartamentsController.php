<?php
App::uses('AppController', 'Controller');
/**
 * Departaments Controller
 *
 * @property Departament $Departament
 * @property PaginatorComponent $Paginator
 */
class DepartamentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'Departaments.id'=>'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Departament->recursive = 0;
		$this->paginate['Departaments']['limit']=20;
		$this->paginate['Departaments']['order']=array('Departaments.id'=>'asc');
		// $this->paginate['Departaments']['conditions']=array('Departaments.active'=>1);


		$this->set('departaments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Departament->exists($id)) {
			throw new NotFoundException('Datos inválidos.');
		}
		$options = array('conditions' => array('Departament.' . $this->Departament->primaryKey => $id));
		$this->set('departament', $this->Departament->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Departament->create();
			if ($this->Departament->save($this->request->data)) {
				$this->Session->setFlash('Departamento Agregado','default',array(
						'class'=>'alert alert-info animated fadeOut'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El departamento no pudo ser guardado','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
			}
		}
		$users = $this->Departament->User->find('list');
		$companies = $this->Departament->Company->find('list');
		$this->set(compact('users', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Departament->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departament->save($this->request->data)) {
				$this->Session->setFlash('Departamento Actualizado','default', array(
						'class'=>'alert alert-info animated fadeOut'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El departamento no pudo ser actualizado, intente nuevamente','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
			}
		} else {
			$options = array('conditions' => array('Departament.' . $this->Departament->primaryKey => $id));
			$this->request->data = $this->Departament->find('first', $options);
		}
		$users = $this->Departament->User->find('list');
		$companies = $this->Departament->Company->find('list');
		$this->set(compact('users', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Departament->id = $id;
		if (!$this->Departament->exists()) {
			throw new NotFoundException('Datos inválidos.');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Departament->delete()) {
			$this->Session->setFlash('Departamento Eliminado','default',array(
						'class'=>'alert alert-info animated fadeOut'
						)
			);
		} else {
			$this->Session->setFlash('El departamento no pudo ser eliminado','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
			);
		}
		return $this->redirect(array('action' => 'index'));
	}
}
