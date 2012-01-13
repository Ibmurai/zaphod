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
 * @package    Public
 * @subpackage Controller
 * @author     Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 * @author     Bo Thinggaard <akimsko@tnactas.dk>
 */
class LolmodulePublicControllerIndex extends LolmodulePublicController {
	/**
	 * Hello world public action
	 */
	public function indexAction() {
		$this->doOutputPhp();

		$this->assign('target', 'world');
	}
}
