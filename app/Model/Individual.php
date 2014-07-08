<?php

/*
 * Diseñado por EnovaSoft Ingenieria LTDA.
 * Prohibida  su utilización sin previo consentimiento
 * Todos los Derechos Reservados.
 */

App::uses('AppModel', 'Model');

/**
 * CakePHP Individual
 * @author EnovaSoft
 */
class Individual extends AppModel {
    public $hasOne = 'User';
}
