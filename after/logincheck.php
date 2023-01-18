<?php
session_start();
require_once "DBManager.php";
$search = new DBManager();
$searchArray = $search->login($_POST["mail"],$_POST["pass"]);

foreach($searchArray as $row){
    $_SESSION['user_mail']=$row['user_mail'];
    header('Location:(G1-2)home.php');
}
if(count($searchArray)==0){
    header('Location:(G1-1-1-1)login.php');
}
?>