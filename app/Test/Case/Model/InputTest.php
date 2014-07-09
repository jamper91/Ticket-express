<?php
App::uses('Input', 'Model');

/**
 * Input Test Case
 *
 */
class InputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.input',
		'app.input_state',
		'app.person',
		'app.events_registration_type',
		'app.registration_type',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.activity',
		'app.shelf',
		'app.activities_input',
		'app.committee',
		'app.committees_event',
		'app.company',
		'app.city',
		'app.department',
		'app.country',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.delivery_method',
		'app.delivery_methods_input'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Input = ClassRegistry::init('Input');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Input);

		parent::tearDown();
	}

}
