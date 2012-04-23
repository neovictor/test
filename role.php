<table width='100%'>
	<tr>
		<th></th>
		<th><?php echo $lang['blocked'] ?>:</th>
		<th><?php echo $lang['user'] ?></th>
		<th><?php echo $lang['editor'] ?>:</th>
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
		<td align='center'><input type='radio' name="role" value='2' <?php if($user['status']=='2'){echo 'checked';} ?>></td>
		<td align='center'><input type='radio' name="role" value='3' <?php if($user['status']=='3'){echo 'checked';} ?>></td>		
		<td align='center'><a href="<?php echo "index.php?profile=".$user['login']?>"><?php echo $lang['edit'] ?></a></td>
		<td align='center'><a href="index.php?profile=del&user=<?php echo $user['login'] ?>"><?php echo $lang['delete'] ?></a></td>	
		<td><input type='hidden' name='user' value="<?php echo $user['login'] ?>">
		<input type='submit' name='sendrole' value="<?php echo $lang['send']?>"></td>
	</form>
	</tr>
	
<?php
	}

?>
</table>