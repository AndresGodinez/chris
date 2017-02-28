<?php
App::uses('AppController', 'Controller');
/**
 * Payments Controller
 *
 * @property Payment $Payment
 * @property PaginatorComponent $Paginator
 */
class PaymentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $paginate=array(
		'limit'=>20,
		'order'=>array(
			'Payments.id'=>'asc'
			)
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Payment->recursive = 0;
		$this->paginate['Payments']['limit']=20;
		$this->paginate['Payments']['order']= array('Payments.id'=>'asc');
		// $this->paginate['Companies']['conditions']= array('Companies.id'=>1);
		// $this->Paginator->settings=$this->paginate;

		$this->set('payments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Payment->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		$options = array('conditions' => array('Payment.' . $this->Payment->primaryKey => $id));
		$this->set('payment', $this->Payment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Payment->create();
			if ($this->Payment->save($this->request->data)) {
				$this->Session->setFlash('Pago guardado','default', 
					array(
							'class'=>'alert alert-info animated fadeOut'

						)
					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El pago no pudo ser guardado','default', 
					array(
						'class'=>'alert alert-info animated fadeOut'
					)
				);
			}
		}
		$companies = $this->Payment->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Payment->exists($id)) {
			throw new NotFoundException('Datos inválidos');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Payment->save($this->request->data)) {
				$this->Session->setFlash('Pago Actualizado','default', 
					array(
						'class'=>'alert alert-info animated fadeOut'
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('el pago no pudo ser guardado, intente nuevamente', 'default', array(
									'class'=>'alert alert-info animated fadeOut'
									)
				);
			}
		} else {
			$options = array('conditions' => array('Payment.' . $this->Payment->primaryKey => $id));
			$this->request->data = $this->Payment->find('first', $options);
		}
		$companies = $this->Payment->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Payment->id = $id;
		if (!$this->Payment->exists()) {
			throw new NotFoundException('Datos inválidos');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Payment->delete()) {
			$this->Session->setFlash('Pago eliminado', 'dafault', 
				array(
					'class'=>'alert alert-info animated fadeOut'
					)
			);
		} else {
			$this->Session->setFlash('El pago no pudo ser guardado', 'default', 
				array(
					'class'=>'alert alert-info animated fadeOut'
					)
				);
		}
		return $this->redirect(array('action' => 'index'));
	}
}
