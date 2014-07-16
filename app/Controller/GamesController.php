<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP GamesController
 * @author Developer
 */
class GamesController extends AppController {

    public function index() {
        $partidos=  $this->Game->find("all");
        $this->set("partidos",$partidos);
    }
    public function add()
    {
        if ($this->request->is('post')) 
        {
            if ($this->Game->save($this->request->data)) {
                // Set a session flash message and redirect.
                $this->Session->setFlash('Juego Creado creado!');
                //return $this->redirect('/recipes');
            }else{
                $this->Session->setFlash('Error al crear juego!');
                debug($this->Game->validationErrors);
            }
            
        }
    }
    
    public function listar() 
    {
        $fecha= date("Y-m-d H:i:s");
        debug($fecha);
        $options=array(
            "conditions"=>array(
                "Game.fechaJuego >"=>$fecha
            )
        );
        $partidos=  $this->Game->find('all',$options);
        //$partidos=  $this->Game->findAllByVisible("1");
        $this->set("partidos",$partidos);
    }
    
    public function editar($id) 
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid juego'));
        }

        $game = $this->Game->findById($id);
        if (!$game) {
            throw new NotFoundException(__('Invalid juego'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Game->id = $id;
            if ($this->Game->save($this->request->data)) {
                $this->Session->setFlash(__('Juego Actualizado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se pudo actualizar el juego'));
        }

        if (!$this->request->data) {
            $this->request->data = $game;
        }
    }


}
