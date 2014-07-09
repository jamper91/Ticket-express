<?php
App::uses('PaymentsController', 'Controller');

/**
 * PaymentsController Test Case
 *
 */
class PaymentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payment',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.activity',
		'app.shelf',
		'app.input',
		'app.input_state',
		'app.person',
		'app.events_registration_type',
		'app.registration_type',
		'app.activities_input',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.committee',
		'app.committees_event',
		'app.company',
		'app.city',
		'app.department',
		'app.country',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.events_payment'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
