<?php

/*
 * This file is part of the grind project.
 */

/**
 * ZaphodConfiguration
 *
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
