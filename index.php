<?php
use infrajs\ans\Ans;
use infrajs\access\Access;


Access::admin(true);

$ans = array();
$src = ini_get("error_log");
if (!is_file($src)) {
	return Ans::log($ans, 'Файл с логами не найден '.$src);
}
echo $src;
echo '<pre>';
$text = file_get_contents($src);
echo $text;