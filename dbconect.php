<?php
try{
     $db = new PDO('mysql:dbname=youtube;host=localhost;charset=utf8','root', 'root');
}catch (PDOExeception $e){
  echo "DB接続エラー:". $e->getMassage();
}
