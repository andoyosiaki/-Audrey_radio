<?php
try{
  // $db = new PDO('mysql:dbname=yutori4dayo_mydb;host=mysql7074.xserver.jp;charset=utf8','yutori4dayo_mydb', 'yysa7200');
     $db = new PDO('mysql:dbname=onsens;host=localhost;charset=utf8','root', 'root');
}catch (PDOExeception $e){
  echo "DB接続エラー:". $e->getMassage();
}


 ?>
