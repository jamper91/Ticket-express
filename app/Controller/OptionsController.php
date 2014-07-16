<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP Options
 * @author Jorge Moreno
 */
class OptionsController extends AppController {
    public $components = array('RequestHandler');
    public function index($id) {
        
    }
    public function getsocialnetworks()
    {
        $this->layout="webservice";
        $datos=  $this->Option->findAllByGrupo("social");
        $this->set(array(
            'datos' => $datos,
            '_serialize' => array('datos')
        ));
    }

}
