<?php

    require('dbconnect.php');
// POSTでデータが送信された時のみSQLを実行する
  if (isset($_POST['code'])) {
    // ２．SQL文を実行する
    $sql = 'UPDATE `survey` SET `nickname`="'.$_POST["nickname"].'",`email`="'.$_POST["email"].'",`content`="'.$_POST["content"].'" WHERE `code`='.$_POST['code'];
    
    // SQLを実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
  
    $dbh = null;
  // 一覧に戻る
    header('Location: veiw.php');
  // ３．データベースを切断する

  }

// ステップ１
// DBの接続

// ステップ２
// SQL文実行

    $sql = 'SELECT * FROM `survey` WHERE `code`='.$_GET['code'];




    // SQL文を実行する準備
    // -> アロー演算子
    $stmt = $dbh->prepare($sql);

    // SQL文を実行
    $stmt->execute();
// ヒント：ここにフェッチしたデータを保存しておく代入文を記述

    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($record['nickname']);
    // var_dump($record['email']);
    // var_dump($record['content']);
    // echo '</pre>';

// ステップ３
// 接続の解除
  $dbh = null;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <title>お問い合わせ</title>
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
      <div class="search-box">
        <div class="caption">
  <h1>お問い合わせ情報編集</h1>
  <!-- 次のページへの繋がり　この場合check.php -->
  <form method="POST" action="">


    <div>
        コード<br>
        <?php echo $_GET['code']?>
        <input type="hidden" name="code" value="<?php echo $_GET['code']; ?>">
    </div>    
    <div>
        ニックネーム<br>
        <input type="text" name="nickname" class="form-control" placeholder="ニックネーム" value="<?php echo $record['nickname'];?>">
    </div>
    <div>
        メールアドレス<br>
        <input type="text" name="email" class="form-control" placeholder="メールアドレス" value="<?php echo $record['email'];?>">
    </div>
    <div>
        お問い合わせ内容<br>
        <textarea  class="form-control" name="content" placeholder="お問い合わせ"><?php echo $record['content'];?></textarea>
    </div>
    <input type="submit" id="submit" class="form-control" value="送信">


        



  </form>
    <?php include('copyright.php'); ?>

</div>
</body>
</html>