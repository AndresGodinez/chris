<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'Users.id'=>'asc'
			)
		);



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->paginate['Users']['limit']=20;
		$this->paginate['Users']['order']= array('Users.id'=>'asc');
		// $this->paginate['Companies']['conditions']= array('Companies.id'=>1);
		// $this->Paginator->settings=$this->paginate;

		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El usuario se ha guardado','default',array(
					'class'=>'alert alert-danger animated fadeOut'
						)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No pudo ser guardado intente nuevamente','default',array(
						'class'=>'alert alert-danger animated fadeOut'

					)
				);
			}
		}
		$roles = $this->User->Role->find('list');
		$genders = $this->User->Gender->find('list');
		$jobs = $this->User->Job->find('list');
		$departaments = $this->User->Departament->find('list');
		$this->set(compact('roles', 'genders', 'jobs', 'departaments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException('Datos invalidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Usuario Guardado','default',array(
						'class'=>'alert alert-info animated fadeOut'

					)
				);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El usuario no pudo ser guardado, intente nuevamente','default', array('class'=>'alert alert-danger animated fadeOut'
									)
				);
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$genders = $this->User->Gender->find('list');
		$jobs = $this->User->Job->find('list');
		$departaments = $this->User->Departament->find('list');
		$this->set(compact('roles', 'genders', 'jobs', 'departaments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('El usuario ha sido eliminado', 'default', array(
					'class'=>'alert alert-info animated fadeOut'
				)
			);
		} else {
			$this->Session->setFlash('El usuario no pudo ser eliminado, intente nuevamente', 'default', array('class'=>'alert alert-danger animated fadeOut'
								)
			);
		}
		return $this->redirect(array('action' => 'index'));
	}
}
