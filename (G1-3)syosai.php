<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style_test2.css">
    
    
</head>

<body id="body" class="bg-white">
    <!-- ナビゲーション -->
    <!-- z-index:11000 -->
    <nav class="nav bg-light sticky-top" style="z-index: 11000">
        <div class="container-fluid">
            <div class="row p-2">
                <div class="col-4 pt-1">
                    <i class="bi bi-list display-4" onclick="menuOpen()"></i>
                </div>
                <div class="col-4">
                    <h2 class="text-center mt-1">okado</h2>
                </div>
                <div class="col-2 text-center">
                <button class="btn btn- btn-lg btn-outline-dark mt-1" style="margin: -40%"><span class="h6">戻る</span></button>
                </div>
                <div class="col-2 pt-1 text-center">
                    <a href="" class="text-dark"><i class="bi bi-cart3 display-6"></i></a><!--カート画面リンクの追加-->
                </div>
            </div>
        </div>
    </nav>

    <script type="text/javascript">
        var scwidth = screen.width;
        var flag = false;
        function menuOpen(){
            var menunav = document.getElementById("menunav");
            if(flag == true){
                menunav.style.left = -scwidth + "px";
            }else{
                menunav.style.left = "0px";
            }
            flag = !flag;
        }
    </script>

    <!-- z-index:10000 -->
    <nav id="menunav" class="container-fluid h-100" style="width: 100%; position: absolute; left: -100%; position: fixed; top: 5%; z-index: 10000">
        <div class="row h-100">
            <div class="col-9 col-md-5 col-xl-4 bg-white">
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
            </div>
            <div class="col-3 col-md-7 col-xl-8" style="background-color: rgba(160,170,170,0.5);" onclick="menuOpen()"></div>
        </div>
    </nav>
    <!-- /ナビゲーション -->

    <!-- 商品詳細 -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <img src="img/okado_i06.png" style="width: 100%; object-fit: cover">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <span class="h2">商品名</span>
            </div>
            <div class="w-100"></div>
            <div class=" col-8 col-md-4 col-lg-3">
                <span class="h2">￥1000</span>
            </div>
            <div class="col-4 col-md-3 col-lg-2"  style="margin-bottom: -10%">
                <span class="h1">♡</span>
            </div>
            <div class="w-100"></div>


            <div class="col-12 col-md-7 col-lg-5">
                <span class="h2">残り : 3</span>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-md-7 col-lg-5">
                <span class="h2">数量 : </span>


                <select name="quantity">
                    <option value="<?php echo 1?>"><?php echo 1?></option>
                </select>


            </div>
            <div class="w-100" style="height: 2%;"></div>

        </div>
        <div class="row justify-content-center m-2">
            <div class="col-12 col-md-7 col-lg-5" style="background-color: rgba(230,230,230,0.7)">
                <span class="h5">＜説明＞</span>
                <span class="h5" style="overflow-wrap: break-word">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span>
            </div>
        </div>

        <div class="w-100" style="height: 1%;"></div>
        <div class="row justify-content-center sticky-top m-2" style="height: 70px; bottom:0;">
            <div class="col-12 col-md-7 col-lg-5 bg-warning border border-dark rounded text-center p-3" style="height: 100%;" onclick="throwcart()">
                <span class="h3">カートに入れる</span>
            </div>
        </div>
    </div>

    <!-- アラート -->
    <script type="text/javascript">
        var flag2 = false;
        function throwcart(){
            var calart = document.getElementById("throwcart");
            if(flag2 == true){
                calart.style.left = -scwidth + "px";
            }else{
                calart.style.left = "0px";
            }
            flag2 = !flag2;
        }
    </script>
    
    <nav id="throwcart" class="container-fluid h-100" style="width: 100%; position: absolute; left: -100%; position: fixed; top: 5%; z-index: 10000" onclick="throwcart()">
        <div class="row align-items-center justify-content-center h-100" style="background-color: rgba(160,170,170,0.5);">
            <div class="col-7 bg-secondary text-center h2 pt-3 border border-dark rounded" style="height: 70px">
                <span>カートに入れました</span>
            </div>
        </div>
    </nav>
    <!-- /アラート -->
    
    <!-- /商品詳細 -->
</body>