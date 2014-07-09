<?php
App::uses('RegistrationType', 'Model');

/**
 * RegistrationType Test Case
 *
 */
class RegistrationTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration_type',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.activity',
		'app.shelf',
		'app.input',
		'app.input_state',
		'app.person',
		'app.document_type',
		'app.city',
		'app.department',
		'app.country',
		'app.company',
		'app.companies_event',
		'app.user',
		'app.committees_event',
		'app.committee',
		'app.committees_events_person',
		'app.events_registration_type',
		'app.activities_input',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistrationType = ClassRegistry::init('RegistrationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistrationType);

		parent::tearDown();
	}

}
