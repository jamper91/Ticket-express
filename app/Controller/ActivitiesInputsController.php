<?php
App::uses('AppController', 'Controller');
/**
 * ActivitiesInputs Controller
 *
 * @property ActivitiesInput $ActivitiesInput
 * @property PaginatorComponent $Paginator
 */
class ActivitiesInputsController extends AppController {

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
		$this->ActivitiesInput->recursive = 0;
		$this->set('activitiesInputs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActivitiesInput->exists($id)) {
			throw new NotFoundException(__('Invalid activities input'));
		}
		$options = array('conditions' => array('ActivitiesInput.' . $this->ActivitiesInput->primaryKey => $id));
		$this->set('activitiesInput', $this->ActivitiesInput->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivitiesInput->create();
			if ($this->ActivitiesInput->save($this->request->data)) {
				$this->Session->setFlash(__('The activities input has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities input could not be saved. Please, try again.'));
			}
		}
		$activities = $this->ActivitiesInput->Activity->find('list');
		$inputs = $this->ActivitiesInput->Input->find('list');
		$this->set(compact('activities', 'inputs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActivitiesInput->exists($id)) {
			throw new NotFoundException(__('Invalid activities input'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActivitiesInput->save($this->request->data)) {
				$this->Session->setFlash(__('The activities input has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities input could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActivitiesInput.' . $this->ActivitiesInput->primaryKey => $id));
			$this->request->data = $this->ActivitiesInput->find('first', $options);
		}
		$activities = $this->ActivitiesInput->Activity->find('list');
		$inputs = $this->ActivitiesInput->Input->find('list');
		$this->set(compact('activities', 'inputs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActivitiesInput->id = $id;
		if (!$this->ActivitiesInput->exists()) {
			throw new NotFoundException(__('Invalid activities input'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActivitiesInput->delete()) {
			$this->Session->setFlash(__('The activities input has been deleted.'));
		} else {
			$this->Session->setFlash(__('The activities input could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
