<?php
require_once __DIR__ . "/ErrorSender.php";

$arJsConfig = array( 
    'custom_main' => array( 
        'js' => '/local/js/main.js', 
        'css' => '/local/js/main.css', 
        'rel' => array(), 
    ) 
); 
foreach ($arJsConfig as $ext => $arExt) { 
    \CJSCore::RegisterExt($ext, $arExt); 
}

CUtil::InitJSCore(array('custom_main'));
