<?php
// どのデータを消すのか指定してる情報をGET送信で取得
// var_dump($_GET['code']);

// echo 'delete.phpに移動してるよ';

if (isset($_GET['code'])){
  // step1
// データベースに接続
require('dbconnect.php');

// step2
// SQL実行

    // ステップ２ SQL文実行
    $sql = 'DELETE FROM `survey` WHERE `code`='.$_GET['code'];

    // SQL文を実行する準備
    // -> アロー演算子
    $stmt = $dbh->prepare($sql);

    // SQL文を実行
    $stmt->execute();

// step3
// データベースの破棄
    $dbh = null;

// search.phpに戻る
    header('Location: veiw.php');

}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
不正なアクセス禁止
</body>
</html>