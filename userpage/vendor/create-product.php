<?php
require_once("../../db/db.php");

$titleprod = $_POST['title'];
$path = 'images/dashboard/product/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../../' . $path);

$id_user = $_COOKIE['id'];
$sel_user = mysqli_query($link, "SELECT * FROM `users` WHERE `id`='$id_user'");
$sel_user = mysqli_fetch_assoc($sel_user);
$fio_user = $sel_user['fio'];

$sel_inp1 = $_POST["1"];
$sel_inp2 = $_POST["2"];
$sel_inp3 = $_POST["3"];
$sel_inp4 = $_POST["4"];

$otk = 0;

$sel_service = mysqli_query($link, "SELECT * FROM `services` WHERE `id`='$sel_inp1' OR `id`='$sel_inp2' OR `id`='$sel_inp3' OR `id`='$sel_inp4'");
$sel_service = mysqli_fetch_assoc($sel_service);

$selser_ser = $sel_service['service'];
$price_ser = $sel_service['price'];

mysqli_query($link, "INSERT INTO `product`(`id_user`, `fio_user`, `title`, `pathimg`, `service`, `price`, `otk`) VALUES ('$id_user', '$fio_user', '$titleprod','$path', '$selser_ser', '$price_ser', '$otk')");

header("Location: ../create-product.php");
?>