<?php
$x = $_POST["value"];
try{
    echo $x*1.1;
}catch(Exception $e){
    echo "数字を入力してください。";
    echo "test_branch1";
}
?>