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
		<div class="row justify-content-center">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">
				<div class="name"><h1 class="text-center">カート</h1></div>
				<div class="shohin" id="s_1" >
					<div class="img">
						<img src="img/okado_e09.png" class="style">
					</div>
					<div class="s-name" id="s_1">
						<p class="s_name">特別な海月（青）</p>
						<p class="s_kakaku">価格：&yen;5,700</p>
						<p class="s_suuryou">数量：</p>
						<button class="cancel" onclick="del1();">×</button>
					</div>        
				</div>
				<div class="shohin" id="s_1" >
					<div class="img">
						<img src="img/okado_e09.png" class="style">
					</div>
					<div class="s-name" id="s_1">
						<p class="s_name">特別な海月（青）</p>
						<p class="s_kakaku">価格：&yen;5,700</p>
						<p class="s_suuryou">数量：</p>
						<button class="cancel" onclick="del1();">×</button>
					</div>        
				</div>
				<div class="shohin" id="s_1" >
					<div class="img">
						<img src="img/okado_e09.png" class="style">
					</div>
					<div class="s-name" id="s_1">
						<p class="s_name">特別な海月（青）</p>
						<p class="s_kakaku">価格：&yen;5,700</p>
						<p class="s_suuryou">数量：</p>
						<button class="cancel" onclick="del1();">×</button>
					</div>        
				</div>
				
				<div class="shohin" style="height: 50px;">
					<div class="s-name" style="height: 30px; margin-top: 9px">
						<span class="s_name" style="top: 10px">小計：&yen;5,700</span>
					</div>        
				</div>
				<div style="text-align:right; padding:0;">
					<button class="kakutei" onclick="location.href='(G1-4-2)tyumon.php'">レジへ</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>