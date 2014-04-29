<?php
//
// PHASE: BOOTSTRAP
//
define('STILUN_INSTALL_PATH', dirname(__FILE__));
define('STILUN_SITE_PATH', STILUN_INSTALL_PATH . '/site');

require(STILUN_INSTALL_PATH.'/src/bootstrap.php');

$ly = CStilun::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();