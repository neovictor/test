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
	if(!isset($_SESSION['lang'])){
		$lang = selLang();
	}else{
		$lang = selLang($_SESSION['lang']);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title><?php echo $lang['translation'] ?></title>
</head>
<body background='bg.jpg'>
<form action="" method="post">
<table align='center' width='760' border='10' bordercolor='lightblue' background='bgtable.jpg' cellpadding='10' cellspacing='0'>
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
<div align='right'><a href='index.php'><?php echo $lang['back'] ?></a></duv>
<table align='' border='0'>
<tr>
	<th align='left'>¹</th>
	<th align='left'><?php echo $lang['static'] ?></th>
	<th align='left'><?php echo $_GET['translation'] ?></th>
</tr>
<?php
	$l = $_GET['translation'];
	$langPdo = $dbPdo->query("SELECT * FROM lang WHERE lang='$l'");
	$n = 0;
	while ($lang = $langPdo->fetch(PDO::FETCH_ASSOC)){
		foreach ($lang as $title => $value){
			$n++;
			if ($title == 'id')
				continue;
			echo "<tr>";
			echo "<td width='100'>".$n."</td><td width='200'>".$title."</td><td><input type='text' size='40' name='".$title."' value='".$value."'></td>";
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