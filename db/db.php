<?php
/*
Bu projede PDO+Mysql kullanılmıştır.
-ZEZE
*/
@session_start();
@ob_start();

$dbinfo = array(
 'server' =>    'localhost',			// Your Database Server (Default: localhost)
 'user' =>      'root',					// Your Database UserName
 'pass' =>      '',						// Your Database Password
 'dbName' =>    'ajaxKayit'				// Your Database Name
);
try{
 $db = new PDO('mysql:host='.$dbinfo['server'].';dbname='.$dbinfo['dbName'].';charset=utf8mb4', $dbinfo['user'], $dbinfo['pass']);
}catch(PDOException $erorCode){
 die('Database Error==>>: ' . $erorCode);
}
?>