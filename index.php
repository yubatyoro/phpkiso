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
  <h1>お問い合わせ情報入力</h1>
  <!-- 次のページへの繋がり　この場合check.php -->
  <form method="POST" action="check.php">
    <div>

        ニックネーム<br>
        <input type="text" name="nickname" class="form-control" placeholder="ニックネーム">
    </div>
    <div>
        メールアドレス<br>
        <input type="text" name="email" class="form-control" placeholder="メールアドレス">
    </div>
    <div>
        お問い合わせ内容<br>
        <textarea  class="form-control" name="content" placeholder="お問い合わせ"></textarea>
    </div>
        <input type="submit" id="submit" class="form-control" value="送信">
  </form>
    <?php include('copyright.php'); ?>


       <!--    <h3>Advance Password Validation</h3>
          <p>Find to All</p>
        </div>
        <form action="" class="loginForm">
          <div class="input-group">
            
            
            <label for ="description"> お問い合わせ内容</label>
               
            
          </div>
        </form>
      </div>
    </div> -->
    <!-- <div class="col-md-4">
      <div class="aro-pswd_info">
        <div id="pswd_info">
          <h4>Password must be requirements</h4>
          <ul>
            <li id="letter" class="invalid">At least <strong>one letter</strong></li>
            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
            <li id="number" class="invalid">At least <strong>one number</strong></li>
            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
            <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
</div>
</body>
</html>