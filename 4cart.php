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
                <button class="btn btn-lg btn-outline-dark mt-1" style="margin: -40%"><span class="h6">戻る</span></button>
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
    
    <!-- カート -->
    <div class="container-fluid">
        <div class="row align-items-center text-center" style="height: 15%;">
            <div class="col-12">
                <span class="h1">カート</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 border-top border-dark" style="background-color: rgba(210,210,210,0.5);">
                <div class="row">
                    <div class="col-4" style="margin-left:-2%">
                        <img class="m-1" src="img/okado_p21.png" style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                    </div>
                    <div class="col-8">
                        <div class="row" style="height: 33%">
                            <span class="h4">商品名</span>
                        </div>
                        <div class="row"style="height: 33%">
                            <span class="col-8 h4">￥1000</span>
                            <i class="bi bi-dash-square col-4 h1"></i>
                        </div>
                        <div class="row"style="height: 33%">
                            <span class="h4">数量 : 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 border-top border-dark" style="background-color: rgba(210,210,210,0.5);">
                <div class="row">
                    <div class="col-4" style="margin-left:-2%">
                        <img class="m-1" src="img/okado_p21.png" style="width: 100%; aspect-ratio: 1/1; object-fit: cover;">
                    </div>
                    <div class="col-8">
                        <div class="row" style="height: 33%">
                            <span class="h4">商品名</span>
                        </div>
                        <div class="row"style="height: 33%">
                            <span class="col-8 h4">￥1000</span>
                            <i class="bi bi-dash-square col-4 h1"></i>
                        </div>
                        <div class="row"style="height: 33%">
                            <span class="h4">数量 : 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4 border-top border-bottom border-dark" style="background-color: rgba(210,210,210,0.5);">
                <div class="row align-items-center" style="height: 60px">
                    <div class="col-4 text-center" style="margin-left:-2%">
                        <div class="m-1 h4 w-100">
                            合計金額
                        </div>
                    </div>
                    <div class="col-8 text-center">
                        <div class="m-1 h4 w-100">
                            ￥6000
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="row align-items-center" style="height: 60px">
                    <div class="col-6"></div>
                    <div class="col-6 text-center" style="margin-left:-2%;">
                        <button class="btn btn-outline-dark mt-1"><span class="h5">レジへ進む</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
    </script>
    <!-- /カート -->
</body>