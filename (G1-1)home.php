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
            <div class="row">
                <div class="nav col-2 ">
                
                <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
        
                <!-- ハンバーガーアイコン -->
                <label for="drawer_input" class="drawer_open"><span></span></label>
        
                <!-- メニュー -->
                <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="(G1-1)home.php"style="text-decoration:none;"><div class="menu">HOME<div></a></li>
                        <li class="nav_item"><a href="(G1-5)ABOUT.php"style="text-decoration:none;"><div class="menu">ABOUT</div></a></li>
                        <li class="nav_item"><a href="(G1-6-1)CONTACT.php"style="text-decoration:none;"><div class="menu">CONTACT</div></a></li>
                        <li class="nav_item"><a href="(G1-10)login.php"style="text-decoration:none;"><div class="menu">ログイン</div></a></li>
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
        <!-- HOME -->
        <div class="container-fluid">
            <div class="" style="height: 20%;">
                <div class="col text-center">
                    <img class="border" src="img/main-image.png" style="height: 100%; width: 280px; object-fit: cover">
                </div>
            </div>
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
                        <li class="bg-white border border-dark p-1 my-4 text-center"><a href="" class="text-dark" style="text-decoration: none;">ネックレス</a></li>
                        <li class="bg-white border border-dark p-1 my-4 text-center"><a href="" class="text-dark" style="text-decoration: none;">イヤリング</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- /HOME -->
    </body>
</html>