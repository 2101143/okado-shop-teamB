<!DOCTYPE html>
<html lang="ja">
  	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>okadoハンドメイド home</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="./css/style.css">
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<script type="text/javascript" >
		</script>
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
                    <li class="border-bottom border-dark p-1"><a href="ABOUT2.php" class="text-dark" style="text-decoration: none;">ABOUT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="(G1-6-1)CONTACT.php" class="text-dark" style="text-decoration: none;">CONTACT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="logout.php" class="text-dark" style="text-decoration: none;">ログアウト</a></li>
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
					<a href="home.html"><i class="bi bi-arrow-counterclockwise text-dark" style="font-size: 1.5rem;" ></i></a>
				</div>
			</div>
			<!-- /ナビゲーション -->
            
            <!-- HOME -->
            <div class="container-fluid">
                <div class="mt-5" style="height: 5%;">
                    <div class="col-12 text-center">
                        <span class="h4">PICK UP!</span>
                    </div>
                </div>
                <div style="height: 35%;">
                    <div class="col-12 text-center">
                        <img class="border" src="img/main-image.png" style="height: 100%">
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-9 col-md-5 col-xl-4">
                        <ul class="h3" style="list-style-type: none;">
                            <li class="bg-white border border-dark p-1 my-4 text-center"><a href="(G1-2)syohin.php" class="text-dark" style="text-decoration: none;">イヤリング</a></li>
                            <li class="bg-white border border-dark p-1 my-4 text-center"><a href="" class="text-dark" style="text-decoration: none;">ネックレス</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /HOME -->
        </div>
    </body>
</html>