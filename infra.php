<?php

$conf = Config::get('error');

$is = 	($conf['test'] && Access::isTest())||
		($conf['debug'] && Access::isDebug())||
		($conf['admin'] && Access::isAdmin());

if ($is) {
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
} else {
	ini_set('display_errors', -1);
	ini_set('display_startup_errors', -1);
}