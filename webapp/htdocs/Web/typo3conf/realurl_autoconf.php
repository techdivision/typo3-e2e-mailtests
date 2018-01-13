<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']=array (
  '_DEFAULT' =>
  array (
    'init' =>
    array (
      'appendMissingSlash' => 'ifNotFile,redirect',
      'emptyUrlReturnValue' => '/',
    ),
    'pagePath' =>
    array (
      'rootpage_id' => '1',
    ),
    'fileName' =>
    array (
      'defaultToHTMLsuffixOnPrev' => 0,
      'acceptHTMLsuffix' => 0,
      'index' =>
      array (
        'print' =>
        array (
          'keyValues' =>
          array (
            'type' => 98,
          ),
        ),
      ),
    ),
  ),
);
