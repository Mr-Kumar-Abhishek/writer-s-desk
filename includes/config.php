<?php
ob_start();
session_start();
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'writer');
$db=new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//setting time zone 
date_default_timezone_set('Asia/Calcutta');
function __autoload($class) {
	$class = strtolower($class);
	$classpath = 'classes/class.'.$class.'.php';
	if(file_exists($classpath)) require_once($classpath);
	$classpath="../classes/class.".$class.'.php';
	// there should be better method for all levels
	if(file_exists($classpath)) require_once($classpath);
}
$user-new User($db);