<?php
session_start();
require "../dbconect.php";


//次に登録するべきid番号を表示
$pages = $db->query('SELECT COUNT(*) as cnt FROM youtube');
$page = $pages->fetch();
$maxNum = $page['cnt'];


//dbへの登録処理
if(isset($_POST) && is_numeric($_POST['id'])){
  $id = $_POST['id'];
  $cut_name = mb_substr($_POST['name'],0,-12);
  $y_url = mb_substr($_POST['url'],32);

   $statement = $db->prepare('INSERT INTO youtube SET id=?,name=?,url=?');
   $statement->execute(array($id,$cut_name,$y_url));
   header('Location: ../front.php');
}



//画像のフォルダへの保存処理
if(isset($_FILES['image'])){

  $filename = $_FILES['image']['name'];
  $ext = substr($filename,-4);

  if($ent ==='.jpg'||$ent ==='.png'){
    move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.($maxNum+1).$ext);
    $filepath = 'img/'.$filename;
  }else {
    echo ".jpgか.pngを選択";
  }
}

//ログイン処理
if($_SESSION){
  $statement = $db->prepare('SELECT name FROM users WHERE name=?');
  $statement->execute(array($_SESSION['name']));
  $user = $statement->fetch();

  if($_SESSION['name'] === $user['name']){
    echo "ログイン完了";
  }else {
    header('Location: ../front.php');exit();
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>投稿画面</title>
   <link href="../css/style.css" rel="stylesheet">
   <script src="js/main.js"></script>
 </head>



<body>
  <div class="form_section">
    <a href="../front.php">一覧に戻る</a>
    <form class= action="index.php" method="post" enctype="multipart/form-data">
    	<input type="text" name="url" value="" placeholder="url" size="50"><br>
    	<input type="text" name="name" value="" placeholder="題名" size="50"><br>
    	<input type="text" name="id" value="" placeholder="<?php echo "次は".($maxNum+1).'を指定。'; ?>"><br>
      <input type="file" name="image" value="" placeholder="写真">
    	<button type="submit" name="button">送信</button>
    	</div>
    </form>
  </div>
</body>
