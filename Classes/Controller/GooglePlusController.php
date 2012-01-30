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
        if($GLOBALS["TSFE"]->fe_user->user) {
            $userRepository = new Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository();
            $loggedInUser = $userRepository->findByUid($GLOBALS["TSFE"]->fe_user->user["uid"]);
            $this->view->assign("loggedInUser", $loggedInUser);
            
            $googlePluses = $this->googlePlusRepository->findAll();
            $this->view->assign('googlePluses', $googlePluses);    
        }
        else {
            $this->flashMessages->add(Tx_Extbase_Utility_Localization::translate('error.MustBeLoggedIn', 'MnGooglePlus'));    
        }
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
	 * action indexBackend
	 *
	 * @return void
	 */
	public function indexBackendAction() {
        $userRepository = new Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository();
        $this->view->assign("googleUsers", $userRepository->findAllGoogleUsersWithId());
	}

}
?>