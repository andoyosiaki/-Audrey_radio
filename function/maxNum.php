<?php
$pages = $db->query('SELECT COUNT(*) as cnt FROM youtube');
$page = $pages->fetch();
$maxNum = $page['cnt'];
 ?>
