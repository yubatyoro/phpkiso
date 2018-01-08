<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/check.css">
  <title>入力内容確認</title>
</head>
<body>




<!-- 次のページへの繋がり -->

 
 



<div class="container">
            <div class="col-sm-12">
<h1>入力内容確認</h1>
                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">
                        <div class="col-md-12 cta-contents">
                          
                            <h1 class="cta-title">・お名前</h1>
                            <div class="cta-desc">

                              <?php if ($_POST["nickname"] == ""){
                                echo 'ニックネームを表示してください';
                              }else{ ?>
                                <p><?php echo htmlspecialchars($_POST["nickname"]).'様'; ?></p>
                              <?php } ?>
                              
                            </div>
                        </div>
                        
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-12 cta-contents">
                            <h1 class="cta-title">・メールアドレス</h1>
                            <div class="cta-desc">

                              <?php if ($_POST["email"] == ""){
                                echo 'メールアドレスを入力してください';
                              }else{ ?>
                                <p><?php echo htmlspecialchars($_POST['email']); ?></p>
                              <?php } ?>
                              
                            </div>
                        </div>

                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-info">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">・お問い合わせ内容</h1>
                            <div class="cta-desc">
                              <?php if ($_POST["content"] == ""){
                                echo 'お問い合わせ内容を入力してください';
                              }else{ ?>
                                <p>お問い合わせ内容：<?php echo htmlspecialchars($_POST['content']); ?></p><br>
                                <?php } ?>
                               
                                
                            </div>
                        </div>
                        <?php if (($_POST['nickname'] != "") && ($_POST['email'] != "") && ($_POST['content'] != "")){ ?>
                        <div class="col-md-5 cta-button">
                            <form method="POST" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"]; ?>">
  <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>"> 
   <input type="hidden" name="content" value="<?php echo $_POST["content"]; ?>">


                              <input type="submit" value="OK" a href="#" class="btn btn-lg btn-block btn-info">
                              <?php } ?>
                            <value = "戻る" onclick="history.back();"a href="#" class="btn btn-lg btn-block btn-info"  >戻る</a>
                            </form>
                            
                        </div>
                     </div>
                </div>

                
                     </div>
                </div>

                     </div>
                </div>

                     </div>
                </div>

            </div>
        </div>

    <?php include('copyright.php'); ?>





</body>
</html>