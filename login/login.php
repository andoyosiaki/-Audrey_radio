<?php
require "../dbconect.php";
session_start();

if(!empty($_POST)){
	if($_POST['name'] !='' && $_POST['password'] !=""){
		$login = $db->prepare('SELECT * FROM users WHERE name=? AND password=?');
		$login->execute(array(
			$_POST['name'],
			sha1($_POST['password'])
		));
		$me = $login->fetch();

		if($me){
			$_SESSION['name']=$me['name'];
			header('Location: 	index.php');exit();
		}else {
			header('Location: ../front.php');exit();
		}
	}else {
		 header('Location: ../front.php');exit();
	}
}
  ?>
	<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ログイン</title>
		<link href="../css/style.css" rel="stylesheet">
		<script src="js/main.js"></script>
	</head>
	<body>
	<div class="form_section">
		<form class="" action="" method="post">
			<p>管理人専用</p>
			<p>ID:test <br>PASS:test</p>
			<input type="text" name="name" value="" placeholder="ID"><br>
			<input type="password" name="password" value="" placeholder="PASS"><br>
			<input type="submit" value="送信">
		</form>
	</div>
	</body>
	</html>
