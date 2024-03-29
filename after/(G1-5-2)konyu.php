<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div name="maindiv" class="container-fluid">
        <!-- ナビゲーション -->
		<div class="row">
			<div class="nav col-2 ">
					
				<!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
				<input id="drawer_input" class="drawer_hidden" type="checkbox">
			
				<!-- ハンバーガーアイコン -->
				<label for="drawer_input" class="drawer_open"><span></span></label>
				
				<!-- メニュー -->
				<nav class="nav_content">
					<ul class="h3 mt-5" style="list-style-type: none;">
						<li class="border-bottom border-dark p-1"><a href="(G1-1)home.php" class="text-dark" style="text-decoration: none;">HOME</a></li>
						<li class="border-bottom border-dark p-1"><a href="(G1-5)ABOUT.php" class="text-dark" style="text-decoration: none;">ABOUT</a></li>
						<li class="border-bottom border-dark p-1"><a href="(G1-6-1)CONTACT.php" class="text-dark" style="text-decoration: none;">CONTACT</a></li>
						<li class="border-bottom border-dark p-1"><a href="(G1-6-1)CONTACT.php" class="text-dark" style="text-decoration: none;">ワークショップ予約</a></li>
						<li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">お気に入り</a></li>
						<li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">購入履歴</a></li>
						<li class="border-bottom border-dark p-1"><a href="(G1-1-10)login.php" class="text-dark" style="text-decoration: none;">ログイン</a></li>
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
				<a href="home.html"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
			</div>
		</div>
		<!-- /ナビゲーション -->
        <div class="row justify-content-center mt-4">
            <div class=" col-11 col-md-7 col-lg-6 col-xl-4" style="border-radius: 10px">
                <div class="row justify-content-center mt-3" style="height: 40px;">
                    <div class="col-7">
                        <span class="h5">商品の小計</span>
                    </div>
                    <div class="col-4">
                        <span class="h5">￥2000</span>
                    </div>
                </div>
                <div class="row justify-content-center border-bottom border-dark" style="height: 40px;">
                    <div class="col-7">
                        <span class="h5">配送料・手数料</span>
                    </div>
                    <div class="col-4">
                        <span class="h5">￥500</span>
                    </div>
                </div>
                <div class="row justify-content-center mt-3" style="height: 40px;">
                    <div class="col-7">
                        <span class="h5">ご請求額</span>
                    </div>
                    <div class="col-4">
                        <span class="h5 text-right">￥2500</span>
                    </div>
                </div>
            
            
                
            <div class="w-100" style="height: 1%;"></div>
        <div class="row justify-content-center sticky-top m-2" style="height: 70px; bottom:0;">
            <div class="col-12 col-md-7 col-lg-5 bg-warning border border-dark rounded text-center p-2" style="height: 80%;" onclick="throwcart()">
                <a href="shiharai.php"><span class="h3">注文確定</span></a>
            </div>
        </div>
        </div>
    </div>
</body>
</html>