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

<body id="body" style="background-image: url(img/main-image.png);">
    <div class="container-fluid">
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
        <!-- 商品一覧 -->
        <div class="row align-items-center text-center" style="height: 15%;">
            <div class="col-12">
                <span class="h1">イヤリング</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 border p-2" style="background-color: rgba(160,170,170,0.2);">
                <div style="width: 100%; object-fit: cover">
                    <div class="bg-light" style="width: 100%; height: 100%">
                        <img src="img/okado_e02.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　マカロニ</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥2000</p>
                            </div>
                            <div class="col-4" style="margin-bottom: -10%;">
                                <p id="favorite" class="h1 text-danger" onclick="heartCheck()">♡</p>
                            </div>
                        </div>
                        
                        <p class="h6">　残り : 2</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 border p-2" style="background-color: rgba(160,170,170,0.2);">
                <div style="width: 100%;  object-fit: cover">
                    <div class="bg-white" style="width: 100%; height: 100%">
                        <img src="img/okado_e08.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　マカロニ</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥2000</p>
                            </div>
                            <div class="col-4" style="margin-bottom: -10%;">
                                <p id="favorite" class="h1 text-danger" onclick="heartCheck()">♡</p>
                            </div>
                        </div>
                        
                        <p class="h6">　残り : 2</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 border p-2" style="background-color: rgba(160,170,170,0.2);">
                <div style="width: 100%;  object-fit: cover">
                    <div class="bg-white" style="width: 100%; height: 100%">
                        <img src="img/okado_i10.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　マカロニ</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥2000</p>
                            </div>
                            <div class="col-4" style="margin-bottom: -10%;">
                                <p id="favorite" class="h1 text-danger" onclick="heartCheck()">♡</p>
                            </div>
                        </div>
                        
                        <p class="h6">　残り : 2</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 border p-2" style="background-color: rgba(160,170,170,0.2);">
                <div style="width: 100%;  object-fit: cover">
                    <div class="bg-white" style="width: 100%; height: 100%">
                        <img src="img/okado_i10.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　マカロニ</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥2000</p>
                            </div>
                            <div class="col-4" style="margin-bottom: -10%;">
                                <p id="favorite" class="h1 text-danger" onclick="heartCheck()">♡</p>
                            </div>
                        </div>
                        
                        <p class="h6">　残り : 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /商品一覧 --> 
</body>