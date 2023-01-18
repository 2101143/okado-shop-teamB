<!DOCTYPE html>
<html lang="ja">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>okadoハンドメイド home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/style.css">
	
</head>
	
<body>
	<div name="maindiv" class="container-fluid">
        <script type="text/javascript">
            var f = true;
            function switching(){
                var login = document.getElementById("login");
                var newaccount = document.getElementById("newaccount");
                
                if(f==true){
                    login.style.display = "none";
                    newaccount.style.display = "";
                }else{
                    login.style.display = "";
                    newaccount.style.display = "none";
                }
                f = !f;
            }
        </script>

        <?php
            session_start();
            if(isset($_SESSION['user_mail'])==true){
                header('Location:(G1-2)home.php');
            }
        ?>

        <div id="login">
            <form action="logincheck.php" method="post">
                <div class="row mt-5 justify-content-center">
                    <div class="border border-dark rounded col-11 col-md-8 col-lg-6 col-xl-5">
                        <div class="row">
                            <div class="col-6 pt-3 pb-3">
                                <h3 class="text-center">ログイン</h3>
                            </div>
                            <div class="col-6 pt-3 pb-3 border-start border-bottom border-dark" style="box-shadow: 0px 0px 8px 3px #ccc inset;" onclick="switching()">
                                <h3 class="text-center">新規登録</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mad-12 mt-3">
                                メールアドレス<input type="text" class="form-control" name="mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mad-12 mt-3">
                                パスワード<input type="password" class="form-control" name="pass">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-dark btn-lg text-white mb-3" onclick="OnClick()" value="ログイン">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="newaccount" style="display: none;">
            <form action="(G1-1-1-2)createAccount.php" method="post">
                <div class="row mt-5 justify-content-center">
                    <div class="border border-dark rounded col-11 col-md-8 col-lg-6 col-xl-5">
                        <div class="row">
                            <div class="col-6 pt-3 pb-3 border-end border-bottom border-dark" style="box-shadow: 0px 0px 8px 3px #ccc inset;" onclick="switching()">
                                <h3 class="text-center">ログイン</h3>
                            </div>
                            <div class="col-6 pt-3 pb-3">
                                <h3 class="text-center">新規登録</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mad-12 mt-3">
                                メールアドレス<input type="text" class="form-control" name="mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mad-12 mt-3">
                                パスワード<input type="password" class="form-control" name="pass">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-dark btn-lg text-white mb-3" onclick="OnClick()" value="登録">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>