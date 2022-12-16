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
    
    <!-- 商品一覧 -->
    <div class="container-fluid">
        <div class="row align-items-center text-center" style="height: 15%;">
            <div class="col-12">
                <span class="h1">イヤリング</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 border p-2" style="background-color: rgba(160,170,170,0.2);">
                <div style="width: 100%;  object-fit: cover">
                    <div class="bg-white" style="width: 100%; height: 100%">
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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
                        <img src="img/okado_i12.png" style="width: 100%; object-fit: cover">
                        <p class="h6">　商品名</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="h6">　￥1000</p>
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