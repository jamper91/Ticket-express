<?php
App::uses('ActivitiesInput', 'Model');

/**
 * ActivitiesInput Test Case
 *
 */
class ActivitiesInputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activities_input',
		'app.activity',
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
		'app.registration_type',
		'app.events_registration_type',
		'app.shelf',
		'app.input'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActivitiesInput = ClassRegistry::init('ActivitiesInput');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivitiesInput);

		parent::tearDown();
	}

}
