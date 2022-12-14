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

<form>
    <!--name-->
    <div class="form-group">
        <h2 class="text-center">CONTACT</h2><br>
        <label for="name1"><h3>▶お名前</h3></label>
        <input type="name" class="form-control" id="name1" aria-describedby="namaehelp"
        placeholder="名前を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="email1"><h3>▶メールアドレス</h3></label>
        <input type="email" class="form-control" id="email1" aria-describedby="mailhelp"
        placeholder="メールアドレスを入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="call1"><h3>▶電話番号</h3></label>
        <input type="call" class="form-control" id="call1" aria-describedby="callhelp"
        placeholder="電話番号を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="text1"><h3>▶件名</h3></label>
        <input type="text" class="form-control" id="text1" aria-describedby="texthelp"
        placeholder="件名を入力してください">
    </div>
    <br>
    <div class="form-group">
        <label for="text2"><h3>▶お問い合わせ内容</h3></label>
        <textarea class="form-control" id="texts" rows="3"
        placeholder="お問い合わせ内容を入力してください"></textarea>
    </div>
    <br>
    
    <p id="text1"><button type="submit" class="btn btn-primary"><a href="kanryo.html" style="text-decoration:none;"> 送信</button></a></form></p>
</form>
</body>