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


t3lib_extMgm::addLLrefForTCAdescr('tx_mngoogleplus_domain_model_googleuser', 'EXT:mn_google_plus/Resources/Private/Language/locallang_csh_tx_mngoogleplus_domain_model_googleuser.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mngoogleplus_domain_model_googleuser');
$TCA['tx_mngoogleplus_domain_model_googleuser'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:mn_google_plus/Resources/Private/Language/locallang_db.xml:tx_mngoogleplus_domain_model_googleuser',
		'label' => 'google_plus_id',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/GoogleUser.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mngoogleplus_domain_model_googleuser.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_mngoogleplus_domain_model_googleplus', 'EXT:mn_google_plus/Resources/Private/Language/locallang_csh_tx_mngoogleplus_domain_model_googleplus.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_mngoogleplus_domain_model_googleplus');
$TCA['tx_mngoogleplus_domain_model_googleplus'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:mn_google_plus/Resources/Private/Language/locallang_db.xml:tx_mngoogleplus_domain_model_googleplus',
		'label' => 'google_user',
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

?>