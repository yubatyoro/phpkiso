<?php 
    // var_dump 変数の中身を表示する
    // Undefined index: code が表示されている場合
    // POST送信がされていない

    // エラーが表示されていないときはPOST送信されている
    // var_dump($_POST["code"]);
    // 扱いやすいように変数に代入

// ステップ１　データーベースに接続する
    require('dbconnect.php');
// ステップ２ SQL文実行
    // SQLインジェクションを防ぐ
    // プリペアードステートメントを使う

    // isset 変数が存在しているかチェック
    if ((isset($_POST['code'])) && ($_POST['code'] != '')){
      // POST送信がされている(?は置き換えたい値がある場所に記述)
       $sql = 'SELECT * FROM `survey` WHERE `code`=?;';
        // 置き換えたいデータを配列の形で保存する
       // $data[]と書くと配列の末尾に追加される
       // $data = $_POST['code']; -> $data[0]の中に記述された文字が格納される
       $data[] = $_POST['code'];

    // SQL文を実行する準備
    // -> アロー演算子
    $stmt = $dbh->prepare($sql);

    // SQL文を実行
    $stmt->execute($data);
    }else{
      // POST送信がされていない
      // から文字が送信されている
       $sql = 'SELECT * FROM `survey`;';
           // SQL文を実行する準備
    // -> アロー演算子
    $stmt = $dbh->prepare($sql);

    // SQL文を実行
    $stmt->execute();
    }
   

   



// ステップ３　データーベースの切断
    // $dbh = null;


    ?><!DOCTYPE html>
    <html>
    <head>
      <head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/mattsince87/pen/jrbyG?limit=all&page=3&q=partial" />
<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">body, html {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  background: #e5e5e5;
}

body {
  position: relative;
  height: auto;
}

*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.pad {
  display: block;
  width: 100%;
  position: relative;
  float: left;
  overflow: hidden;
  padding: 40px 0px;

}

h1 {
  font-family: "Roboto", Arial, sans-serif;
  font-weight: 500;
  font-size: 28px;
  letter-spacing: -0.025em;
  color: #262626;
  margin: 0 0 20px 0;
}

h1 small {
  font-family: "Roboto", Arial, sans-serif;
  font-weight: 300;
  font-size: 18px;
  letter-spacing: 0;
}

#articles {
  display: block;
  width: 60%;
  min-width: 468px;
  max-width: 740px;
  margin: 0 auto;
  -webkit-perspective: 0px;
  -moz-perspective: 0px;
  -ms-perspective: 0px;
  -o-perspective: 0px;
  perspective: 0px;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

p {
  font-family: "Roboto", Helvetica, sans-serif;
  font-size: 16px;
  color: #444;
  margin: 0;
}

.module {
  float: left;
  position: relative;
  clear: both;
  width: 100%;
  margin-bottom: 15px;
  display: block;
  background: #c3d6ff;;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
}

