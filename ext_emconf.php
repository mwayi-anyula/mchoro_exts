<?php

/**
 * Extension Manager/Repository config file for ext "mchoro_exts".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mchoro Exts',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MwayiAnyula\\MchoroExts\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mwayi Anyula',
    'author_email' => 'mwai3d@gmail.com',
    'author_company' => 'Mwayi Anyula',
    'version' => '1.0.0',
];
