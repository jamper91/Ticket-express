<?php

App::uses('AppController', 'Controller');

/**
 * Activities Controller
 *
 * @property Activity $Activity
 * @property PaginatorComponent $Paginator
 */
class ActivitiesController extends AppController {

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
        $this->layout = false;
        $this->Activity->recursive = 0;
        $this->set('activities', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->layout = false;
        if (!$this->Activity->exists($id)) {
            throw new NotFoundException(__('Invalid activity'));
        }
        $options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
        $this->set('activity', $this->Activity->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout=false;
        if ($this->request->is('post')) {
            $this->Activity->create();
            if ($this->Activity->save($this->request->data)) {
                $this->Session->setFlash(__('The activity has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
            }
        }
        $events = $this->Activity->Event->find('list');
        $shelves = $this->Activity->Shelf->find('list');
        $inputs = $this->Activity->Input->find('list');
        $this->set(compact('events', 'shelves', 'inputs'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->layout=false;
        if (!$this->Activity->exists($id)) {
            throw new NotFoundException(__('Invalid activity'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Activity->save($this->request->data)) {
                $this->Session->setFlash(__('The activity has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Activity.' . $this->Activity->primaryKey => $id));
            $this->request->data = $this->Activity->find('first', $options);
        }
        $events = $this->Activity->Event->find('list');
        $shelves = $this->Activity->Shelf->find('list');
        $inputs = $this->Activity->Input->find('list');
        $this->set(compact('events', 'shelves', 'inputs'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->layout=false;
        $this->Activity->id = $id;
        if (!$this->Activity->exists()) {
            throw new NotFoundException(__('Invalid activity'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Activity->delete()) {
            $this->Session->setFlash(__('The activity has been deleted.'));
        } else {
            $this->Session->setFlash(__('The activity could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
