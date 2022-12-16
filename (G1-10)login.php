<!DOCTYPE html>
<html lang="ja"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
    
  <body>
    <div name="maindiv" class="container-fluid">
        <div class="row">
          <div class="nav col-2 ">
                
            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">
        
            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>
        
            <!-- メニュー -->
            <nav class="nav_content">
              <ul class="nav_list">
              <ul class="h3 mt-5" style="list-style-type: none;">
                    <li class="border-bottom border-dark p-1"><a href="(G1-1)home.php" class="text-dark" style="text-decoration: none;">HOME</a></li>
                    <li class="border-bottom border-dark p-1"><a href="(G1-5)ABOUT.php" class="text-dark" style="text-decoration: none;">ABOUT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="(G1-6-1)CONTACT.php" class="text-dark" style="text-decoration: none;">CONTACT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="(G1-6-1)CONTACT.php" class="text-dark" style="text-decoration: none;">ワークショップ予約</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">お気に入り</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">購入履歴</a></li>
                    <li class="border-bottom border-dark p-1"><a href="(G1-10)login.php" class="text-dark" style="text-decoration: none;">ログイン</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">会員情報</a></li>
                </ul>
            </nav>
       
          </div>
            <div class="text-center col-8 ">
                <h1 class="logo">okado</h1>
            </div>
            <div class="col-1 cartLogo">
            <a href="cart.html"><i class="bi bi-cart3 text-dark" style="font-size: 1.5rem;"></i></a>
            </div> 
            <div class="col-1 reloadLogo">
              <a href="(G1-1)home.html"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
            </div>  
   <!-- <meta charset="UTF-8" />
    <title>5-4-1 タブメニュー</title>
<meta name="description"  content="書籍「動くWebデザインアイディア帳」のサンプルサイトです">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">-->
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
<!-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/css/5-4-1.css"> -->

<body>
<div class="mainWrapper">
  <div class="wrapper defaultCss">
      <ul class="tab">
        <li><a href="#login">ログイン</a></li>
        <li><a href="#shinki">新規登録</a></li>
      </ul>
<!--wrapper--></div>
<div id="login" class="area">
  <ul> 
      <li class="inputMargin">
      <div class="login-group">
          <label for="email1" class="labelMargin"><p>メールアドレス</p></label>
          <input type="email" class="form-control" id="email1" aria-describedby="mailhelp"
          placeholder="メールアドレスを入力してください">
      </div>
      <br>
      <li class="inputMargin">
      <div class="login-group">
          <label for="password1" class="labelMargin"><p>パスワード</p></label>
          <input type="password" class="form-control" id="call1" aria-describedby="callhelp"
          placeholder="パスワードを入力してください">
      </div>
      </li>
  </ul> 
<div><a href="(G1-10-1-2)seikou.php" class="btn btn-dark ">ログイン</a></div>
<!--/area--></div>
<div id="shinki" class="area">
  <ul> 
      <li class="inputMargin">
      <div class="login-group">
          <label class="text-center labelMargin"  for="email1" ><p class="text-center">メールアドレス</p></label>
          <input type="email" class="form-control text-center" id="email1" aria-describedby="mailhelp"
          placeholder="メールアドレスを入力してください">
      </div>
      <br>
      <li class="inputMargin">
      <div class="login-group">
          <label  class="text-center labelMargin" for="password1"><p>パスワード</p></label>
          <input type="password" class="form-control text-center" id="call1" aria-describedby="callhelp"
          placeholder="パスワードを入力してください">
      </div>
      </li>
  </ul> 
<div class="text-center"><a href="(G1-10-1-2)seikou.php" class="btn btn-dark text-center">新規登録</a></div>
</div>
<!--/area--></div>

    
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/js/5-4-1.js"></script>
</body>

</html>