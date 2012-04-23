<?php
	$list = delList();
	if($list){
		foreach($list as $item){
			if ($lang['lang']=='en'){
				echo "<div>".$item['titleen']."</div><a href=index.php?del=".$item['id'].">".$lang['delpage']."</a>";	
			}
			if ($lang['lang']=='ua'){
				echo "<div>".$item['title']."</div><a href=index.php?del=".$item['id'].">".$lang['delpage']."</a>";	
			}
		}
	}
	if(!empty($_GET['del'])){
		delMenu($_GET['del']);
		header("Location: index.php");
	}
?>