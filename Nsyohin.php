<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>商品</title>
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet"href="./css/style.css">
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
                <li class="nav_item"><a href="home.php"style="text-decoration:none;"><div class="menu">>HOME</a></div></li>
                <li class="nav_item"><a href="ABOUT.php"style="text-decoration:none;"><div class="menu">>ABOUT</a></div></li>
                <li class="nav_item"><a href="CONTACT.php"style="text-decoration:none;"><div class="menu">>CONTACT</a></div></li>
                <li class="nav_item"><a href="login.php"style="text-decoration:none;"><div class="menu">>ログイン</a></div></li>
              </ul>
            </nav>
       
          </div>
            <div class="text-center col-8 ">
                <h1>okado</h1>
            </div>
            <div class="col-1">
            <a href="../cart.php"><i class="bi bi-cart3 text-dark" style="font-size: 1.5rem;"></i></a>
            </div> 
            <div class="col-1">
              <a href="../home.php"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
            </div>
    <haichi>
        <h1>ネックレス</h1>
    </haichi>
    <div>
        <ul>
            <li>
                <a href="N/syouhingamenn-1.php">
                    <img src="img/okado_n01.png">
                </a>
                <p id="a">
                    ネックレス１<br>
                    ￥1000<br>
                    <moji>SOLD OUT</moji>
                </p>
            </li>
            <li>
                <a href="syouhingamenn-2.php">
                    <img src="img/okado_n02.png">
                </a>
                <p id="a">
                    ネックレス２<br>
                    ￥1000<br>
                    <moji>SOLD OUT</moji>
                </p>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <a href="syouhingamenn-3.html">
                    <img src="img/okado_n03.png">
                </a>
                <p id="a">
                    ネックレス３<br>
                    ￥1000<br>
                    <moji>SOLD OUT</moji>
                </p>
            </li>
            <li>
                <a href="syouhingamenn-4.html">
                    <img src="img/okado_n04.png">
                </a>
                <p id="a">
                    ネックレス４<br>
                    ￥1000<br>
                    <moji>SOLD OUT</moji>
                </p>
            </li>
        </ul>
    </div>
</body>

</html>