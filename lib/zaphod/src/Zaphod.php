<?php
/**
 * This file is part of the Zaphod distribution.
 * @link https://github.com/Ibmurai/zaphod
 *
 * @copyright Copyright 2011 Jens Riisom Schultz
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */
/**
 * Handy static functionality to make stuff work.
 *
 * @category Zaphod
 * @author   Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 */
abstract class Zaphod {
	/** @var FroodAutoloader The autoloader for the libraries. */
	private static $_librariesAutoloader;

	/**
	 * Registers modules, sets up The Frood and dispatches.
	 *
	 * @param FroodConfiguration $configuration An optional Frood configuration.
	 */
	public static function run(FroodConfiguration $configuration = null) {
		require_once dirname(__FILE__) . '/../../frood/src/Frood.php';

		$frood = new Frood($configuration);

		self::$_librariesAutoloader = self::_registerLibraries();

		self::_setThemePathForTwigRenderer();

		$frood->dispatch();
	}

	/**
	 * Get the root path of this Zaphod installation.
	 *
	 * @return string
	 */
	public static function getRootPath() {
		return realpath(dirname(__FILE__) . '/../../..') . '/';
	}

	/**
	 * Register all Zaphod libraries including Zaphods own library, for autoloading.
	 *
	 * @return FroodAutoloader The registered Frood Autoloader to autoload libraries.
	 */
	private static function _registerLibraries() {
		$libraries = array('zaphod');
		$dirterator = new DirectoryIterator(dirname(__FILE__) . '/../../');
		foreach ($dirterator as $item) {
			if ($item->isDir() && !$item->isDot() && !(in_array($item->getFilename(), array('frood', 'zaphod')))) {
				if (($libraryIncludePath = realpath($item->getPathname() . '/src')) !== FALSE) {
					$libraries[] = $libraryIncludePath;
				}
			}
		}

		return new FroodAutoloader($libraries);
	}

	/**
	 * Set the theme path for the twig renderer, if available.
	 */
	private static function _setThemePathForTwigRenderer() {
		$themePath = realpath(self::getRootPath() . 'theme');

		if (class_exists('FroodRendererTwig') && $themePath) {
			FroodRendererTwig::setThemePath($themePath);
		}
	}
}
