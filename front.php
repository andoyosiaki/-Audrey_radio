<?php
require "dbconect.php";
require "function/entity.php";

//降順昇順切り替え
$asc= 'DESC'; //デフォルトはdescに指定しておく。
if(isset($_GET['sort'])){
  if($_GET['sort']==='asc'){
    $asc = 'ASC';
  }
  if($_GET['sort']==='desc'){
    $asc='DESC';
  }
}
$onsens= $db->query("SELECT * FROM youtube ORDER BY id " . $asc . "");

?>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" itemprop="description" content="オードリーのラジオ『オードリーのオールナイトニッポン』のyoutube文字起こし動画をまとめています。" />
 <title><?php echo h($youtube['name']); ?>　オードリー文字起こしまとめ </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <link href="css/style.css" rel="stylesheet">
 <script src="js/main.js"></script>
</head>
<body>
<header>
 <nav class="navigation">
   <div class="brand">
     <h1><a href="front.php">オードリー文字起こし<br class="brbr">まとめ</a></h1>
   </div>
   <div class="menu">
     <ul>
       <li><a href="https://twitter.com/radio_moziokosi">文字起こし製作者</a></li>
       <li><a href="https://twitter.com/float_top">サイト運営者</a></li>
       <li><a href="login/login.php">管理画面</a></li>
     </ul>
   </div>
 </nav>
 </header>

 <div class="menu_box">
   <form action="" method="get">
     <select name="sort">
       <option value="desc">新しい順</option>
       <option value="asc">古い順</option>
     </select>
     <input type="submit" value="送信">
   </form>
 </div>
  <article class="article_box">
    <?php while($youtube = $onsens->fetch()): ?>
      <div class="article_inner-box">
        <span>No<?php echo h($youtube['id']); ?>.</span>
        <div class="article-title_box">
          <h2><a href="detail.php?id=<?php echo h($youtube['id']); ?>"><?php echo h($youtube['name']); ?></a></h2>
        </div>
        <div class="article_inner-picture">
        <a href="detail.php?id=<?php echo h($youtube['id']); ?>"><img src="img/<?php echo h($youtube['id']); ?>.jpg" alt=""></a>
        </div>
      </div>
    <?php endwhile; ?>
  </article>
  </div>
</div>
</body>
</html>
