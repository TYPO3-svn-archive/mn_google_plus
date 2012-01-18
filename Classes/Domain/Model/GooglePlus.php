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
class Tx_MnGooglePlus_Domain_Model_GooglePlus extends Tx_Extbase_DomainObject_AbstractEntity {

    /**
	 * googlePlusApiKey
     * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $googlePlusApiKey;

	/**
	 * googleUser
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_MnGooglePlus_Domain_Model_GoogleUser>
     * @lazy
	 */
	protected $googleUser;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
        $this->googleUser = new Tx_Extbase_Persistence_ObjectStorage();
	}

    /**
	 * Returns the googlePlusApiKey
	 *
	 * @return string $googlePlusApiKey
	 */
	public function getGooglePlusApiKey() {
		return $this->googlePlusApiKey;
	}

	/**
	 * Sets the googlePlusApiKey
	 *
	 * @param string $googlePlusApiKey
	 * @return void
	 */
	public function setGooglePlusApiKey($googlePlusApiKey) {
		$this->googlePlusApiKey = $googlePlusApiKey;
	}

	/**
	 * Returns the googleUser
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_MnGooglePlus_Domain_Model_GoogleUser> An Tx_Extbase_Persistence_ObjectStorage holding instances of Tx_MnGooglePlus_Domain_Model_GoogleUser
	 */
	public function getGoogleUser() {
		return $this->googleUser;
	}

	/**
	 * Sets the googleUser
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_MnGooglePlus_Domain_Model_GoogleUser> $googleUser A user to add to the repository
	 * @return void
	 */
	public function setGoogleUser(Tx_Extbase_Persistence_ObjectStorage $googleUser) {
		$this->googleUser = $googleUser;
	}
    
    /**
	 * Adds a user to the repository
	 *
	 * @param Tx_MnGooglePlus_Domain_Model_GoogleUser $googleUser
	 * @return void
	 */
	public function addGoogleUser(Tx_MnGooglePlus_Domain_Model_GoogleUser $googleUser) {
		$this->googleUser->attach($googleUser);
	}
    
	/**
	 * Removes a user from repository
	 *
	 * @param Tx_MnGooglePlus_Domain_Model_GoogleUser $googleUser
	 * @return void
	 */
	public function removeGoogleUser(Tx_MnGooglePlus_Domain_Model_GoogleUser $googleUser) {
		$this->googleUser->detach($googleUser);
	}

}
?>