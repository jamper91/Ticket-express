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
//    public $components = array('Paginator');
//    var $components = array('Auth','Session','Paginator');
    var $components = array('Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            )
        ),
        'Session',
        'Paginator');
    
    function beforeFilter() {
        $this->Auth->fields = array(
            'username' => 'usuario',
            'password' => 'password'
            );
        $this->Auth->allow('registrar','add','logout');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = false;
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
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
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
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
        $this->layout = false;
        $this->loadModel('People');
        if ($this->request->is('post')) {

            $data = $this->data;

// this is for the case you want to insert into 2 tables at a same time
            $newPeole = $this->People->create();
            $newPeole = array(
                'People' => array(
                    'pers_primNombre' => $data['People']['pers_primNombre'],
                    'pers_primApellido' => $data['People']['pers_primApellido'],
                    'document_type_id' => $data['User']['document_type_id'],
                    'city_id' => $data['User']['city_id'],
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
            debug($newPeopleId);
            /**
             * or if you already have Game Id, and Developer Id, then just load it on, and 
             * put it in the statement below, to create a new Assignment
             * */
            $newUser = $this->User->create();
            $newUser = array(
                'User' => array(
                    'person_id' => $newPeopleId,
                    'usuario' => $data['User']['usuario'],
                    'password' => $data['User']['password'],
                    'type_user_id' => $data['User']['type_user_id']
                )
            );
            $this->User->save($newUser);
            //fin codigo para la isercion multiple
        }
        //cargar select
        //tipo de documento
        $documentTypeName = $this->User->Person->DocumentType->find('list', array(
            "fields" => array(
                "DocumentType.tido_descripcion"
            )
        ));
        //debug($documentTypeName);
        //tipo de usuario
        $typeUserName = $this->User->TypeUser->find('list', array(
            "fields" => array(
                "TypeUser.descripcion"
            )
        ));
        //debug($typeUserName);
        //pais
        $countriesName = $this->User->Person->City->Department->Country->find('list', array(
            "fields" => array(
                "Country.nombre"
            )
        ));
        //debug($countriesName);
        //departamento
        $departmentsName = $this->User->Person->City->Department->find('list', array(
            "fields" => array(
                "Department.nombre"
            )
        ));
        //debug($departmentsName);
        //ciudad
        $citiesName = $this->User->Person->City->find('list', array(
            "fields" => array(
                "City.nombre"
            )
        ));
        //debug($citiesName);
        ///**/
        $people = $this->User->Person->find('list');
        $typeUsers = $this->User->TypeUser->find('list');
        $authorizations = $this->User->Authorization->find('list');
        $documentTypes = $this->User->Person->DocumentType->find('list');
        $countries = $this->User->Person->City->Department->Country->find('list');
        $this->set(compact('people', 'typeUsers', 'authorizations', 'documentTypes', 'countries'));

        $departments = $this->User->Person->City->Department->find('list');
        $this->set(compact('departments'));

        $cities = $this->User->Person->City->find('list');
        $this->set(compact('cities'));
        //montar descripcion a select
        $this->set("documentTypeName", $documentTypeName);
        $this->set("typeUserName", $typeUserName);
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
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }


        $people = $this->User->Person->find('list');
        $typeUsers = $this->User->TypeUser->find('list');
        $authorizations = $this->User->Authorization->find('list');
        $this->set(compact('people', 'typeUsers', 'authorizations'));
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function registrar() {
        $this->loadModel('People');
        if ($this->request->is('post')) {

            $data = $this->data;

// this is for the case you want to insert into 2 tables at a same time
            $newPeole = $this->People->create();
            $newPeole = array(
                'People' => array(
                    'pers_primNombre' => $data['People']['pers_primNombre'],
                    'pers_primApellido' => $data['People']['pers_primApellido'],
                    'document_type_id' => $data['User']['document_type_id'],
                    'city_id' => $data['User']['city_id'],
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
            debug($newPeopleId);
            /**
             * or if you already have Game Id, and Developer Id, then just load it on, and 
             * put it in the statement below, to create a new Assignment
             * */
            $newUser = $this->User->create();
            $newUser = array(
                'User' => array(
                    'person_id' => $newPeopleId,
                    'usuario' => $data['User']['usuario'],
                    'password' => $data['User']['password'],
                    'type_user_id' => $data['User']['type_user_id']
                )
            );
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
//                    $this->User->create();
//                    $this->User->save($this->data);
                $this->User->save($newUser);
            } else {
                debug("No se pudo crear al usuario");
                debug("Llega: ".$this->data['User']['password']);
                debug("Auth: ".$this->data['User']['password_confirm']);
            }

            //fin codigo para la isercion multiple
        }
        //cargar select
        //tipo de documento
        $documentTypeName = $this->User->Person->DocumentType->find('list', array(
            "fields" => array(
                "DocumentType.tido_descripcion"
            )
        ));
        //debug($documentTypeName);
        //tipo de usuario
        $typeUserName = $this->User->TypeUser->find('list', array(
            "fields" => array(
                "TypeUser.descripcion"
            )
        ));
        //debug($typeUserName);
        //pais
        $countriesName = $this->User->Person->City->Department->Country->find('list', array(
            "fields" => array(
                "Country.nombre"
            )
        ));
        //debug($countriesName);
        //departamento
        $departmentsName = $this->User->Person->City->Department->find('list', array(
            "fields" => array(
                "Department.nombre"
            )
        ));
        //debug($departmentsName);
        //ciudad
        $citiesName = $this->User->Person->City->find('list', array(
            "fields" => array(
                "City.nombre"
            )
        ));
        //debug($citiesName);
        ///**/
        $people = $this->User->Person->find('list');
        $typeUsers = $this->User->TypeUser->find('list');
        $authorizations = $this->User->Authorization->find('list');
        $documentTypes = $this->User->Person->DocumentType->find('list');
        $countries = $this->User->Person->City->Department->Country->find('list');
        $this->set(compact('people', 'typeUsers', 'authorizations', 'documentTypes', 'countries'));

        $departments = $this->User->Person->City->Department->find('list');
        $this->set(compact('departments'));

        $cities = $this->User->Person->City->find('list');
        $this->set(compact('cities'));
        //montar descripcion a select
        $this->set("documentTypeName", $documentTypeName);
        $this->set("typeUserName", $typeUserName);
        $this->set("countriesName", $countriesName);
        $this->set("departmentsName", $departmentsName);
        $this->set("citiesName", $citiesName);
    }

}
