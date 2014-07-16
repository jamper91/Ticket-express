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
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = false;
        $this->Company->recursive = 0;
        $this->set('companies', $this->Paginator->paginate());
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
        if (!$this->Company->exists($id)) {
            throw new NotFoundException(__('Invalid company'));
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
        $this->layout = false;
        $this->loadModel('Company');
        if ($this->request->is('post')) {
            $data = $this->data;

            $newPeole = $this->People->create();
            $newPeole = array(
                'People' => array(
                    'pers_primNombre' => $data['People']['pers_primNombre'],
                    'pers_primApellido' => $data['People']['pers_primApellido'],
                    'document_type_id' => $data['People']['document_type_id'],
                    'city_id' => $data['Company']['city_id'],
                    'pers_documento' => $data['People']['pers_documento'],
                    'pers_direccion' => $data['People']['pers_direccion'],
                    'pers_telefono' => $data['People']['pers_telefono'],
                    'pers_celular' => $data['People']['pers_celular'],
                    'pers_fechNacimiento' => $data['People']['pers_fechNacimiento'],
                    'pers_tipoSangre' => $data['People']['pers_tipoSangre'],
                    'pers_mail' => $data['People']['pers_mail']
                )
            );
            $this->People->save($newPeole);
            $newPeopleId = $this->People->getLastInsertId();

            $newCompany = $this->Company->create();
            $newCompany = array(
                'Company' => array(
                    'person_id' => $newPeopleId,
                    'empr_nombre' => $data['Company']['empr_nombre'],
                    'city_id' => $data['Company']['city_id'],
                    'empr_pagiWeb' => $data['Company']['empr_pagiWeb'],
                    'empr_nit' => $data['Company']['empr_nit'],
                    'empr_mail' => $data['Company']['empr_mail'],
                    'empr_direccion' => $data['Company']['empr_direccion'],
                    'empr_barrio' => $data['Company']['empr_barrio'],
                    'empr_telefono' => $data['Company']['empr_telefono'],
                )
            );
            $this->Company->save($newCompany);

            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash(__('The company has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The company could not be saved. Please, try again.'));
            }
        }

        //tipo de documento
        $documentTypeName = $this->Company->Person->DocumentType->find('list', array(
            "fields" => array(
                "DocumentType.tido_descripcion"
            )
        ));
        //debug($documentTypeName);
        //pais
        $countriesName = $this->Company->Person->City->Department->Country->find('list', array(
            "fields" => array(
                "Country.nombre"
            )
        ));
        //debug($countriesName);
        //departamento
        $departmentsName = $this->Company->Person->City->Department->find('list', array(
            "fields" => array(
                "Department.nombre"
            )
        ));
        //debug($departmentsName);
        //ciudad
        $citiesName = $this->Company->Person->City->find('list', array(
            "fields" => array(
                "City.nombre"
            )
        ));
        $people = $this->Company->Person->find('list');
        $documentTypes = $this->Company->Person->DocumentType->find('list');
        $countries = $this->Company->Person->City->Department->Country->find('list');
        $this->set(compact('people','documentTypes','countries'));

        $departments = $this->Company->Person->City->Department->find('list');
        $this->set(compact('departments'));

        $cities = $this->Company->Person->City->find('list');
        $this->set(compact('cities'));

        $this->set("documentTypeName", $documentTypeName);
        $this->set("countriesName", $countriesName);
        $this->set("departmentsName", $departmentsName);
        $this->set("citiesName", $citiesName);
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
        if (!$this->Company->exists($id)) {
            throw new NotFoundException(__('Invalid company'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Company->save($this->request->data)) {
                $this->Session->setFlash(__('The company has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The company could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
            $this->request->data = $this->Company->find('first', $options);
        }
        $people = $this->Company->Person->find('list');
        $cities = $this->Company->City->find('list');
        $events = $this->Company->Event->find('list');
        $this->set(compact('people', 'cities', 'events'));
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
        $this->Company->id = $id;
        if (!$this->Company->exists()) {
            throw new NotFoundException(__('Invalid company'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Company->delete()) {
            $this->Session->setFlash(__('The company has been deleted.'));
        } else {
            $this->Session->setFlash(__('The company could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}