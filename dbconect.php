<?php
try{
     $db = new PDO('mysql:dbname=test;host=localhost;charset=utf8','root', 'root');
}catch (PDOExeception $e){
  echo "DB接続エラー:". $e->getMassage();
}
