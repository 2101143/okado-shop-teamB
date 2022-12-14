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

<div name="maindiv" >
	<div class="row">
        <div class = "col-sm-8">商品の小計 ¥2468
            <div class="row">
                <br><div class="col-sm-5">配送料・手数料 ¥200</div><br>
                <div class="col-sm-5">ご請求 ¥2668</div>
                </div>
            </div>
    </div>

	<h1 class="text-secondary text-center">お届け先</h1>
	<br>
    <select class="form-select"name="num">
        <option selected>
                ○○ 花子123-3456 ○○市○○区○○○○    
        </option>
        <option value="1">住所</option>
        <option value="2">住所</option>
    </select>
	<style>
		.example-r{
			border: 1px solid #999;
			padding: 10px;
			background: #fff9cc;
			margin-top:10px;
		}
		</style>
        <h1 class="text-secondary text-center">お支払い方法</h1>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox"id="chk1"value="option1">
            <label class="form-check-label" for="chk1"> HANAKO ○○○○
                <br>
                    <p>&nbsp下4桁:****1234</p>
            </label>
        </div>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox"id="chk1"value="option1">
            <label class="form-check-label" for="chk1">コンビニ決済</label>
        </div>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox"id="chk1"value="option1">
            <label class="form-check-label" for="chk1">代金引換</label>
        </div>
        <style>
            .example-r{
                border: 1px solid #999;
                padding: 10px;
                background: #fff9cc;
                margin-top:10px;
            }
            </style>
		<div class="text-center" class="example-r">
			<br>
            <br>
            <button>注文確定</button>
		</div>

	</div>