<?php
App::uses('EventsHotel', 'Model');

/**
 * EventsHotel Test Case
 *
 */
class EventsHotelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.events_hotel',
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
		'app.payment',
		'app.events_payment',
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
		$this->EventsHotel = ClassRegistry::init('EventsHotel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventsHotel);

		parent::tearDown();
	}

}
