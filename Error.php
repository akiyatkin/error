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
			error_reporting(E_ALL & ~E_DEPRECATED);
			ini_set('display_errors', 'On');
			ini_set('display_startup_errors', 'On');
			header('display_errors: true');
		} else {
			error_reporting(0); //TODO вынести в опции... когда будут проверяться логи.
			ini_set('display_errors', 'Off');
			ini_set('display_startup_errors', 'Off');
			header('display_errors: Off');	
		}
	}
}