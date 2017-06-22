<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

/**
 * Unit test class for the WP_DeprecatedFunctions sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   0.11.0
 */
class WordPress_Tests_WP_DeprecatedFunctionsUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {

		$errors = array_fill( 8, 303, 1 );

		// Unset the lines related to version comments.
		unset(
			$errors[10],  $errors[12],  $errors[14],  $errors[16],  $errors[29],
			$errors[55],  $errors[57],  $errors[59],  $errors[73],  $errors[76],
			$errors[80],  $errors[118], $errors[125], $errors[161], $errors[175],
			$errors[179], $errors[211], $errors[234], $errors[252], $errors[256],
			$errors[263], $errors[275], $errors[282], $errors[286], $errors[291],
			$errors[296], $errors[304]
		);

		return $errors;
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {

		$warnings = array_fill( 316, 20, 1 );

		// Unset the lines related to version comments.
		unset(
			$warnings[323], $warnings[327], $warnings[334]
		);

		return $warnings;
	}

} // End class.
