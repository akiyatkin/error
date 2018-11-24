<?php
namespace akiyatkin\error;

use infrajs\access\Access;

class Error {
	public static $conf = array( );
	public static function init(){
		$conf = Error::$conf;
		$is = ($conf['showindebug'] && Access::isDebug());

		if ($is) {
			error_reporting(E_ALL & ~E_DEPRECATED);
			ini_set('display_errors', 'On');
			ini_set('display_startup_errors', 'On');
			/*if ($conf['show']) {
				set_error_handler(function ($errno, $errmsg, $file, $line) {
				    echo "errno: $errno\ntext: $errmsg\nfile: $file\nline: $line\n <br>";
				});
			}*/
		} else {
			//error_reporting(0); //TODO вынести в опции... когда будут проверяться логи.
			ini_set('display_errors', 'Off');
			ini_set('display_startup_errors', 'Off');
			header('display_errors: Off');	
		}
	}
}
