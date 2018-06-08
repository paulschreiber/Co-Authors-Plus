<?php
/**
 * Base unit test class.
 *
 * @package Co-Authors Plus
 */

/**
 * Base unit test class.
 */
class CoAuthorsPlus_TestCase extends WP_UnitTestCase {
	/**
	 * Set up for tests. Set _cap instance variable to $coauthors_plus global.
	 */
	public function setUp() {
		parent::setUp();

		global $coauthors_plus;
		$this->_cap = $coauthors_plus;
	}
}
