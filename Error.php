<?php
namespace akiyatkin\error;

use infrajs\access\Access;

class Error {
	public static $conf = array(
		'test' => false,
		'debug' => true,
		'admin' => false
	);
	public static function init(){
		$conf = Error::$conf;
		$is = 	($conf['test'] && Access::isTest())||
				($conf['debug'] && Access::isDebug())||
				($conf['admin'] && Access::isAdmin());
		if ($is) {
			ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			header('display_errors: true');
		} else {
			ini_set('display_errors', -1);
			ini_set('display_startup_errors', -1);
			header('display_errors: false');
		}
	}
}