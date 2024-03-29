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
class Tx_MnGooglePlus_Controller_GoogleUserController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * googlePlusRepository
	 *
	 * @var Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository
	 */
	protected $googleUserRepository;

	/**
	 * injectGooglePlusRepository
	 *
	 * @param Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository $googleUserRepository
	 * @return void
	 */
	public function injectGoogleUserRepository(Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository $googleUserRepository) {
		$this->googleUserRepository = $googleUserRepository;
        
        //Add jQuery to backend module views
        $t3Jquery = t3lib_div::makeInstance("tx_t3jquery");
        $t3Jquery->addJqJS();
	}

	/**
	 * action show
	 *
	 * @param $googleUser
	 * @return void
	 */
	public function showAction(Tx_Extbase_Domain_Model_FrontendUser $googleUser) {
		$this->view->assign('googleUser', $googleUser);
        
        $googlePlusesRepository = new Tx_MnGooglePlus_Domain_Repository_GooglePlusRepository();
        $this->view->assign('googlePluses', $googlePlusesRepository->findAll());  
	}
    
}
?>