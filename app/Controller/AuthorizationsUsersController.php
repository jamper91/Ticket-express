<?php

App::uses('AppController', 'Controller');

/**
 * AuthorizationsUsers Controller
 *
 * @property AuthorizationsUser $AuthorizationsUser
 * @property PaginatorComponent $Paginator
 */
class AuthorizationsUsersController extends AppController {

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
        $this->AuthorizationsUser->recursive = 0;
        $this->set('authorizationsUsers', $this->Paginator->paginate());
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
        if (!$this->AuthorizationsUser->exists($id)) {
            throw new NotFoundException(__('Invalid authorizations user'));
        }
        $options = array('conditions' => array('AuthorizationsUser.' . $this->AuthorizationsUser->primaryKey => $id));
        $this->set('authorizationsUser', $this->AuthorizationsUser->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->AuthorizationsUser->create();
            if ($this->AuthorizationsUser->save($this->request->data)) {
                $this->Session->setFlash(__('The authorizations user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The authorizations user could not be saved. Please, try again.'));
            }
        }
        $users = $this->AuthorizationsUser->User->find('list');
        $authorizations = $this->AuthorizationsUser->Authorization->find('list');
        $this->set(compact('users', 'authorizations'));
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
        if (!$this->AuthorizationsUser->exists($id)) {
            throw new NotFoundException(__('Invalid authorizations user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->AuthorizationsUser->save($this->request->data)) {
                $this->Session->setFlash(__('The authorizations user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The authorizations user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('AuthorizationsUser.' . $this->AuthorizationsUser->primaryKey => $id));
            $this->request->data = $this->AuthorizationsUser->find('first', $options);
        }
        $users = $this->AuthorizationsUser->User->find('list');
        $authorizations = $this->AuthorizationsUser->Authorization->find('list');
        $this->set(compact('users', 'authorizations'));
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
        $this->AuthorizationsUser->id = $id;
        if (!$this->AuthorizationsUser->exists()) {
            throw new NotFoundException(__('Invalid authorizations user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->AuthorizationsUser->delete()) {
            $this->Session->setFlash(__('The authorizations user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The authorizations user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
