<?php
	header("Content-Type: text/html; Charset=cp1251");
	session_start();
	include "pdo.php";
	include "functions.php";
	if (!empty($_POST['trans'])){
		$curlang = $_POST['lang'];
		foreach($_POST as $item => $values){
			if ($item == 'trans')
				continue;
			$sql = "UPDATE lang SET $item='$values' WHERE lang='$curlang'";
			$update = $dbPdo->exec($sql);
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Translation of languages</title>
</head>
<body>
<form action="" method="post">
<table align='center' width='760' border='0'>
<tr width='100%'>
<td colspan='2'>
	<?php
		include 'buttom.php';
	?>
</td>
</tr>
<tr>
<td width='160' valign='top'>
</div>
</td>
<td width='640' valign='top'>
<div align='right'><a href='index.php'>Back</a></duv>
<table align='' border='0'>
<tr>
	<th align='left'>STATIC</th>
	<th align='left'><?php echo $_GET['translation'] ?></th>
</tr>
<?php
	$l = $_GET['translation'];
	$langPdo = $dbPdo->query("SELECT * FROM lang WHERE lang='$l'");
	while ($lang = $langPdo->fetch(PDO::FETCH_ASSOC)){
		foreach ($lang as $title => $value){
			if ($title == 'id')
				continue;
			echo "<tr>";
			echo "<td width='200'>".$title."</td><td><input type='text' size='40' name='".$title."' value='".$value."'></td>";
			echo "</tr>";
		}
	}
?>
</table>
<input type='submit' name='trans'>
</form>
</td>
</tr>
<tr>
<td colspan='2'>
	<?php
		include 'buttom.php';
	?>
</td>
</tr>
</table>
</body>
</html>