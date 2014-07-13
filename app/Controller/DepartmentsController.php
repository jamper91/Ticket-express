<?php

App::uses('AppController', 'Controller');

/**
 * Departments Controller
 *
 * @property Department $Department
 * @property PaginatorComponent $Paginator
 */
class DepartmentsController extends AppController {

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
        $this->layout=false;
        $this->Department->recursive = 0;
        $this->set('departments', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->layout=false;
        if (!$this->Department->exists($id)) {
            throw new NotFoundException(__('Invalid department'));
        }
        $options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
        $this->set('department', $this->Department->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout=false;
        if ($this->request->is('post')) {
            $this->Department->create();
            if ($this->Department->save($this->request->data)) {
                $this->Session->setFlash(__('El Departamento fue creado con éxito.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Error, no se ha podido crear el departamento, por favor intenta de nuevo.'));
            }
        }
        $countriesName = $this->Department->Country->find('list', array(
            "fields" => array(
                "Country.nombre"
            )
        ));
        debug($countriesName);
        $countries = $this->Department->Country->find('list');

        $this->set(compact('countries'));
        $this->set("countriesName", $countriesName);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Department->exists($id)) {
            throw new NotFoundException(__('Invalid department'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Department->save($this->request->data)) {
                $this->Session->setFlash(__('The department has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The department could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
            $this->request->data = $this->Department->find('first', $options);
        }
        $countries = $this->Department->Country->find('list');
        $this->set(compact('countries'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Department->id = $id;
        if (!$this->Department->exists()) {
            throw new NotFoundException(__('Invalid department'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Department->delete()) {
            $this->Session->setFlash(__('The department has been deleted.'));
        } else {
            $this->Session->setFlash(__('The department could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function getDepartamentsByCountry() {
        $this->layout="webservices";
        $country_id = $this->request->data["country_id"];
        $options = array(
            "conditions" => array(
                "Department.country_id" => $country_id
            ),
            "fields"=>array(
                "Department.id",
                "Department.nombre"
            ),
            "recursive"=>0
        );
        $departments = $this->Department->find("all", $options);
        $this->set(
                array(
                    "datos" => $departments,
                    "_serialize" => array("datos")
                )
        );
    }

}
