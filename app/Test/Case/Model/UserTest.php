<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.person',
		'app.document_type',
		'app.city',
		'app.department',
		'app.country',
		'app.company',
		'app.event',
		'app.stage',
		'app.location',
		'app.shelf',
		'app.activity',
		'app.input',
		'app.input_state',
		'app.events_registration_type',
		'app.registration_type',
		'app.activities_input',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.event_type',
		'app.committee',
		'app.committees_event',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.committees_events_person',
		'app.type_user',
		'app.authorization',
		'app.permissions_user',
		'app.authorizations_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
