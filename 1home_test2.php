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
    <nav class="nav bg-light sticky-top">
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

    <nav id="menunav" class="container-fluid h-100" style="width: 100%; position: absolute; left: -100%; position: fixed; top: 5%">
        <div class="row h-100">
            <div class="col-9 col-md-5 col-xl-4 bg-white">
                <ul class="h3 mt-5" style="list-style-type: none;">
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">HOME</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">ABOUT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">CONTACT</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">ワークショップ予約</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">お気に入り</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">購入履歴</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">ログイン</a></li>
                    <li class="border-bottom border-dark p-1"><a href="" class="text-dark" style="text-decoration: none;">会員情報</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-7 col-xl-8" style="background-color: rgba(160,170,170,0.5);" onclick="menuOpen()"></div>
        </div>
    </nav>
    <!-- /ナビゲーション -->

    <div class="container-fluid">
        <div class="bg-white" style="height: 20%;">
            <div class="col text-center">
                <img class="border" src="img/main-image.png" style="height: 100%; width: 280px; object-fit: cover">
            </div>
        </div>
        <div class="bg-white mt-5" style="height: 5%;">
            <div class="col-12 text-center bg-white">
                <span class="h4">PICK UP!</span>
            </div>
        </div>
        <div class="bg-secondary" style="height: 35%;">
            <div class="col-12 text-center">
                <img class="border" src="img/main-image.png" style="height: 100%">
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-9 col-md-5 col-xl-4 bg-white">
                <ul class="h3" style="list-style-type: none;">
                    <li class="border border-dark p-1 my-4 text-center"><a href="" class="text-dark" style="text-decoration: none;">ネックレス</a></li>
                    <li class="border border-dark p-1 my-4 text-center"><a href="" class="text-dark" style="text-decoration: none;">イヤリング</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>