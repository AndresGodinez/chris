<?php
App::uses('AppController', 'Controller');
/**
 * Genders Controller
 *
 * @property Gender $Gender
 * @property PaginatorComponent $Paginator
 */
class GendersController extends AppController {

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
		$this->Gender->recursive = 0;
		$this->set('genders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gender->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->loadModel('Job');
		$puestos=$this->Job->find('all');
		$options = array('conditions' => array('Gender.' . $this->Gender->primaryKey => $id));
		$this->set('gender', $this->Gender->find('first', $options));
		$this->set('puestos', $puestos);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gender->create();
			if ($this->Gender->save($this->request->data)) {
				$this->Session->setFlash('Genero Agregado','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El genero no pudo ser agregado, intente nuevamente','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
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
		if (!$this->Gender->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gender->save($this->request->data)) {
				$this->Session->setFlash('Genero Actualizado','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El genero no pudo ser actualizado, intente nuevamente','defautl',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
				);
			}
		} else {
			$options = array('conditions' => array('Gender.' . $this->Gender->primaryKey => $id));
			$this->request->data = $this->Gender->find('first', $options);
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
		$this->Gender->id = $id;
		if (!$this->Gender->exists()) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Gender->delete()) {
			$this->Session->setFlash('El genero ha sido eliminado','default',array(
						'class'=>'alert alert-info animated fadeOut'
						));
		} else {
			$this->Session->setFlash('El genero no pudo ser eliminado, intente nuevamente','default',array(
						'class'=>'alert alert-danger animated fadeOut'
						)
			);
		}
		return $this->redirect(array('action' => 'index'));
	}
}
