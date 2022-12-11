<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet"  type="text/css" href="./css/style_test.css">
</head>
<body>
    <header>
        <ul>
            <li>list1</li>
            <li>list2</li>
            <li>list3</li>
            <li>list4</li>
            <li>list5</li>
        </ul>
    </header>
    <p></p>
    <h1 id="H1">はじめまして</h1>

    <h1>
        <input type="text" name="text1">
    </h1>
    <p>
        <input type="text" name="text2" id="text2">
    </p>

    <p>
        <time datetime="17:30">10分前</time>
    </p>
    <p>
        <time datetime="2022-09-30">20220930</time>
    </p>
    <p>
        <input type="date" name="date1">
    </p>
    <p>
        <input type="time" name="date1">
    </p>
    <p>
        <input type="search" name="date1">
    </p>
    <script type="text/javascript">
        var text1 = "";
        for(var i=0;i<10;i++){
            //PHPのechoステートメントは画面上ではなくコード上に書き出している
            text1 += "ありがとう <?php echo "aiueo"; ?><br />";
        }
        document.write(text1);
        //onclick関数　→　商品画像の切り替えなど
        var g = true;
        function clickfunc(){
            var obj = document.getElementById("img1");
            if(g==true){
                obj.src = "img/okado_e03.png";
            }else{
                obj.src = "img/okado_e05.png"
            }
            g = !g;
        }

        function over1(){
            var obj = document.getElementById("img2");
            obj.src = "img/okado_e03.png";
        }
        function out1(){
            var obj = document.getElementById("img2");
            obj.src = "img/okado_e05.png";
        }
        
    </script>
    <img id="img1" src="img/okado_e03.png" onclick="clickfunc()">
    <img id="img2" src="img/okado_e03.png" onmouseover="over1()" onmouseout="out1()">
    <p>
        <input type="text" size="4">
    </p>

    <div id="div1" onclick="clickfunc2()">
        <div>
            <h1>ありがとう</h1>
        </div>
    </div>
    <script type="text/javascript">
        //innerHTML HTMLを書き換えている
        //div1内のhtmlの書き換え →　ログイン表示切替
        var g = true;
        function clickfunc2(){
            if(g == false){
                document.getElementById("div1").innerHTML="<div><h1>ありがとう</h1></div>";
            }else{
                document.getElementById("div1").innerHTML="<div><h1>ごめんなさい</h1></div>";
            }
            g = !g;
        }
        document.write(screen.width);
    </script>

</body>
    