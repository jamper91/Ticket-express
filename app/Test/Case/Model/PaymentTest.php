<?php
App::uses('Payment', 'Model');

/**
 * Payment Test Case
 *
 */
class PaymentTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payment = ClassRegistry::init('Payment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payment);

		parent::tearDown();
	}

}
