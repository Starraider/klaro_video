<?php

defined('TYPO3_MODE') || die();

call_user_func(function () {
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['klarovideo_klaro_video'] = 'tx_klarovideo_klaro_video';
    $tempColumns = [
    'tx_klarovideo_aspectratio' => [
        'config' => [
            'items' => [
                [
                    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_aspectratio.I.0',
                    '0',
                ],
                [
                    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_aspectratio.I.1',
                    '1',
                ],
                [
                    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_aspectratio.I.2',
                    '2',
                ],
                [
                    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_aspectratio.I.3',
                    '3',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_aspectratio',
    ],
    'tx_klarovideo_youtube' => [
        'config' => [
            'placeholder' => 'Last part of the URL',
            'type' => 'input',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_klarovideo_youtube',
        'description'=> 'Use the code in the Video-URL after the =',
    ],
];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._klarovideo_',
    '--div--',
];
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:klaro_video/Resources/Private/Language/locallang_db.xlf:tt_content.CType.klarovideo_klaro_video',
    'klarovideo_klaro_video',
    'tx_klarovideo_klaro_video',
];
    $tempTypes = [
    'klarovideo_klaro_video' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'richtextConfiguration' => 'default',
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_klarovideo_youtube,tx_klarovideo_aspectratio,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
    $GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'klaro_video',
        'Configuration/TypoScript/',
        'klaro_video'
    );
});
