<?php
App::uses('Hotel', 'Model');

/**
 * Hotel Test Case
 *
 */
class HotelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotel',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.activity',
		'app.shelf',
		'app.input',
		'app.activities_input',
		'app.committee',
		'app.committees_event',
		'app.company',
		'app.person',
		'app.city',
		'app.department',
		'app.country',
		'app.companies_event',
		'app.events_hotel',
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
		$this->Hotel = ClassRegistry::init('Hotel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hotel);

		parent::tearDown();
	}

}
