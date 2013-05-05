<?php
//
// PHASE: BOOTSTRAP
//
define('Hakv_INSTALL_PATH', dirname(__FILE__));
define('Hakv_SITE_PATH', Hakv_INSTALL_PATH . '/site');

require(Hakv_INSTALL_PATH.'/src/bootstrap.php');

$ha = CHakv::Instance();


//
// PHASE: FRONTCONTROLLER ROUTE
//
$ha->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$ha->ThemeEngineRender();

