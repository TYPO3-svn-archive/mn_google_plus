<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Google plus frontend'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . pi1;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .pi1. '.xml');






t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Google plus');


t3lib_extMgm::addLLrefForTCAdescr('tx_mngoogleplus_domain_model_googleplus', 'EXT:mn_google_plus/Resources/Private/Language/locallang_csh_tx_mngoogleplus_domain_model_googleplus.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mngoogleplus_domain_model_googleplus');
$TCA['tx_mngoogleplus_domain_model_googleplus'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:mn_google_plus/Resources/Private/Language/locallang_db.xml:tx_mngoogleplus_domain_model_googleplus',
		'label' => 'google_plus_api_key',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/GooglePlus.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mngoogleplus_domain_model_googleplus.gif'
	),
);

$tempColumns = array (
    'google_plus_id' => Array (
        'label' => 'LLL:EXT:mn_google_plus/Resources/Private/Language/locallang_db.xml:tx_mngoogleplus_domain_model_googleplus.google_plus_id',
        'config' => Array (
            'type' => 'input',
 			'size' => '40',
 			'max' => '256'
        )
    )
);

t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','google_plus_id;;;;1-1-1');
if (is_array($TCA['fe_users']['columns']['tx_extbase_type'])) {
	$TCA['fe_users']['types']['Tx_MnGooglePlus_Domain_Model_GoogleUser'] = $TCA['fe_users']['types']['0'];
	array_push($TCA['fe_users']['columns']['tx_extbase_type']['config']['items'], array('LLL:EXT:mn_google_plus/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_MnGooglePlus_Domain_Model_GoogleUser', 'Tx_MnGooglePlus_Domain_Model_GoogleUser'));
}

if (TYPO3_MODE === 'BE')	{
	/**
	* Registers a Backend Module
	*/
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'web',					// Make module a submodule of 'web'
		'tx_mngoogleplus_m1',	// Submodule key
		'',						// Position
		array(																			// An array holding the controller-action-combinations that are accessible
			'GooglePlus' => 'indexBackend, show',	// The first controller and its first action will be the default
            'GoogleUser' => 'show'
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:mn_google_plus/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
            'navigationComponentId' => 'typo3-pagetree',
		)
	);

}

?>