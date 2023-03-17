<?php
session_start();

if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}
require_once("../db/db.php");

$id_prod = $_GET['id'];

mysqli_query($link, "UPDATE `product` SET `otk` = 1 WHERE `id`='$id_prod'");

header("Location: admin.php");

?>