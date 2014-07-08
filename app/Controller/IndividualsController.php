<?php

/*
 * Diseñado por EnovaSoft Ingenieria LTDA.
 * Prohibida  su utilización sin previo consentimiento
 * Todos los Derechos Reservados.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP IndividualsController
 * @author EnovaSoft
 */
class IndividualsController extends AppController {

    public function index() {
        
        $datos=$this->Individual->find("all", null);
        debug($datos);
    }

}
