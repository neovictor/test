<?php
/*"<form name='form1' method='get' action='index.php'> 
<input type='radio' name='lang' value='ua' <?php if(isset($lang) and $lang['lang']=='ua') echo 'checked';?> onClick="javascript:location.href='http://localhost/my/index.php?lang=ua';"> 
<?php echo $lang['ua']; ?>
<input type='radio' name='lang' value='ru' <?php if(isset($lang) and $lang['lang']=='ru') echo 'checked';?> onClick="javascript:location.href='http://localhost/my/index.php?lang=ru';"> 
<?php echo $lang['ru']; ?>
<input type='radio' name='lang' value='en' <?php if(isset($lang) and $lang['lang']=='en') echo 'checked';?> onClick="javascript:location.href='http://localhost/my/index.php?lang=en';"> 
<?php echo $lang['en']; ?>
</form>";
*/
?>
<div>
<a href='index.php?lang=ua'><?php echo $lang['ua']; ?></a>
<a href='index.php?lang=ru'><?php echo $lang['ru']; ?></a>
<a href='index.php?lang=en'><?php echo $lang['en']; ?></a>
</div>