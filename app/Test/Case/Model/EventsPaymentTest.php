<?php
App::uses('EventsPayment', 'Model');

/**
 * EventsPayment Test Case
 *
 */
class EventsPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_payment',
		'app.payment',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.function',
		'app.committee',
		'app.committees_event',
		'app.company',
		'app.person',
		'app.city',
		'app.department',
		'app.country',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.registration_type',
		'app.events_registration_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsPayment = ClassRegistry::init('EventsPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsPayment);

		parent::tearDown();
	}

}
