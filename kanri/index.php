<?php
// 管理画面のアクセスと表示
require '../model/funcs.php';
loginCheck();
$pdo = connect_db();
$st = $pdo->query("SELECT * FROM items");
$goods = $st->fetchAll();
require 't_index.php';
// var_dump($goods);
// exit();
