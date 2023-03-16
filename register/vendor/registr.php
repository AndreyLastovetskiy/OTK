<?php

require_once("../../db/db.php");
$userlogin = $_POST['login'];
$userpass = $_POST['password'];
$idgroup = 2;

$userlogin = htmlspecialchars($userlogin);
$userlogin = urldecode($userlogin);
$userlogin = trim($userlogin);

$userpass = htmlspecialchars($userpass);
$userpass = urldecode($userpass);
$userpass = trim($userpass);

mysqli_query($link, "INSERT INTO `users` (`usgroup`, `login`,`pass`) VALUES ('$idgroup', '$userlogin', '$userpass')");

header("Location: ../../login/index.php");

?>