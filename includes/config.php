<?php
ob_start();
session_start();

//database credentials
define('DBHOST','localhost'); // database name
define('DBUSER','demo'); // database user
define('DBPASS','demo'); // database password
define('DBNAME','writer_s_desk'); // database name

$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

