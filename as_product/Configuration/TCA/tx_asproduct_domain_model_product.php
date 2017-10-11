<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product',
        'label' => 'artikelnummer',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'artikelnummer,serie,bezeichnung,laenge,breite,hoehe',
        'iconfile' => 'EXT:as_product/ext_icon.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, artikelnummer, serie, bezeichnung, wandstaerke, produktionsnummer, artikelgruppe, einsatzbereich, laenge, breite, hoehe, formatbezeichnung, formatkurzzeichen, gefuellter_ziegel, zulassung, standardmoertel',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, artikelnummer, serie, bezeichnung, wandstaerke, produktionsnummer, artikelgruppe, einsatzbereich, laenge, breite, hoehe, formatbezeichnung, formatkurzzeichen, gefuellter_ziegel, zulassung, standardmoertel, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_asproduct_domain_model_product',
                'foreign_table_where' => 'AND tx_asproduct_domain_model_product.pid=###CURRENT_PID### AND tx_asproduct_domain_model_product.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'artikelnummer' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.artikelnummer',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'serie' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.serie',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'bezeichnung' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.bezeichnung',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'laenge' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.laenge',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'breite' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.breite',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			],
	    ],
	    'hoehe' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:as_product/Resources/Private/Language/locallang_db.xlf:tx_asproduct_domain_model_product.hoehe',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			],
	    ],
    ],
];
