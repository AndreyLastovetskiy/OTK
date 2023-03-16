<?php
session_start();

if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}
require_once("../db/db.php");

$id_order = $_GET['id_order'];

mysqli_query($link, "UPDATE `basket` SET `accept` = 1 WHERE `idorder`='$id_order'");

header("Location: admin.php");

?>