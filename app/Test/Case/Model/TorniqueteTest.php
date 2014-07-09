<?php
App::uses('Torniquete', 'Model');

/**
 * Torniquete Test Case
 *
 */
class TorniqueteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.torniquete'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Torniquete = ClassRegistry::init('Torniquete');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Torniquete);

		parent::tearDown();
	}

}
