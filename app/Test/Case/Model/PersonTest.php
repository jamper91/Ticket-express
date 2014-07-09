<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.document_type',
		'app.city',
		'app.department',
		'app.country',
		'app.company',
		'app.event',
		'app.stage',
		'app.event_type',
		'app.activity',
		'app.shelf',
		'app.input',
		'app.input_state',
		'app.events_registration_type',
		'app.registration_type',
		'app.activities_input',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.committee',
		'app.committees_event',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.user',
		'app.committees_events_person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
