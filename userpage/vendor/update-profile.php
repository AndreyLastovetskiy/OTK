<?php

require_once("../../db/db.php");

$id = $_POST['id'];
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mysqli_query($link, "UPDATE `users` SET `fio` = '$fio', `phone` = '$phone', `email` = '$email' WHERE `users`.`id` = '$id'");

header("Location: ../admin.php");

?>