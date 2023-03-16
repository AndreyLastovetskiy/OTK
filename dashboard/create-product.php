<?php
session_start();
require_once("../db/db.php");

if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/dashboard/reset.css">
    <link rel="stylesheet" href="../styles/dashboard/style.css">
    <link rel="stylesheet" href="../styles/dashboard/media.css">
    <title>Главная</title>
</head>
<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 link-logo">
                    <a href="admin.php"><img src="../images/dashboard/logo-sm.svg.svg"> Lorem</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid main-content">
            <div class="row main-row">
                <div class="col-md-2 menu-wrapper">
                    <div class="left-menu">
                        <div class="menu">
                            <p>Menu</p>
                        </div>
                        <div class="main-page">
                            <a href="admin.php">Главная</a>
                            <a href="create-product.php">Добавить Товар</a>
                            <a href="product.php">Товары</a>
                            <a href="logout.php">Выйти</a>
                        </div>
                    </div>
                </div>
                <div class="col table">
                    <div class="my-info">
                        <div class="my-info-wrapper">
                            <div class="adoc-title">
                                <p>Добавить Товар</p>
                            </div>
                            <form action="vendor/create-product.php" method="post" enctype="multipart/form-data">
                                <div class="text-field text-field_floating-2">
                                    <input class="text-field__input" type="text" id="title" name="title" placeholder="test">
                                    <label class="text-field__label" for="title">Название</label>
                                </div>
                                <div class="text-field text-field_floating-2">
                                    <input type="file" id="phone" name="imageproduct">
                                    <label for="phone">Изображение</label>
                                </div>
                                <div class="text-field text-field_floating-2">
                                    <input class="text-field__input" type="text" id="quantity" name="quantity" placeholder="test">
                                    <label class="text-field__label" for="quantity">Количество</label>
                                </div>
                                <div class="text-field text-field_floating-2">
                                    <input class="text-field__input" type="text" id="price" name="price" placeholder="test">
                                    <label class="text-field__label" for="price">Цена</label>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Сохранить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>