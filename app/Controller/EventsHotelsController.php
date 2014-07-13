<?php

App::uses('AppController', 'Controller');

/**
 * EventsHotels Controller
 *
 * @property EventsHotel $EventsHotel
 * @property PaginatorComponent $Paginator
 */
class EventsHotelsController extends AppController {

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
        $this->EventsHotel->recursive = 0;
        $this->set('eventsHotels', $this->Paginator->paginate());
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
        if (!$this->EventsHotel->exists($id)) {
            throw new NotFoundException(__('Invalid events hotel'));
        }
        $options = array('conditions' => array('EventsHotel.' . $this->EventsHotel->primaryKey => $id));
        $this->set('eventsHotel', $this->EventsHotel->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->EventsHotel->create();
            if ($this->EventsHotel->save($this->request->data)) {
                $this->Session->setFlash(__('The events hotel has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The events hotel could not be saved. Please, try again.'));
            }
        }
        $events = $this->EventsHotel->Event->find('list');
        $hotels = $this->EventsHotel->Hotel->find('list');
        $this->set(compact('events', 'hotels'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->layout = false;
        if (!$this->EventsHotel->exists($id)) {
            throw new NotFoundException(__('Invalid events hotel'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->EventsHotel->save($this->request->data)) {
                $this->Session->setFlash(__('The events hotel has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The events hotel could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('EventsHotel.' . $this->EventsHotel->primaryKey => $id));
            $this->request->data = $this->EventsHotel->find('first', $options);
        }
        $events = $this->EventsHotel->Event->find('list');
        $hotels = $this->EventsHotel->Hotel->find('list');
        $this->set(compact('events', 'hotels'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->layout = false;
        $this->EventsHotel->id = $id;
        if (!$this->EventsHotel->exists()) {
            throw new NotFoundException(__('Invalid events hotel'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EventsHotel->delete()) {
            $this->Session->setFlash(__('The events hotel has been deleted.'));
        } else {
            $this->Session->setFlash(__('The events hotel could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
