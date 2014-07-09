<?php
App::uses('CompaniesEventsController', 'Controller');

/**
 * CompaniesEventsController Test Case
 *
 */
class CompaniesEventsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_event',
		'app.company',
		'app.person',
		'app.city',
		'app.department',
		'app.stage',
		'app.event',
		'app.event_type',
		'app.function',
		'app.committee',
		'app.committees_event',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.registration_type',
		'app.events_registration_type',
		'app.role_company'
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
