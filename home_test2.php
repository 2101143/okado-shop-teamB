<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style_test2.css">


    <script type="text/javascript">
        var g = true;
        var screenwidth = screen.width;
        var x, dx = screenwidth*0.04;
        function move(){
            var obj = document.getElementById("movediv");
            x += dx;
            obj.style.left = x+"px";
        }
        function taiki(){

        }
        function movestop(){
            TimeId = setInterval(move,16);
            setInterval(move,16);
            
        }
        
    </script>

</head>

<body id="body" class="bg-white">

    <nav class="nav bg-light sticky-top">
        <div class="container-fluid">
            <div class="row p-2">
                <div class="col-4 pt-1">
                    <i class="bi bi-list display-4"></i>
                </div>
                <div class="col-4">
                    <h2 class="text-center mt-1">okado</h2>
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    
                </div>
            </div>
        </div>
    </nav>
    
    <nav class="container-fluid" style="position: absolute; left: 100%;">
        <div id="menudiv" class="row h-100">
            <div class="col-9 col-md-5 col-xl-4 bg-white">
                <div class="h1 text-center border-bottom border-dark p-2">okado</div>
                    <ul class="h3" style="list-style-type: none;">
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
            <div class="col-3 col-md-7 col-xl-8 bg-secondary"></div>
        </div>
    </nav>
</body>