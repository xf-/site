<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('site', 'volatileinstaller.php');

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher')->connect(
	'TYPO3\\CMS\\Extensionmanager\\Controller\\ConfigurationController',
	'afterExtensionConfigurationWrite',
	'VolatileInstaller',
	'process'
);
