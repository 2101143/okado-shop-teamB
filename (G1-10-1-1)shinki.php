<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>新規登録</title>
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
              <li class="nav_item"><a href="(G1-1)home.php"style="text-decoration:none;"><div class="menu">HOME<div></a></li>
                <li class="nav_item"><a href="(G1-5)ABOUT.php"style="text-decoration:none;"><div class="menu"></div>ABOUT</a></li>
                <li class="nav_item"><a href="(G1-6-1)CONTACT.php"style="text-decoration:none;"><div class="menu"></div>CONTACT</a></li>
                <li class="nav_item"><a href="(G1-10)login.php"style="text-decoration:none;"><div class="menu"></div>ログイン</a></li>
              </ul>
            </nav>
       
          </div>
            <div class="text-center col-8 ">
                <h1>okado</h1>
            </div>
            <div class="col-1">
            <a href="cart.php"><i class="bi bi-cart3 text-dark" style="font-size: 1.5rem;"></i></a>
            </div> 
            <div class="col-1">
              <a href="(G1-1)home.php"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
            </div>
            <form name="login_form">
                <div class="login_form_top">
                  <h1>新規登録</h1>
                </div>
                <div class="login_form_btm">
                  <input type="id" name="user_id" placeholder="メールアドレス">
                  <input type="password" name="password" placeholder="パスワード">
                  <a href="seikou.php" class="btn btn--orange btn--radius">登録</a>
                </div>
              </form>
              
              
</body>
</html>