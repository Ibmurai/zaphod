<?php
/**
 * This file is part of the Zaphod distribution.
 * @link https://github.com/Ibmurai/zaphod
 *
 * @copyright Copyright 2011 Jens Riisom Schultz
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

/**
 * Zaphod frood configuration.
 *
 * @category Zaphod
 * @author Bo Thinggaard <bo@unpossiblesystemes.dk>
 */
class ZaphodConfiguration extends FroodConfiguration {
	/**
	 * Get the path to froods cache dir.
	 *
	 * @return string
	 */
	public function getCacheDir() {
		return Frood::getFroodPath() . '../../autoloader_cache/';
	}
}
