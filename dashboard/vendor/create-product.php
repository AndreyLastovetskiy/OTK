<?php
require_once("../../db/db.php");

$titleprod = $_POST['title'];
$quantityprod = $_POST['quantity'];
$priceprod = $_POST['price'];
$path = 'images/dashboard/product/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../../' . $path);

mysqli_query($link, "INSERT INTO `product`(`title`, `pathimg`, `quantity`, `price`) VALUES ('$titleprod','$path','$quantityprod','$priceprod')");

header("Location: ../create-product.php");
?>