<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>カード情報</title>
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
</head>

<body>	
<div name="maindiv" >
	
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
            <a href="cart.php"><i class="bi bi-cart3 text-dark" style="font-size: 1.5rem;"></i></a>
            </div> 
            <div class="col-1">
              <a href="home.php"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
            </div>

                            <h1 class="text-secondary text-center">カード情報入力</h1>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <label  for="lovemusician"  class="form-label">カード番号</label>
                                    <input  type="text"  class="form-control"  id="lovemusician">
        
                                </div>
                            </div>
                                <div class="col-12 mb-2">
                                    <label  for="lovemusician"  class="form-label">有効期限</label>
                                    <input  type="text"  class="form-control"  id="lovemusician">
                                </div>
                                <div class="col-12 mb-3">
                                    <label  for="lovemusician"  class="form-label">名義</label>
                                    <input  type="text"  class="form-control"  id="lovemusician">
                                </div>
                                <div class="col-12 mb-3">
                                    <label  for="lovemusician"  class="form-label">セキュリティコード</label>
                                    <input  type="password"  class="form-control"  id="lovemusician">
                                </div>
                            <br>
                            <br>
                            <div class="col-12">
                                    <div class="d-grid gap-2">
                                      <button class="btn btn-primary">追加</button>
                                    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>