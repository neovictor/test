<?php
	$db = mysql_connect('localhost','root','12345');
	mysql_select_db("noname", $db);
	mysql_query("SET NAMES 'cp1251'") or die(mysql_error());
	mysql_query("SET CHARACTER SET 'cp1251'") or die(mysql_error());
	mysql_query("SET character_set_client='cp1251'") or die(mysql_error());
	mysql_query("SET character_set_connection='cp1251'") or die(mysql_error());
	mysql_query("SET character_set_results='cp1251'") or die(mysql_error());
?>