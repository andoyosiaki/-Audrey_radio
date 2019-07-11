<?php
require "dbconect.php";
require "function/entity.php";


$onsens = $db->prepare('SELECT * FROM youtube WHERE id=?');
$onsens->execute(array($_REQUEST['id']));
$youtube= $onsens->fetch();


require "function/maxNum.php";
require "function/random.php";
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

 <body>
   <div class="container detail_container">
     <div class="detail_text">
       <h2><?php echo h($youtube['name']); ?></h2>
       <?php  $id = $youtube['id']; ?>
     </div>
     <div class="article_iframe">
       <iframe width="240" height="315" src="https://www.youtube.com/embed/<?php echo h($youtube['url']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
    </div>
    <div class="return">
      <?php if($id >= 2): ?>
        <a href="detail.php?id=<?php echo h($id - 1); ?>"><i class="fas fa-arrow-circle-left fa-lg"></i></a>
      <?php endif; ?>
      <a href="front.php"><i class="fas fa-home fa-lg"></i></a>
      <?php if($id != $maxNum): ?>
        <a href="detail.php?id=<?php echo h($id + 1); ?>"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
      <?php endif; ?>
    </div>
    <div class="recommend">
      <div class="recommend_title-box">
        <h3 class="recommend_title">おすすめ動画</h3>
      </div>
      <div class="recommend_box1 recommend_sp">
        <a href="detail.php?id=<?php echo h($rand_a); ?>"><img src="img/<?php echo h($rand_a); ?>.jpg" alt=""></a>
      </div>
      <div class="recommend_box1 recommend_sp">
        <a href="detail.php?id=<?php echo h($rand_b); ?>"><img src="img/<?php echo h($rand_b); ?>.jpg" alt=""></a>
      </div>
      <div class="recommend_box1 recommend_sp">
        <a href="detail.php?id=<?php echo h($rand_c); ?>"><img src="img/<?php echo h($rand_c); ?>.jpg" alt=""></a>
      </div>
      <div class="recommend_box3">
        <a href="detail.php?id=<?php echo h($rand_d); ?>"><img src="img/<?php echo h($rand_d); ?>.jpg" alt=""></a>
      </div>
      <div class="recommend_box2">
        <a href="detail.php?id=<?php echo h($rand_e); ?>"><img src="img/<?php echo h($rand_e); ?>.jpg" alt=""></a>
      </div>
    </div>
 </body>
 </html>
