<?php

########################################################################
# Extension Manager/Repository config file for ext "mn_google_plus".
#
# Auto generated 30-01-2012 14:14
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Google plus',
	'description' => 'Get your recent activities and updates from Google Plus when logged in as a fe_user.',
	'category' => 'plugin',
	'author' => 'Mattias Nilsson',
	'author_email' => 'tollepjaer@gmail.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.2.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
			't3jquery' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:41:{s:21:"ExtensionBuilder.json";s:4:"7af5";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"f9b0";s:14:"ext_tables.php";s:4:"1370";s:14:"ext_tables.sql";s:4:"9cf5";s:43:"Classes/Controller/GooglePlusController.php";s:4:"1905";s:43:"Classes/Controller/GoogleUserController.php";s:4:"7b81";s:35:"Classes/Domain/Model/GooglePlus.php";s:4:"3367";s:35:"Classes/Domain/Model/GoogleUser.php";s:4:"55f4";s:50:"Classes/Domain/Repository/GooglePlusRepository.php";s:4:"ef31";s:50:"Classes/Domain/Repository/GoogleUserRepository.php";s:4:"66c6";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"68e3";s:32:"Configuration/TCA/GooglePlus.php";s:4:"5eba";s:38:"Configuration/TypoScript/constants.txt";s:4:"4342";s:34:"Configuration/TypoScript/setup.txt";s:4:"e1b4";s:53:"Resources/Private/Backend/Layouts/DefaultBackend.html";s:4:"aca4";s:64:"Resources/Private/Backend/Templates/GooglePlus/IndexBackend.html";s:4:"c3b7";s:56:"Resources/Private/Backend/Templates/GooglePlus/Show.html";s:4:"8a41";s:56:"Resources/Private/Backend/Templates/GoogleUser/Show.html";s:4:"840a";s:40:"Resources/Private/Language/locallang.xml";s:4:"faad";s:84:"Resources/Private/Language/locallang_csh_tx_mngoogleplus_domain_model_googleplus.xml";s:4:"7c7a";s:84:"Resources/Private/Language/locallang_csh_tx_mngoogleplus_domain_model_googleuser.xml";s:4:"2683";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"1b97";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"ecca";s:38:"Resources/Private/Layouts/Default.html";s:4:"4938";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:53:"Resources/Private/Partials/GooglePlus/FormFields.html";s:4:"d41d";s:53:"Resources/Private/Partials/GooglePlus/Properties.html";s:4:"74a2";s:48:"Resources/Private/Templates/GooglePlus/List.html";s:4:"45a8";s:41:"Resources/Public/Css/jquery.jOrgChart.css";s:4:"c24a";s:48:"Resources/Public/Css/jquery.jOrgChart.custom.css";s:4:"8a46";s:38:"Resources/Public/Css/mn_googleplus.css";s:4:"b719";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:66:"Resources/Public/Icons/tx_mngoogleplus_domain_model_googleplus.gif";s:4:"905a";s:66:"Resources/Public/Icons/tx_mngoogleplus_domain_model_googleuser.gif";s:4:"1103";s:48:"Resources/Public/JavaScripts/jquery.jOrgChart.js";s:4:"2df9";s:50:"Tests/Unit/Controller/GooglePlusControllerTest.php";s:4:"077c";s:42:"Tests/Unit/Domain/Model/GooglePlusTest.php";s:4:"c9f6";s:42:"Tests/Unit/Domain/Model/GoogleUserTest.php";s:4:"985b";s:14:"doc/manual.pdf";s:4:"446b";s:14:"doc/manual.sxw";s:4:"7bc9";}',
);

?>