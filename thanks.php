<?php 
    // 扱いやすいように変数に代入
    $nickname = htmlspecialchars($_POST["nickname"]);
    $email = htmlspecialchars($_POST["email"]);
    $content = htmlspecialchars($_POST["content"]);
// ステップ１　データーベースに接続する
// データーベース接続文字列
// mysql:接続するデーターベースの種類
// dbname データーベース名
// host パソコンのアドレス　localhost このプログラムが存在している場所と同じサーバー
// 空欄を入れないように記述するルール
    require('dbconnect.php');

// ステップ２ SQL文実行
    $sql = 'INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES("'.$nickname.'","'.$email.'","'.$content.'");';

    // SQL文を実行する準備
    // -> アロー演算子
    $stmt = $dbh->prepare($sql);

    // SQL文を実行
    $stmt->execute();

// ステップ３　データーベースの切断
    $dbh = null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/check.css">
  <title>送信完了</title>
</head>
<body>
　



<!--This stylesheet should be moved to the head of the document -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class=" col-lg-offset-2 col-lg-8">
           
                                    
<h1>お問い合わせありがとうございました。</h1>
</div>
<div class="container">
    <div class="row">
        <div class=" col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
                                    <img class="img-circle img-responsive" src="http://api.adorable.io/avatars/300/abott@adorable.png">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="centered-text col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">

                                    <div itemscope="" itemtype="http://schema.org/Person">
                                        <h2> <span itemprop="name"></span>ニックネーム：<?php echo htmlspecialchars($_POST['nickname']).'<br>'; ?></h2>
                                        <p itemprop="jobTitle">メールアドレス：<?php echo htmlspecialchars($_POST['email']).'<br>'; ?></p>
                                        <p><span itemprop="affiliation">お問い合わせ内容：<?php echo htmlspecialchars($_POST['content']).'<br>'; ?></span></p>
                                    </div>
                                </div>

</div>

    <?php include('copyright.php'); ?>
</body>
</html>