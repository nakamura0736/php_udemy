<?php

//DB接続用のパラメータを定数に格納
// const DB_HOST = 'mysql:dbname=udemy_php:host=127.0.0.1;charset=utf8';
const DB_HOST = 'mysql:dbname=udemy_php:host=localhost;charset=utf8';
// const DB_HOST = 'mysql:dbname=udemy_php:host=%';
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';

// const DB_USER = 'root';
// const DB_PASSWORD = 'root';


//例外 exception
try{
  //DB接続用クラスのインスタンス化
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);

} catch(PDOException $e){
  echo '接続失敗' . $e->getMessage( ) . "\n";
  exit();
}

?>