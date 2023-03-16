<?php
session_start();
require_once("../../db/db.php");

$id = $_POST['id'];
$titleprod = $_POST['title'];
$quantityprod = $_POST['quantity'];
$priceprod = $_POST['price'];
$path = 'images/dashboard/product/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../../' . $path);
mysqli_query($link, "UPDATE `product` SET `title` = '$titleprod', `pathimg` = '$path', `quantity` = '$quantityprod', `price` = '$priceprod' WHERE `id` = '$id'");

var_dump($_FILES);

header("Location: ../product.php");

?>