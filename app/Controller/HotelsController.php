<?php
App::uses('AppController', 'Controller');
/**
 * Hotels Controller
 *
 * @property Hotel $Hotel
 * @property PaginatorComponent $Paginator
 */
class HotelsController extends AppController {

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
		$this->Hotel->recursive = 0;
		$this->set('hotels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
		$this->set('hotel', $this->Hotel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hotel->create();
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		}
		$events = $this->Hotel->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hotel->exists($id)) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hotel.' . $this->Hotel->primaryKey => $id));
			$this->request->data = $this->Hotel->find('first', $options);
		}
		$events = $this->Hotel->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hotel->delete()) {
			$this->Session->setFlash(__('The hotel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hotel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
