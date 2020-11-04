<?php
/**
 * Unit test class for WPThemeReview Coding Standard.
 *
 * @package WPTRT\WPThemeReview
 * @link    https://github.com/WPTRT/WPThemeReview
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WPThemeReview\Tests\PluginTerritory;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the SessionVariableUsage sniff.
 *
 * @since WPCS 0.3.0
 * @since WPCS 0.13.0 Class name changed: this class is now namespaced.
 *
 * @since TRTCS 0.1.0 As this sniff will be removed from WPCS in version 2.0, the
 *                    sniff has been cherry-picked into the WPThemeReview standard.
 */
class SessionVariableUsageUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return [
			3 => 1,
			4 => 1,
		];
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return [];
	}

}
