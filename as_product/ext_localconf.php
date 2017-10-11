<?php
defined('TYPO3_MODE') or die();

$boot = function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Schmutt.as_product',
        'Pi1',
        [
            'Product' => 'list'
        ],
        // non-cacheable actions
        [
            'Product' => ''
        ]
    );

    // Add scheduler Task
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\Schmutt\AsProduct\Task\CsvImportTask::class] = array(
        'extension' => 'as_product',
        'title' => 'CSV Import',
        'description' => 'CSV Import for products',
    );
};

$boot();
unset($boot);

