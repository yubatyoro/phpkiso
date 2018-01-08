<!-- アンケートフォームの作成(DBとの連携) -->
変更したよ
<<?php 
// 接続 
$dsn = 'mysql:dbnbame=phpkiso;host=localhpst';
$user = 'root';
$password ='';
$dbn = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

$sql = '';
$stmt = $dbh->prepare($sql);
$stmt->execute();


$dbh = null;
 ?>