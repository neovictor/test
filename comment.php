<?php
if (isset($_POST['delrating'])){
	include "addtocomment.php";
	$id_user = $_POST['id_user'];
	$id_articles = $_POST['id_articles'];
	delUserRating($id_user,$id_articles);
	exit;
}
if(isset($_GET['comment']) and !empty($_GET['del'])){
	include "addtocomment.php";
	delComment($_GET['del']);
}
if(!empty($_POST['rating1'])){
	include "addtocomment.php";
	$id_articles = $_POST['id_articles'];
	$profile = getProfile($_SESSION['name']);
		$id_user = $profile[0]['id'];
	$user_rating = $_POST['user_rating'];
	setRating($id_articles,$id_user,$user_rating);
}
?>
<?php
//rating
include "addtocomment.php";
if(isset($_GET['id']) and isset($_SESSION['name'])){
	$profile = getProfile($_SESSION['name']);
			$id_user = $profile[0]['id'];
	$id_articles = $_GET['id'];
	$torating = getUserRating($id_user,$id_articles);
	if($torating){
		echo "<div align='right'><b>You rating: ".$torating['user_rating']."</b></div>";
		echo 
"<div align='right'><form action='comment.php' method='post'>
<input type='hidden' name='id_user' value='".$id_user."'>
<input type='hidden' name='id_articles' value='".$id_articles."'>
<input type='submit' name='delrating' value='Delete rating'>
</form></div>";
	}else{
		$formrating = "
<form action='comment.php' method='post'>
<input type='hidden' name='id_articles' value='".$_GET['id']."'>
<div align='right'>
<select name='user_rating'>
<option>case rating</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
</div>
<div align='right'><input type='submit' name='rating1'></div>
</form>";
		echo $formrating;
}
}
?>
<?php
//form of comment
if(!empty($_POST['rating'])){
	if(!empty($_POST['commenttext'])){
		include "addtocomment.php";
		$id_articles = $_POST['id_articles'];
		$text_comment = clearData($_POST['commenttext']);
		if(empty($_POST['commenttitle']))
			$title_comment = substr($text_comment,0,15);
		else
			$title_comment = clearData($_POST['commenttitle']);
			$profile = getProfile($_SESSION['name']);
		$id_user_of_comment = $profile[0]['id'];
		$date_of_public = time();
		$user_rating = $_POST['case'];
		
		setComment($id_articles,$title_comment,$text_comment,$id_user_of_comment,$date_of_public);
	}else
		echo "<div>".$lang['comment field is not filled']."</div>";
}
//comment
if(isset($_GET['id'])){
$articles = getComment($_GET['id']);
	if(!empty($articles)){
		foreach($articles as $article){
			echo "<hr><div><a href='index.php?profile=".getName($article['id_user_of_comment'])."'>".getName($article['id_user_of_comment'])."</a></div>";
			if(!empty($_SESSION['status']) and $_SESSION['status'] == '3')
				echo "<div align='right'><a href='comment.php?comment&del=".$article['id']."'>".$lang['delete']."</a></div>";
			echo "<div><b>".$article['title_comment']."</b></div>";
			echo "<div>".$article['text_comment']."</div>";
			echo "<div align='right'>".date("m.d.y H:i:s",$article['date_of_public'])."</div>";
		}
	}
}

if(isset($_SESSION['status']) and $_SESSION['status'] >= 1){
$formcomment = "
<hr>
<form action='comment.php' method='POST'>
<div>".$lang['enter title']."</div>
<input type='text' name='commenttitle'>
<div>".$lang['enter comment']."</div>
<textarea cols='60' rows='8' name='commenttext'></textarea>
<input type='hidden' name='id_articles' value=".$_GET['id'].">
<div><input type='submit' name='rating'></div>
</form>";
echo $formcomment;
}
?>