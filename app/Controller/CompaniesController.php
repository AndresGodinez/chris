<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 */
class CompaniesController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'Companies.id'=>'asc'
			)
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Company->recursive = 0;
		$this->paginate['Companies']['limit']=20;
		$this->paginate['Companies']['order']= array('Companies.id'=>'asc');
		// $this->paginate['Companies']['conditions']= array('Companies.id'=>1);
		// $this->Paginator->settings=$this->paginate;

		$this->set('companies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Datos invalidos'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash('Empresa Agregada.','default',
					array(
						'class'=>'alert alert-info animated fadeOut'
						)

					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La empresa no pudo ser guardad', 'default', 
					array(
						'class'=>'alert alert-danger animated fadeOut'
						));
			}
		}
		$modes = $this->Company->Mode->find('list');
		$this->set(compact('modes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException('Empresa Invalida');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash('La empresa se ha actualizado','default', 
					array(
						'class'=>'alert alert-info animated fadeOut'
						)
					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La empresa no pudo ser guardad', 'default',array(
					'class'=>'alert alert-danger animated fadeOut'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$modes = $this->Company->Mode->find('list');
		$this->set(compact('modes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException('Empresa invalida');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash('La empresa ha sido eliminada', 'default', array(
					'class'=>'alert alert-info animated fadeOut'
				));
		} else {
			$this->Session->setFlash('La empresa no pudo ser eliminada','default',array(
				'class'=>'alert alert-danger animated fadeOut'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
