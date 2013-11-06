<?php
/**
 * This file is part of the Zaphod distribution.
 * @link https://github.com/Ibmurai/zaphod
 *
 * @copyright Copyright 2011 Jens Riisom Schultz
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */
/**
 * LolmoduleApiControllerV1Face
 *
 * @category   Lolmodule
 * @package    Module
 * @subpackage Controller
 * @author     Bo Thinggaard <akimsko@tnactas.dk>
 */
class LolmoduleApiControllerV1Face extends FroodControllerRest {

	/**
	 * GET action.
	 *
	 * @param FroodParameters   $params   Additional frood params.
	 * @param FroodHttpRequest  $request  The client request.
	 * @param mixed|null        $item     The requested item (if any).
	 *
	 * @throws FroodHttpException If something goes wrong.
	 */
	protected function _get(FroodParameters $params, FroodHttpRequest $request, $item = null) {

		// fetch list or single item if $item is set.

		$this->assign('get', 'yay!');
	}

	/**
	 * POST action.
	 *
	 * @param FroodParameters   $params   Additional frood params.
	 * @param FroodHttpRequest  $request  The client request.
	 * @param mixed|null        $item     The requested item (if any).
	 *
	 * @throws FroodHttpException If something goes wrong.
	 */
	protected function _post(FroodParameters $params, FroodHttpRequest $request, $item = null) {

		// Create new item.

		$this->assign('post', 'yay!');
	}

	/**
	 * PUT action.
	 *
	 * @param FroodParameters   $params   Additional frood params.
	 * @param FroodHttpRequest  $request  The client request.
	 * @param mixed|null        $item     The requested item (if any).
	 *
	 * @throws FroodHttpException If something goes wrong.
	 */
	protected function _put(FroodParameters $params, FroodHttpRequest $request, $item = null) {

		// Update item with id $item.

		$this->assign('put', 'yay!');
	}

	/**
	 * DELETE action.
	 *
	 * @param FroodParameters   $params   Additional frood params.
	 * @param FroodHttpRequest  $request  The client request.
	 * @param mixed|null        $item     The requested item (if any).
	 *
	 * @throws FroodHttpException If something goes wrong.
	 */
	protected function _delete(FroodParameters $params, FroodHttpRequest $request, $item = null) {

		// Delete item with id $item.

		$this->assign('delete', 'yay!');
	}


}