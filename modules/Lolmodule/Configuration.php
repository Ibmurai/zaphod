<?php
/**
 * This file is part of the Zaphod distribution.
 * @link https://github.com/Ibmurai/zaphod
 *
 * @copyright Copyright 2011 Jens Riisom Schultz
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */
/**
 * LolmodulePublicControllerIndex
 *
 * @category   Lolmodule
 * @package    Module
 * @subpackage Configuration
 * @author     Bo Thinggaard <akimsko@tnactas.dk>
 */
class LolmoduleConfiguration extends FroodModuleConfiguration {

	/**
	 * Does this module use namespaces?
	 *
	 * @return boolean
	 */
	public function useNamespaces() {
		return false;
	}

	/**
	 * Get the module router for the configured module.
	 *
	 * @return FroodModuleRouterApi
	 */
	public function getRouter() {
		static $router;
		return $router ? $router : ($router = new FroodModuleRouterApi($this->getModule()));
	}
}
