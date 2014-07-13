<?php

App::uses('AppController', 'Controller');

/**
 * PermissionsUsers Controller
 *
 * @property PermissionsUser $PermissionsUser
 * @property PaginatorComponent $Paginator
 */
class PermissionsUsersController extends AppController {

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
        $this->PermissionsUser->recursive = 0;
        $this->set('permissionsUsers', $this->Paginator->paginate());
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
        if (!$this->PermissionsUser->exists($id)) {
            throw new NotFoundException(__('Invalid permissions user'));
        }
        $options = array('conditions' => array('PermissionsUser.' . $this->PermissionsUser->primaryKey => $id));
        $this->set('permissionsUser', $this->PermissionsUser->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->PermissionsUser->create();
            if ($this->PermissionsUser->save($this->request->data)) {
                $this->Session->setFlash(__('The permissions user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The permissions user could not be saved. Please, try again.'));
            }
        }
        $users = $this->PermissionsUser->User->find('list');
        $authorizations = $this->PermissionsUser->Authorization->find('list');
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
        $this->layout = false;
        if (!$this->PermissionsUser->exists($id)) {
            throw new NotFoundException(__('Invalid permissions user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->PermissionsUser->save($this->request->data)) {
                $this->Session->setFlash(__('The permissions user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The permissions user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('PermissionsUser.' . $this->PermissionsUser->primaryKey => $id));
            $this->request->data = $this->PermissionsUser->find('first', $options);
        }
        $users = $this->PermissionsUser->User->find('list');
        $authorizations = $this->PermissionsUser->Authorization->find('list');
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
        $this->layout = false;
        $this->PermissionsUser->id = $id;
        if (!$this->PermissionsUser->exists()) {
            throw new NotFoundException(__('Invalid permissions user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->PermissionsUser->delete()) {
            $this->Session->setFlash(__('The permissions user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The permissions user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
