<table width='100%'>
	<tr>
		<th></th>
		<th><?php echo $lang['user'] ?></th>
		<th><?php echo $lang['admin'] ?></th>
	</tr>
<?php
	$users = getUser();
	foreach($users as $user){
?>
	
	<tr>
	<form method='GET' action='index.php'>
		<td><?php echo $user['login'] ?></td>
		<td align='center'><input type='radio' name="role" value='0' <?php if($user['status']=='0'){echo 'checked';} ?>></td>
		<td align='center'><input type='radio' name="role" value='1' <?php if($user['status']=='1'){echo 'checked';} ?>></td>
		<td><input type='hidden' name='user' value="<?php echo $user['login'] ?>"><input type='submit' name='sendrole' value="<?php echo $lang['send']?>"></td>
	</form>
	</tr>
	
<?php
	}

?>
</table>