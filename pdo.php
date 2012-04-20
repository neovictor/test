<?php
try {
	$dbPdo = new PDO("mysql:host=localhost;dbname=noname", 'root', '12345');  
	$dbPdo->exec('SET CHARACTER SET cp1251');
	$dbPdo->exec('SET NAMES cp1251');
}
catch(PDOException $e) {
    echo $e->getMessage();  
}
?>