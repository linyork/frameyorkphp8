<?php
/**
 *---------------------------------------------------------------
 * 基本設定及常數設定
 *---------------------------------------------------------------
 * 無特殊需求切勿更動
 */

// 時區設定
date_default_timezone_set('UTC');

// CONST::Fully Qualified Domain Name
define('MAIN_DOMAIN', basename(__DIR__));

// CONST::HTTP Protocol
define('HTTP', 'http');
define('HTTPS', 'https');

// CONST::Environment Name
define('LOCAL', 'local');
define('DEV', 'dev');
define('PRE', 'pre');
define('PROD', 'prod');

phpinfo();