<?php
session_start();
require_once("../../db/db.php");

$id_user = $_COOKIE['id'];
$id_prod = $_POST['id_prod'];
$quant_prod = $_POST['quant'];
$accept = 0;
$id_order = rand(100000, 999999);

$selected_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `id`='$id_prod'");
$selected_prod = mysqli_fetch_assoc($selected_prod);

$selected_user = mysqli_query($link, "SELECT `fio` FROM `users` WHERE `id`='$id_user'");
$selected_user = mysqli_fetch_assoc($selected_user);

$title_prod = $selected_prod['title'];
$price_prod = $selected_prod['price'];
$fio_user = $selected_user['fio'];

if($selected_prod['quantity'] < $quant_prod) {
    $_SESSION["errOrder"] = 'В таком количестве, нет данного товара';
    header("Location: ../cart-product.php?id=" . $id_prod);
} else {
    mysqli_query($link, "INSERT INTO `basket` (`idorder`, `titleprod`, `iduser`, `fiouser`, `quantity`,`price`,`accept`) VALUES ('$id_order', '$title_prod', '$id_user', '$fio_user', '$quant_prod', '$price_prod', '$accept')");
    header("Location: ../index.php");
}

?>