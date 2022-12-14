<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

<form>
    <!--name-->
    <div class="form-group">
        <h2 class="text-center">CONTACT</h2><br>
        <label for="name1"><h3>▶お名前</h3></label>
        <input type="name" class="form-control" id="name1" aria-describedby="namaehelp"
        placeholder="名前を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="email1"><h3>▶メールアドレス</h3></label>
        <input type="email" class="form-control" id="email1" aria-describedby="mailhelp"
        placeholder="メールアドレスを入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="call1"><h3>▶電話番号</h3></label>
        <input type="call" class="form-control" id="call1" aria-describedby="callhelp"
        placeholder="電話番号を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="text1"><h3>▶件名</h3></label>
        <input type="text" class="form-control" id="text1" aria-describedby="texthelp"
        placeholder="件名を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="text2"><h3>▶お問い合わせ内容</h3></label>
        <textarea class="form-control" id="texts" rows="3"
        placeholder="お問い合わせ内容を入力してください"></textarea>
    </div>
    <br>
    
    <p id="text1"><button type="submit" class="btn btn-primary"><a href="kanryo.html" style="text-decoration:none;"> 送信</button></a></form></p>
</form>