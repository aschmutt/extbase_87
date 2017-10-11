
<?php
if (!defined('TYPO3_MODE')) {die('Access denied.');}

/***************
 * Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'as_product',
    'Pi1',
    'AS Product'
);

/************** Flexform Setup **********************/
$pluginSignature = 'asproduct_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:as_product/Configuration/FlexForms/flexform.xml');

