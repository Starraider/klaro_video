<?php

defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx_klarovideo_klaro_video',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        [
        'name' => 'youtube-play',
    ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:klaro_video/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:klaro_video/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
    );
    // Add backend preview hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['klaro_video'] =
    SKom\KlaroVideo\Hooks\PageLayoutViewDrawItem::class;
});
