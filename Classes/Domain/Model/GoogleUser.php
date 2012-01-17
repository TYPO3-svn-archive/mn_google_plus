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
class Tx_MnGooglePlus_Domain_Model_GoogleUser extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * googlePlusId
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $googlePlusId;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the googlePlusId
	 *
	 * @return string $googlePlusId
	 */
	public function getGooglePlusId() {
		return $this->googlePlusId;
	}

	/**
	 * Sets the googlePlusId
	 *
	 * @param string $googlePlusId
	 * @return void
	 */
	public function setGooglePlusId($googlePlusId) {
		$this->googlePlusId = $googlePlusId;
	}

}
?>