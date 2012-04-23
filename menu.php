<?php
	$menu = getMenu();
	if($menu){
		echo "<div><a href='index.php'>".$lang['home']."</a></div>";
		foreach($menu as $item){
			if ($lang['lang']=='en')
				$title = $item['titleen'];
			else
				$title = $item['title'];
			echo "
				<div>
					<a href=index.php?id=".$item['id'].">".$title."</a>
				</div>";
		}
	}
	if (isset($_SESSION['status']) and $_SESSION['status'] >= '2'){
		echo "<div><b>".$lang['adminmenu']."</b></div>";
		echo "<div><a href=index.php?add>".$lang['addpage']."</a></div>";
		echo "<div><a href=index.php?del>".$lang['delpage']."</a></div>";
	}
	if (isset($_SESSION['status']) and $_SESSION['status'] == '3'){
		echo "<div><a href=index.php?role>".$lang['role']."</a></div>";
		echo "<a href='index.php?translation'>".$lang['translation']."</a>";
	}
?>