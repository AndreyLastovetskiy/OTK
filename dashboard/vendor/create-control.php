<?php

session_start();

if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}
require_once("../../db/db.php");

var_dump($_POST);
$user_rg = 2;
$login_adm = $_POST['login'];
$pass_adm = $_POST['pass'];

$protect = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='$login_adm'");
$protect = mysqli_fetch_assoc($protect);
if($protect) {
    $_SESSION["dontcreate"] = 'Пользователь с таким логином уже есть!';
    header("Location: ../admin.php"); 
} else {
    
$create_adm = mysqli_query($link, "INSERT INTO `users`(`usgroup`, `login`, `pass`) VALUES ('$user_rg','$login_adm','$pass_adm')");
}


header("Location: ../admin.php");

?>