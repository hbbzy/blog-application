<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('APP_DEBUG',True);

define('ROOT_PATH',getcwd());
define('WEB_PATH','http://tblog.haifeng.com/');
define('APP_PATH',ROOT_PATH.'./app/');
define('TP_PATH',ROOT_PATH.'/core/');

define('BIND_MODULE','manage');
require TP_PATH.'/ThinkPHP.php';