<?php
$title = '';
$text = '';
if(isset($_GET['edit']) and isset($_SESSION['status']) and $_SESSION['status']=='1'){
	$title = vievList($_GET['edit']);
	$text = getText($_GET['edit']);
	$id = $_GET['edit'];
	$form = 
	"<form name='update' method='POST' action='index.php'>".
	$lang['entertitle']
	."<div><input type='text' name='title' value='$title'></div>".
	$lang['entertext']
	."<textarea cols=60 rows=8 name='textarea'>$text
	</textarea>
	<div><input type='hidden' name='id' value='$id'></div>
	<div><input type='submit' name='update' value='".$lang['send']."'></div>
	</form>";
}else{
$form = 
"<form name='add' method='post' action='index.php'>".
$lang['entertitle']
."<div><input type='text' name='title' value='$title'></div>".
$lang['entertext']
."<textarea cols=60 rows=8 name='textarea'>$text
</textarea>
<div><input type='submit' name='add' value='".$lang['send']."'></div>
</form>";
}
echo $form;
?>