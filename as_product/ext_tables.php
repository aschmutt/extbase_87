<?php
defined('TYPO3_MODE') or die();

$boot = function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_asproduct_domain_model_product', 'EXT:as_product/Resources/Private/Language/locallang_csh_tx_asproduct_domain_model_product.xlf');

};

$boot();
unset($boot);
