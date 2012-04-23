<form name='regi' method='post' action='index.php'>
<div align='justify'><?php echo $lang['login']; ?><br><input type='text' name='login' size='17'></div>
<div align='justify'><?php echo $lang['pass']; ?><br><input type='password' name='pass' size='17'></div>
<div align='justify'><?php echo $lang['confirm the password:']; ?><br><input type='password' name='passconf' size='17' onBlur="if(pass.value != passconf.value){alert('Correctly confirm Password');pass.focus()}"></div>
<div align='justify'><?php echo $lang['email:']; ?><br><input type='text' name='email' size='17' onBlur="reg.disabled = true; var a = email.value; if(a.indexOf('@')+1){reg.disabled = false;}"></div>
<div align='justify'><input type='submit' name='reg' value="<?php echo $lang['reg'];?>"></div>
</form>