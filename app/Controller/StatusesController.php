<?php
App::uses('AppController', 'Controller');
/**
 * Statuses Controller
 *
 * @property Status $Status
 * @property PaginatorComponent $Paginator
 */
class StatusesController extends AppController {

/**
 * Components
 *
 * @var array
 */
		public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'statuses.id'=>'asc'
			)
		);


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Status->recursive = 0;
		$this->paginate['Statuses']['limit']=20;
		$this->paginate['Statuses']['order']= array('Statuses.id'=>'asc');
		// $this->paginate['Companies']['conditions']= array('Companies.id'=>1);
		// $this->Paginator->settings=$this->paginate;

		$this->set('statuses', $this->paginate());

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Status->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
		$this->set('status', $this->Status->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Status->create();
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash('Estado de trabajo agregado', 'default', 
					array(
							'class'=>'alert alert-info animated fadeOut'

						)
					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El estado de trabajo no pudo ser guardado, intente nuevamente' ,'default', 
					array(
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
		if (!$this->Status->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash('Estado de Trabajo Actualizado', 'default', 
					array(
							'class'=>'alert alert-info animated fadeOut'

						)
					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Estado de Trabajo no pudo ser actualizado, intente nuevamente','default', 
					array(
							'class'=>'alert alert-danger animated fadeOut'

						)
					);
			}
		} else {
			$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
			$this->request->data = $this->Status->find('first', $options);
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
		$this->Status->id = $id;
		if (!$this->Status->exists()) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Status->delete()) {
			$this->Session->setFlash('Estado de Trabajo Eliminado','default', 
					array(
							'class'=>'alert alert-info animated fadeOut'

						)
					);
		} else {
			$this->Session->setFlash('El estado de trabajo no pudo ser Eliminado, intente nuevamente','default', 
					array(
							'class'=>'alert alert-danger animated fadeOut'

						));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
