<?php
	$list = delList();
	if($list){
		foreach($list as $item){
			echo "<div>".$item['title']."</div><a href=index.php?del=".$item['id'].">".$lang['delpage']."</a>";	
		}
	}
	if(!empty($_GET['del'])){
		delMenu($_GET['del']);
		header("Location: index.php");
	}
?>