<?php
App::uses('PermissionsUser', 'Model');

/**
 * PermissionsUser Test Case
 *
 */
class PermissionsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permissions_user',
		'app.user',
		'app.authorization',
		'app.authorizations_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PermissionsUser = ClassRegistry::init('PermissionsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PermissionsUser);

		parent::tearDown();
	}

}
