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

    <div class="container bg-secondary">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5 col-xl-4 bg-warning">
                    <table>
                        <tbody>
                            <tr>
                                <td>商品の小計</td>
                                <td>￥2000</td>
                            </tr>
                            <tr>
                                <td>配送料・手数料</td>
                                <td>￥500</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>ご請求額</td>
                                <td>￥2500</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <style>
            table, tfoot{
                border: 1px solid;
                padding: 5px;
            }
        </style>


    <!-- /ナビゲーション -->