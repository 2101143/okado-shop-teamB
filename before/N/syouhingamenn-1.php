<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="../css/style.css">
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
          <li class="nav_item"><a href="../(G1-1)home.php"style="text-decoration:none;"><div class="menu">>HOME</a></div></li>
            <li class="nav_item"><a href="../(G1-5)ABOUT.php"style="text-decoration:none;"><div class="menu">>ABOUT</a></div></li>
            <li class="nav_item"><a href="../(G1-6-1)CONTACT.php"style="text-decoration:none;"><div class="menu">>CONTACT</a></div></li>
            <li class="nav_item"><a href="../(G1-10)login.php"style="text-decoration:none;"><div class="menu">>ログイン</a></div></li>
        </nav>
   
      </div>
        <div class="text-center col-8 ">
            <h1>okado</h1>
        </div>
        <div class="col-1">
        <a href="../cart.php"><i class="bi bi-cart3 text-dark" style="font-size: 1.5rem;"></i></a>
        </div> 
        <div class="col-1">
          <a href="../(G1-1)home.php"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
        </div>
    <img src="../img/okado_n01.png">
    <p class="text-center">商品名</p>
    <p class="text-center">￥1234</p>
    <p class="text-align:right">♡</p>
<div class="main box1">
    <p class="text-center">商品説明</p>
</div>
<p></p>
<button type="button">カートに入れる</button>
</body>
</html>