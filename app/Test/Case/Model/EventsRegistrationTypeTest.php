<?php
App::uses('EventsRegistrationType', 'Model');

/**
 * EventsRegistrationType Test Case
 *
 */
class EventsRegistrationTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_registration_type',
		'app.registration_type',
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
		'app.payment',
		'app.events_payment',
		'app.input'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventsRegistrationType = ClassRegistry::init('EventsRegistrationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsRegistrationType);

		parent::tearDown();
	}

}
