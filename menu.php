<?php
	$menu = getMenu();
	if($menu){
		foreach($menu as $item){
			echo "
				<div>
					<a href=index.php?id=".$item['id'].">".$item['title']."</a>
				</div>";
		}
	}
	if (isset($_SESSION['status']) and $_SESSION['status'] == 1){
		echo "<div>".$lang['adminmenu']."</div>";
		echo "<div><a href=index.php?add>".$lang['addpage']."</a></div>";
		echo "<div><a href=index.php?del>".$lang['delpage']."</a></div>";
		echo "<div><a href=index.php?role>".$lang['role']."</a></div>";
		
	}
?>