<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
 *  (c) 2011 Bastian Waidelich <bastian@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * A repository for GoogleUser
 */
class Tx_MnGooglePlus_Domain_Repository_GoogleUserRepository extends Tx_Extbase_Domain_Repository_FrontendUserRepository {

    protected $defaultOrderings = array(
		'crdate' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
		'uid' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING
	);

    /**
	 * Finds all the fe_users with a Google User Id set.
	 *
	 * @return Tx_Extbase_Persistence_QueryResultInterface The users
	 */
	public function findAllGoogleUsersWithId() {
        $extbaseFrameworkConfiguration = Tx_Extbase_Dispatcher::getExtbaseFrameworkConfiguration();
		$pidList = implode(', ', t3lib_div::intExplode(',', $extbaseFrameworkConfiguration['persistence']['storagePid']));
		$query = $this->createQuery();
		$query->statement('SELECT * from fe_users where google_plus_id != "" AND pid IN ('.$pidList.')');
		return $query->execute();
	}

}
?>