.inside-module {
  display: block;
  position: relative;
  width: 100%;
  height: 100%;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

article .bar-full {
  float: left;
  position: relative;
  width: 100%;
  height: 4px;
  background: #f7f7f6;
}

article .bar {
  display: block;
  width: 50px;
  height: 4px;
  position: absolute;
  top: 0;
  left: 0;
  background: #769ff4;
}

article .bar-box {
  display: none;
  position: absolute;
  top: 4px;
  width: 120px;
  height: 30px;
}

article .bar-box .bar-flip {
  display: block;
  position: absolute;
  top: 0px;
  width: 120px;
  height: 30px;
  padding: 0 20px;
  background: #6589d4;
  font-family: "Open Sans", Arial, sans-serif;
  font-weight: 600;
  color: #fff;
  line-height: 30px;
  -webkit-transform-origin: 50% 0%;
  -moz-transform-origin: 50% 0%;
  -ms-transform-origin: 50% 0%;
  -o-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transform: perspective(250px) rotateX(-90deg);
  -moz-transform: perspective(250px) rotateX(-90deg);
  -ms-transform: perspective(250px) rotateX(-90deg);
  -o-transform: perspective(250px) rotateX(-90deg);
  transform: perspective(250px) rotateX(-90deg);
  -webkit-transition: 0.2s linear 0.2s;
  -moz-transition: 0.2s linear 0.2s;
  -ms-transition: 0.2s linear 0.2s;
  -o-transition: 0.2s linear 0.2s;
  transition: 0.2s linear 0.2s;
}

article:hover .bar-flip {
  -webkit-transform: perspective(350px) rotateX(0deg);
  -moz-transform: perspective(350px) rotateX(0deg);
  -ms-transform: perspective(350px) rotateX(0deg);
  -o-transform: perspective(350px) rotateX(0deg);
  transform: perspective(350px) rotateX(0deg);
  -webkit-transition: 0.2s linear 0s;
  -moz-transition: 0.2s linear 0s;
  -ms-transition: 0.2s linear 0s;
  -o-transition: 0.2s linear 0s;
  transition: 0.2s linear 0s;
}

.come-in .bar,
.already-visible .bar {
  width: 120px;
  -webkit-transition: width 0.35s ease-in;
  -moz-transition: width 0.35s ease-in;
  -ms-transition: width 0.35s ease-in;
  -o-transition: width 0.35s ease-in;
  transition: width 0.35s ease-in;
}

.come-in .bar-box,
.already-visible .bar-box {
  display: block;
}

.module.come-in {
  -webkit-transform: translateY(100px);
  -moz-transform: translateY(100px);
  -ms-transform: translateY(100px);
  -o-transform: translateY(100px);
  transform: translateY(100px);
  -webkit-animation: google 0.4s ease forwards;
  -moz-animation: google 0.4s ease forwards;
  -o-animation: google 0.4s ease forwards;
  animation: google 0.4s ease forwards;
}

.module,
.module.already-visible {
  -webkit-transform: translateY(0px) perspective(200px) rotatex(0deg);
  transform: translateY(0px) perspective(200px) rotatex(0deg);
  -webkit-animation: none;
  -moz-animation: none;
  -o-animation: none;
  animation: none;
}

@-webkit-keyframes google {
  0% {
    -webkit-transform: translateY(100px) perspective(200px) rotatex(30deg);
  }
  100% {
    -webkit-transform: translateY(0px) perspective(200px) rotatex(0deg);
  }
}
@-moz-keyframes google {
  0% {
    -moz-transform: translateY(100px) perspective(200px) rotatex(30deg);
  }
  100% {
    -moz-transform: translateY(0px) perspective(200px) rotatex(0deg);
  }
}
@-o-keyframes google {
  0% {
    -o-transform: translateY(100px) perspective(200px) rotatex(30deg);
  }
  100% {
    -o-transform: translateY(0px) perspective(200px) rotatex(0deg);
  }
}
@keyframes google {
  0% {
    -webkit-transform: translateY(100px) perspective(200px) rotatex(30deg);
    transform: translateY(100px) perspective(200px) rotatex(30deg);
  }
  100% {
    -webkit-transform: translateY(0px) perspective(200px) rotatex(0deg);
    transform: translateY(0px) perspective(200px) rotatex(0deg);
  }
}
</style>
      <title>お問い合わせ一覧</title>
    </head>
    <body>
      <div class="pad">
  
<section id="articles">

    <h1>お問い合わせ一覧</h1>
    <form action="" method="post">
      <p>検索したいcodeを入力してください。</p>
      <input type="text" name="code">
      <input type="submit" value="検索">
    </form>
    <?php
    // while (1) 無限ループ
    while (1){
    $record = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($record == false){
      break;
    }

    // 連想配列のキーがカラム名と同じものになっている
    ?>
    <div class="pad">
  
    <section id="articles">
  
    <article class="module">
    <div class="inside-module">
      <div class="bar-full">
        <span class="bar"> </span>
        <div class="bar-box">
          <span class="bar-flip"><?php echo $record["code"]; ?></span>
        </div> 
      </div>
  
      <div class="pad">
    <br><?php echo $record["nickname"]; ?><br>
    <?php echo $record["email"]; ?><br>
    <?php echo $record["content"]; ?><br>
<!--      <form action="" method="post">
      <input type="button" value="変更">
      <a href = "delete"><input type="button" value="削除"></a>
    </form> -->
      <button>編集</button>
      <a href="delete.php"><button>削除</button></a>

   </div>
</div>
</article>
    <?php
}

// ステップ３　データーベースの切断
    $dbh = null;
    ?>


<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

var win = $(window);

var allMods = $(".module");

allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});

var poz = $(window).scrollTop();

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      
      el.addClass("come-in");

    } 
  });
  
});
//# sourceURL=pen.js
</script>





</body>
</html>