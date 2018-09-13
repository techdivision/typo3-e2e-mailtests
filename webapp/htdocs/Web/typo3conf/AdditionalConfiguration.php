<?php

$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = md5('joh316');

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';

// open at t3mail.test:81
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'imap:25';

// open at t3mail.test:8080
//$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'mailhog:1025';


// if the request is done to the second configured domain, the mails will be sent out through gmail
if ($_SERVER['HTTP_HOST'] === 'external.t3mail.test') {
//    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'smtp.gmail.com:587';
//    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_encrypt'] = 'tls';
//    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_username'] = '';
//    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_password'] = '';
//    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress'] = '';
    @require_once __DIR__ . '/../../gmail.php';
}
