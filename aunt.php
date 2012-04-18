<?php echo $lang['user']."  ".$lang['guest']; ?>
<form name='aunt' method='post' action='index.php'>
<?php echo $lang['login']; ?> <div><input type='text' name='login' size='17'></div>
<?php echo $lang['pass']; ?> <div><input type='password' name='pass' size='17'></div>
<div align='center'><input type='submit' name='aunt' value='<?php echo $lang['enter']; ?>'></div>
</form>
<a href='index.php?reg'><?php echo $lang['reg']; ?></a>