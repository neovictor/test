<?php
	header("Content-Type: text/html; Charset=cp1251");
	session_start();
	include "db.php";
	include "functions.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<!--add-->
<?php	
	if(!isset($_SESSION['lang'])){
		$lang = selLang();
	}else{
		$lang = selLang($_SESSION['lang']);
	}
	if(isset($_POST['aunt']) and !empty($_POST['aunt'])){
		aunt(clearData($_POST['login']), clearData($_POST['pass']));
	}
	
	if (isset($_POST['exit'])){
		session_destroy();
		header("Location: index.php");
	}
	
	if(isset($_POST['reg'])){
		reg(clearData($_POST['login']), clearData($_POST['pass']));
	}
?>
<title>PHP+MYSQL+JAVASCRIPT+CSS
</title>
</head>
<body>

<table align='center' width='760' border='0'>
	<!--шапка-->
	<tr width='100%'>
		<td colspan='2'>
		<div>
		<?php 
			include 'top.php';
		?>
		</div>
		</td>
	</tr>
	<!--основа-->
	<tr>
		<!--left-->
		<td width='160' valign='top'>
		<div>
		<?php
			if(!isset($_SESSION['name'])){
				include 'aunt.php';
			}else{
				echo $lang['user']." ".$_SESSION['name']."\n\r";
				include 'menu.php';
			}
			include 'countuser.php';
			include 'lang.php';
		?>
		</div>
		</td>	
		<!--вміст-->
		<td width='640' valign='top'>
		<?php
			if (isset($_GET['lang'])){
				$lang = selLang($_GET['lang']);
				if(!strstr($_SERVER['HTTP_REFERER'],'lang'))
					header("Refresh: 1; url=$_SERVER[HTTP_REFERER]");
			}
			//exit
			if(isset($_SESSION['name']))
				echo "<div align='right'><form method='post' 
					action='index.php'><input type='submit' 
					name='exit' value='$lang[exit]'></div>";
			if(isset($_SESSION['name']) and empty($_GET)){
			//title and text
				$indextitle = delList();
				foreach($indextitle as $title){
					echo "<h4><a href='index.php?id=".$title['id']."'>".$title['title']."</a></h4>";
					$indextext = getText($title['id']);
					echo "<div>".substr($indextext,0,150)."...</div>";
					echo "<a href='index.php?id=".$title['id']."'>Read More</a><br>";
				}
				
			}
			if(isset($_GET['reg'])){
				$_SESSION['error'] = "";
				include "reg.php";
			}
			if(isset($_SESSION['error']))
				echo $_SESSION['error'];
			//viev content
			if(isset($_GET['id'])){
				$title_t = vievList($_GET['id']);
				echo "<h4>".$title_t."</h4>";
				echo "<div>".getText($_GET['id'])."</div>";
				if (isset($_SESSION['status']) and $_SESSION['status']=='1'){
					echo "<a href='index.php?edit=".$_GET['id']."'>Edit page</a><br>";
					echo "<a href='index.php?del=".$_GET['id']."'>".$lang['delpage']."</a>";
				}
			}
			
			//edit page
			if(isset($_GET['edit']) and isset($_SESSION['status']) and $_SESSION['status']=='1'){
				include "add.php";
			}
			
			//////
			if(isset($_GET['add']) and isset($_SESSION['status']) and $_SESSION['status']=='1')
				include "add.php";
				
			if(isset($_POST['add']) and isset($_SESSION['status']) and $_SESSION['status']=='1')
				add(clearData($_POST['title']),clearData($_POST['textarea']));
				
			if(isset($_POST['update']) and isset($_SESSION['status']) and $_SESSION['status']=='1')
				update($_POST['id'],clearData($_POST['title']),clearData($_POST['textarea']));
				
			if(isset($_GET['del']) and isset($_SESSION['status'])  and $_SESSION['status']=='1')
				include "del.php";
				
			if(isset($_GET['role']) and isset($_SESSION['status'])  and $_SESSION['status']=='1')
				include "role.php";
				
			if(isset($_GET['sendrole']) and isset($_SESSION['status'])  and $_SESSION['status']=='1' and $_GET['user'] != 'root')
				role($_GET['user'],$_GET['role']);
		?>
		</td>
	</tr>
	<!--низ-->
	<tr>
		<td colspan='2'>
		<?php
			include 'buttom.php';
		?>
		</td>
	</tr>
</table>

</body>