<?php
if ($_GET['profile']){
	
}
$profile = getProfile($_SESSION['name']);
$str = "<form enctype='multipart/form-data' name='profile' method='post' action='index.php'>
<div>Avatar:</div><input type='file' name='img' value='".$profile[0]['img']."' accept='image/png,image/gif,image/jpeg' id='chooseFile' />
<img src='".$profile[0]['img']."' height='150' width='150'>
<div>First name:</div><input type='text' name='fname' value='".$profile[0]['fname']."' size='17'>
<div>Last name:</div><input type='text' name='lname' value='".$profile[0]['lname']."' size='17'>
<div>Email:</div><input type='text' name='email' value='".$profile[0]['email']."' size='17'>
<br><input type='submit' name='profile'>
</form>";
echo $str;
$log = getlogined();
echo "<div>Latest activity: ".date("m.d.y H:i:s",$log)."</div>";
$reg = getregistered();
echo "<div>date of registration: ".date("m.d.y H:i:s",$reg)."</div>";
ECHO "<a href='index.php?profile=".$_SESSION['name']."'>DELETE PROFILE</a>";
?>