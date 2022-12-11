<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>okadoハンドメイド home</title>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet"  type="text/css" href="./css/style_test2.css">

    <script type="text/javascript">
        var g = true;
        var screenwidth = screen.width;
        var x = -300, dx = screenwidth*0.03;
        function move(){
            var obj = document.getElementById("movediv");
            x += dx;
            obj.style.left = x+"px";
        }
    </script>
    
</head>
<body id="body" class="bg-secondary">
    <nav class="nav bg-primary" style="position: sticky; top: 10px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <i class="bi bi-list" style="font-size: 2rem"></i>
                </div>
                <div class="col-4">
                    <h2 class="text-center">okado
                    </h2>
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
                    
                </div>
            </div>
        </div>
    </nav>
    <div id="movediv" class="bg-secondary" style="width:50%; height:50%; left: -300px;; position:absolute;"  onclick="setInterval(move,16)">
    </div>
    <div style="height:1500px">
    </div>
    
</body>