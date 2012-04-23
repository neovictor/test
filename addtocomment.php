<?php
if(empty($_SESSION))
	session_start();
$included_files = get_included_files();
foreach($included_files as $file){
	if(strstr($file,'functions.php')){
		$f = strstr($file,'functions.php');
	}
	if(strstr($file,'pdo.php')){
		$p = strstr($file,'pdo.php');
	}
}
if(!isset($f))
	include "functions.php";
if(!isset($p))
	include "pdo.php";
?>