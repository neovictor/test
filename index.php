<?php
	header("Content-Type: text/html; Charset=cp1251");
	session_start();
	include "db.php";
	include "pdo.php";
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
		reg(clearData($_POST['login']), clearData($_POST['pass']), clearData($_POST['email']));
	}
?>
<title>PHP+MYSQL+JAVASCRIPT+CSS
</title>
</head>
<body background='bg.jpg'>
<table align='center' width='760' border='10' bordercolor='lightblue' background='bgtable.jpg' cellpadding='10' cellspacing='0'>
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
			include 'lang.php';
			if(!isset($_SESSION['name'])){
				include 'aunt.php';
				include 'menu.php';
			}else{
				echo $lang['user']." <a href='index.php?profile=".$_SESSION['name']."'>".$_SESSION['name']."</a>";
				include 'menu.php';
			}
			include 'countuser.php';
		?>
		</div>
		</td>	
		<!--вміст-->
		<td width='640' valign='top'>
		<?php
			if (isset($_GET['lang'])){
				$lang = selLang($_GET['lang']);
				if(!strstr($_SERVER['HTTP_REFERER'],'lang'))
					header("Location: $_SERVER[HTTP_REFERER]");
			}
			//del all rating
			if(!empty($_GET['delrating']) and $_SESSION['status'] == '3'){
				delAllRating($_GET['delrating']);
			}
			//role edit
			if(isset($_GET['sendrole']) and isset($_SESSION['status'])  and $_SESSION['status']=='3' and $_GET['user'] != 'root')
				role($_GET['user'],$_GET['role']);
			//exit and ref-profile
			if(isset($_SESSION['name'])){
				include "exit.php";
			}
			if(isset($_SESSION['error']))
			echo $_SESSION['error'];
			//content title and text
			if(empty($_GET) and empty($_FILES)){
				$indextitle = delList();
				foreach($indextitle as $title){
					if ($lang['lang']=='en'){
						echo "<h4><a href='index.php?id=".$title['id']."'>".$title['titleen']."</a></h4>";
						$indextext = getTexten($title['id']);
						echo "<div>".substr($indextext,0,150)."...</div>";
						echo "<a href='index.php?id=".$title['id']."'>".$lang['read more']."</a><br>";
					}else if ($lang['lang']=='ua'){
						echo "<h4><a href='index.php?id=".$title['id']."'>".$title['title']."</a></h4>";
						$indextext = getText($title['id']);
						echo "<div>".substr($indextext,0,150)."...</div>";
						echo "<a href='index.php?id=".$title['id']."'>".$lang['read more']."</a><br>";
					}
				}
				
			}
			if(isset($_GET['reg'])){
				$_SESSION['error'] = "";
				include "reg.php";
			}

			//viev content
			if(isset($_GET['id'])){
				if ($lang['lang']=='ua'){
					$title_t = vievList($_GET['id']);
					echo "<h3>".$title_t."</h3>";
					//reting ua
					if(getAllRating($_GET['id']))
						echo "<div align='right'><b>".$lang['rating:']." ".substr(getAllRating($_GET['id']),0,4)." / ".getCountRating($_GET['id'])."</b></div>";
					else
						echo "<div align='right'><b>".$lang['rating is empty']."</b></div>";
					echo "<div>".getText($_GET['id'])."</div>";
				}
				if ($lang['lang']=='en'){
					$title_t = vievListen($_GET['id']);
					//reting en
					echo "<h4>".$title_t."</h4>";
					if(getAllRating($_GET['id']))
						echo "<div align='right'><b>".$lang['rating:']." ".substr(getAllRating($_GET['id']),0,4)." / ".getCountRating($_GET['id'])."</b></div>";
					else
						echo "<div align='right'><b>".$lang['rating is empty']."</b></div>";
					echo "<div>".getTexten($_GET['id'])."</div>";
				}
				
				if (isset($_SESSION['status']) and $_SESSION['status']>='2'){
					echo "<a href='index.php?edit=".$_GET['id']."'>".$lang['edit page']."</a><br>";
					echo "<a href='index.php?del=".$_GET['id']."'>".$lang['delpage']."</a>";
					
					//comment
					
					
				}
				include "comment.php";
			}
			
			//edit page
			if(isset($_GET['edit']) and isset($_SESSION['status']) and $_SESSION['status']>='2'){
				include "add.php";
			}
			//update profile
			if(!empty($_POST['profile'])){
				profile($_GET['profile'], clearData($_POST['fname']),clearData($_POST['lname']), clearData($_POST['email']));
			}
			//profile
			if(!empty($_SESSION['name']) and isset($_GET['profile'])){
					include 'profile.php';
			}else if(!isset($_SESSION['name']) and !empty($_GET['profile']))
				echo "<div><a href='index.php?reg'>".$lang['please regisration']."</a></div>";
			//deleted profile
			if (isset($_GET['profile']) and $_GET['profile'] == 'del' and isset($_SESSION['name'])){
				delProfile($_GET['user']);
				if ($_SESSION['status'] != '3')
					session_destroy();
				echo $lang['profile deleted'];
			}
			//////
			if(isset($_GET['add']) and isset($_SESSION['status']) and $_SESSION['status']>='2')
				include "add.php";
				
			if(isset($_POST['add']) and isset($_SESSION['status']) and $_SESSION['status']>='2')
				add(clearData($_POST['title']),clearData($_POST['textarea']),clearData($_POST['titleen']),clearData($_POST['textareaen']));
				
			if(isset($_POST['update']) and isset($_SESSION['status']) and $_SESSION['status']>='2'){
				update($_POST['id'],clearData($_POST['title']),clearData($_POST['textarea']),clearData($_POST['titleen']),clearData($_POST['textareaen']));
			}
				
			if(isset($_GET['del']) and isset($_SESSION['status'])  and $_SESSION['status']>='2')
				include "del.php";
				
			if(isset($_GET['role']) and isset($_SESSION['status'])  and $_SESSION['status']=='3')
				include "role.php";
				
			
			if(isset($_GET['translation'])){
				echo "<h3>".$lang['translation']."</h3>";
				echo "<a href='langedit.php?translation=ua'>Ukranian</a><br>";
				echo "<a href='langedit.php?translation=en'>English</a>";
			}
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