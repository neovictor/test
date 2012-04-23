<?php
$title = '';
$text = '';
$titleen = '';
$texten = '';
if(isset($_GET['edit']) and isset($_SESSION['status']) and $_SESSION['status']>='2'){
	$id = $_GET['edit'];
	$title = vievList($id);
	$titleen = vievListen($id);
	$text = getText($id);
	$texten = getTexten($id);
	$form = 
	"<form name='' method='POST' action='index.php'>".
	$lang['entertitle']
	."<div><input type='text' name='title' value='$title'></div>".
	$lang['entertext']
	."<input type='hidden' name='language'  value='en'>
	<textarea cols=60 rows=8 name='textarea'>$text</textarea>
	<div><input type='hidden' name='id' value='$id'></div>
	<div><div align='right'>".$lang['en']."</div>"
	.$lang['entertitle'].
	"<div><input type='text' name='titleen' value='$titleen'></div>"
	.$lang['entertext'].
	"<input type='hidden' name='language'  value='en'>
	<textarea cols=60 rows=8 name='textareaen'>$texten</textarea>
	<div><input type='submit' name='update' value='".$lang['send']."'></div>
	</form>";
}else{

$form = 
"<form name='' method='post' action=''>"
.$lang['entertitle'].
"<div><input type='text' name='title' value='$title'></div>"
.$lang['entertext'].
"<input type='hidden' name='language'  value='ua'>
<textarea cols=60 rows=8 name='textarea'>$text</textarea><div><div align='right'>".$lang['en']."</div>"
.$lang['entertitle'].
"</div><div><input type='text' name='titleen' value=''></div>"
.$lang['entertext'].
"<input type='hidden' name='language'  value='en'>
<textarea cols=60 rows=8 name='textareaen'></textarea>
<div><input type='submit' name='add' value='".$lang['send']."'></div>
</form>";
}
if(isset($_GET['edit']) and getAllRating($_GET['edit'])){
	echo "<div align='right'><b>".$lang['rating:']." ".substr(getAllRating($_GET['edit']),0,4)." / ".getCountRating($_GET['edit'])."</b></div>";
	if($_SESSION['status'] == 3 and !isset($_GET['add']))
	echo "<div align='right'><a href=index.php?delrating=".$_GET['edit'].">".$lang['delete']."</a></div>";
}
else
	echo "<div align='right'><b>".$lang['rating is empty']."</b></div>";

echo "<div align='right'>".$lang['ua']."</div>";
echo $form;
?>