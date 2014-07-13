<?php

App::uses('AppController', 'Controller');

/**
 * Cities Controller
 *
 * @property City $City
 * @property PaginatorComponent $Paginator
 */
class CitiesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'RequestHandler');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = false;
        $this->City->recursive = 0;
        $this->set('cities', $this->Paginator->paginate());
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
        if (!$this->City->exists($id)) {
            throw new NotFoundException(__('Invalid city'));
        }
        $options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
        $this->set('city', $this->City->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = false;
        $this->loadModel('Country');
        if ($this->request->is('post')) {
            $this->City->create();
            if ($this->City->save($this->request->data)) {
                $this->Session->setFlash(__('La ciudad ha sido creada.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Error al crear la ciudad, por favor intente de nuevo.'));
            }
        }
        $countriesName = $this->Country->find('list', array(
            "fields" => array(
                "Country.nombre"
            )
        ));
        debug($countriesName);
        $countries = $this->Country->find('list');

        $this->set(compact('countries'));
        $this->set("countriesName", $countriesName);

        $departments = $this->City->Department->find('list');
        $this->set(compact('departments'));
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
        if (!$this->City->exists($id)) {
            throw new NotFoundException(__('Invalid city'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->City->save($this->request->data)) {
                $this->Session->setFlash(__('The city has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The city could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
            $this->request->data = $this->City->find('first', $options);
        }
        $departments = $this->City->Department->find('list');
        $this->set(compact('departments'));
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
        $this->City->id = $id;
        if (!$this->City->exists()) {
            throw new NotFoundException(__('Invalid city'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->City->delete()) {
            $this->Session->setFlash(__('The city has been deleted.'));
        } else {
            $this->Session->setFlash(__('The city could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function getCitiesByDepartment() {

        $this->layout = "webservices";
        $department_id = $this->request->data["department_id"]; //Department
        debug($department_id);
        $options = array(
            "conditions" => array(
                "City.department_id" => $department_id
            ),
            "fields" => array(
                "City.id",
                "City.nombre"
            ),
            "recursive" => 0
        );
        $cities = $this->City->find("all", $options);
        $log = $this->City->getDataSource()->getLog(false, false);
        debug($log);
        $this->set(
                array(
                    "datos" => $cities,
                    "_serialize" => array("datos")
                )
        );
    }

}
