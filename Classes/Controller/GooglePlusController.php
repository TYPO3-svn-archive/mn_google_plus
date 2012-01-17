<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Mattias Nilsson <tollepjaer@gmail.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package mn_google_plus
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_MnGooglePlus_Controller_GooglePlusController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * googlePlusRepository
	 *
	 * @var Tx_MnGooglePlus_Domain_Repository_GooglePlusRepository
	 */
	protected $googlePlusRepository;

	/**
	 * injectGooglePlusRepository
	 *
	 * @param Tx_MnGooglePlus_Domain_Repository_GooglePlusRepository $googlePlusRepository
	 * @return void
	 */
	public function injectGooglePlusRepository(Tx_MnGooglePlus_Domain_Repository_GooglePlusRepository $googlePlusRepository) {
		$this->googlePlusRepository = $googlePlusRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$googlePluses = $this->googlePlusRepository->findAll();
		$this->view->assign('googlePluses', $googlePluses);
	}

	/**
	 * action show
	 *
	 * @param $googlePlus
	 * @return void
	 */
	public function showAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $googlePlus) {
		$this->view->assign('googlePlus', $googlePlus);
	}

	/**
	 * action new
	 *
	 * @param $newGooglePlus
	 * @dontvalidate $newGooglePlus
	 * @return void
	 */
	public function newAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $newGooglePlus = NULL) {
		$this->view->assign('newGooglePlus', $newGooglePlus);
	}

	/**
	 * action create
	 *
	 * @param $newGooglePlus
	 * @return void
	 */
	public function createAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $newGooglePlus) {
		$this->googlePlusRepository->add($newGooglePlus);
		$this->flashMessageContainer->add('Your new GooglePlus was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $googlePlus
	 * @return void
	 */
	public function editAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $googlePlus) {
		$this->view->assign('googlePlus', $googlePlus);
	}

	/**
	 * action update
	 *
	 * @param $googlePlus
	 * @return void
	 */
	public function updateAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $googlePlus) {
		$this->googlePlusRepository->update($googlePlus);
		$this->flashMessageContainer->add('Your GooglePlus was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $googlePlus
	 * @return void
	 */
	public function deleteAction(Tx_MnGooglePlus_Domain_Model_GooglePlus $googlePlus) {
		$this->googlePlusRepository->remove($googlePlus);
		$this->flashMessageContainer->add('Your GooglePlus was removed.');
		$this->redirect('list');
	}

}
?>