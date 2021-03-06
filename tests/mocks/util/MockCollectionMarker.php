<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\util;

class MockCollectionMarker {

	public $marker = false;

	public $data = 'foo';

	public function mark() {
		$this->marker = true;
		return true;
	}

	public function mapArray() {
		return array('foo');
	}
}

?>