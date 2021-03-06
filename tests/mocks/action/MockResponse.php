<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\action;

class MockResponse extends \lithium\action\Response {

	public $testHeaders = array();

	public function render() {
		$this->testHeaders = array();
		parent::render();
		$this->headers = array();
	}

	protected function _writeHeaders($header, $code = null) {
		$this->testHeaders = array_merge($this->testHeaders, (array) $header);
	}
}

?>