<?php
/**
 * This file is part of the Zaphod distribution.
 * @link https://github.com/Ibmurai/zaphod
 *
 * @copyright Copyright 2011 Jens Riisom Schultz
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

/**
 * This is the routing script used when hosting from the PHP built in web server.
 */
$requestFile = 'web' . $_SERVER['REQUEST_URI'];
if (file_exists($requestFile) && is_file($requestFile)) {
	return false;
} else {
	require 'web/run.php';
	return true;
}
