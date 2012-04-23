<?php
if (isset($_SESSION['status']) and $_SESSION['status'] == '0'){
	$_SESSION['error'] = $lang['you profile is blocked']."!!!";
	exit;
}

$profile = getProfile($_GET['profile']);

if (!empty($profile[0]['img']))
	$saved = "files/".$_GET['profile'];
else 
	$saved = '';
?>
<form name='profile' method='post' action='' enctype="multipart/form-data">
<?php echo $lang['avatar:'] ?><br><input type='file' name='img' accept='image/png,image/gif,image/jpeg'>
<img src='<?php echo $saved ?>' height='150' width='150'><br>
<?php echo $lang['first name:'] ?><br><input type='text' name='fname' value="<?php echo $profile[0]['fname']?>" size='17'><br>
<?php echo $lang['last name:'] ?><br><input type='text' name='lname' value="<?php echo $profile[0]['lname']?>" size='17'><br>
<?php echo $lang['email:'] ?><br><input type='text' name='email' value="<?php echo $profile[0]['email']?>" size='17'>
<?php
//echo $_SESSION['name'] ."==". $_GET['profile']."==".$_SESSION['status'];
if(isset($_SESSION['status'])){
	if($_SESSION['name'] == $_GET['profile'] or $_SESSION['status'] == 3)
		echo "<br><input type='submit' name='profile'>";
}
?>
</form>
<?php
$log = getlogined();
echo "<div>".$lang['latest activity:']." ".date("m.d.y H:i:s",$log)."</div>";
$reg = getregistered();
echo "<div>".$lang['date of registration:']." ".date("m.d.y H:i:s",$reg)."</div>";
if(isset($_SESSION['status']) and $_SESSION['status'] < 3 or $_SESSION['name'] == $_GET['profile'])
	ECHO "<a href='index.php?profile=del&user=".$_SESSION['name']."'>".$lang['delete profile']."</a>";

?>