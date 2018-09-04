<?php

$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = md5('joh316');

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';

// open at t3mail.test:81
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'imap:25';

// open at t3mail.test:8080
//$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'mailhog:1025';
