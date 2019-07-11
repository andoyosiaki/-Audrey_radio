<?php
session_start();
require "../dbconect.php";
require "../function/maxNum.php";

 $name= $_POST['name'];
 $url= $_POST['url'];
 $p_name = $_POST['p_name'];

echo $cut_name = mb_substr($name,0,-12);
echo $y_url = mb_substr($url,32);

$filename = $_FILES['image']['name'];
 $ent = substr($filename,-4);

if(isset($_FILES['image'])){
  if($ent ==='.jpg'||$ent ==='.png'){
    move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.($maxNum+1).$ent);
    $filepath = 'img/'.$filename;
  }else {
    echo ".jpgか.pngを選択";
  }
}


$statement = $db->prepare('INSERT INTO youtube SET id=?,name=?,url=?');
$statement->execute(array($_POST['id'],$cut_name,$y_url));

if($_SESSION['me']==="yutori4dayo"){
  echo "ログイン完了";
  session_unset();
}else {
  header('Location: ../front.php');
  exit();
}

 ?>



<a href="../front.php">一覧</a>
<?php echo $youtube['id']; ?>
<?php echo $youtube['p_name']; ?>

<form class="" action="index.php" method="post" enctype="multipart/form-data">
	<input type="text" name="url" value="" placeholder="url" size="50"><br>
	<input type="text" name="name" value="" placeholder="題名" size="50"><br>
	<input type="text" name="id" value="" placeholder="<?php echo "次は".($maxNum+1).'を指定。'; ?>"><br>
  <input type="file" name="image" value="" placeholder="写真">
	<button type="submit" name="button">送信</button>
	</div>
</form>
