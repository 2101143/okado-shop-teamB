<!DOCTYPE html>
<html lang="ja"><head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <script type="text/javascript" >
      function del1(){
        document.getElementById("s_1").style.display="none";
      }
      function del2(){
        document.getElementById("s_2").style.display="none";
      }
      function del3(){
        document.getElementById("s_3").style.display="none";
      }
      function del4(){
        document.getElementById("s_4").style.display="none";
      }
    </script>
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
              <li class="nav_item"><a href="(G1-1)home.php"style="text-decoration:none;"><div class="menu">HOME<div></a></li>
                <li class="nav_item"><a href="(G1-5)ABOUT.php"style="text-decoration:none;"><div class="menu"></div>ABOUT</a></li>
                <li class="nav_item"><a href="(G1-6-1)CONTACT.php"style="text-decoration:none;"><div class="menu"></div>CONTACT</a></li>
                <li class="nav_item"><a href="(G1-10)login.php"style="text-decoration:none;"><div class="menu"></div>ログイン</a></li>
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
              <a href="home.html"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
            </div>  
            <div class="name"><h1 class="text-center">カート</h1></div>
            
            <div class="shohin" id="s_1" >
              <div class="img">
                <img src="img/okado_e04.png" class="style">
              </div>
              <div class="s-name" id="s_1">
                <p class="s_name">商品名</p>
                <p class="s_kakaku">価格：&yen;99,999 +tax</p>
                <p class="s_suuryou">数量：</p>
                <button class="cancel" onclick="del1();">×</button>
              </div>
              
            
            </div>
            <div class="shohin" id="s_2">
              <div class="img">
                <img src="img/okado_e04.png" class="style">
              </div>
              <div class="s-name">
                <p class="s_name">商品名</p>
                <p class="s_kakaku">価格：&yen;99,999 +tax</p>
                <p class="s_suuryou">数量：</p>
                <button class="cancel" onclick="del2();">×</button>
              </div>
              
            
            </div>
            <div class="shohin" id="s_3">
              <div class="img">
                <img src="img/okado_e04.png" class="style">
              </div>
              <div class="s-name">
                <p class="s_name">商品名</p>
                <p class="s_kakaku">価格：&yen;99,999 +tax</p>
                <p class="s_suuryou">数量：</p>
                <button class="cancel" onclick="del3();">×</button>
              </div>
              
            
            </div>
            <div class="shohin" id="s_4">
              <div class="img">
                <img src="img/okado_e04.png" class="style">
              </div>
              <div class="s-name">
                <p class="s_name">商品名</p>
                <p class="s_kakaku">価格：&yen;99,999 +tax</p>
                <p class="s_suuryou">数量：</p>
                <button class="cancel" onclick="del4();">×</button>
              </div>
              
            
            </div>
            <div style="text-align:right; padding:0;">
              <button class="kakutei">購入確定</button>
            </div>
            
        </html>
