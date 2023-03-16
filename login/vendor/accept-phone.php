<?php

session_start();
require_once("../../db/db.php");

$userlogin = $_POST['login'];
$userpass = $_POST['password'];
$err = false;

if($userlogin == "" && $userpass == "") {
    $_SESSION["errMes"] = 'Заполните Форму!';
    $err = true;
    header("Location: ../index.php");
} else if($userlogin == ""){
    $_SESSION["errMes"] = 'Укажите Ваш Логин!';
    $err = true;
    header("Location: ../index.php");
} else if ($userpass == "") {
    $_SESSION["errMes"] = 'Укажите Ваш Пароль!';
    $err = true;
    header("Location: ../index.php");
}

if(!$err) {
    $sel_login = mysqli_query($link, "SELECT `login` FROM `users` WHERE `login` = '$userlogin'");
    $sel_pass = mysqli_query($link, "SELECT `pass` FROM `users` WHERE `pass` = '$userpass'");
    $post2 = mysqli_fetch_assoc($sel_login);
    $post3 = mysqli_fetch_assoc($sel_pass);

    if(empty($post2)) {
        $_SESSION["errMes"] = 'Такого Пользователя не существует!';
        $err = true;
        header("Location: ../index.php");
    } else if(empty($post3)) {
        $_SESSION["errMes"] = 'Введен неправильно пароль';
        $err = true;
        header("Location: ../index.php");
    }
    if(!$err) {
        $sel_all = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$userlogin' AND `pass` = '$userpass' ORDER BY `login` = '$userlogin'");
        $post4 = mysqli_fetch_array($sel_all);

        $_SESSION['iduser'] = $post4["id"];
        $idus = $post4["id"];
        if($post4) {
            if($post4["usgroup"] == "1") {
                setcookie("id", $idus, time()+23760, "/");
                header("Location: ../../dashboard/admin.php");
            } elseif($post4["usgroup"] == "2") {
                setcookie("id", $idus, time()+23760, "/");
                header("Location: ../../userpage/index.php");
            } 
        }
    }
    
}

?>