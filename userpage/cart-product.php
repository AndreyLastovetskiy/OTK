<?php
session_start();
require_once("../db/db.php");
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}
$id_prod = $_GET['id'];


$selected_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `id`='$id_prod'");
$selected_prod = mysqli_fetch_assoc($selected_prod);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/userpage/reset.css">
    <link rel="stylesheet" href="../styles/userpage/style.css">
    <link rel="stylesheet" href="../styles/userpage/media.css">
    <title>Главная</title>
</head>
<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 link-logo">
                    <a href="admin.php"><img src="../images/userpage/logo-sm.svg"> Lorem</a>
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
                            <a href="index.php">Главная</a>
                            <a href="product.php">Товары</a>
                            <a href="logout.php">Выйти</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cart-prod">
                                <div class="cart-img">
                                    <img src="<?php print_r("../" . $selected_prod['pathimg']); ?>">
                                </div>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart">
                                <div class="cart-info">
                                    <h2><?php echo $selected_prod['title']; ?></h2>
                                    <p>Количество: <?php echo $selected_prod['quantity']; ?></p>
                                    <p>Цена: <?php echo $selected_prod['price']; ?>руб</p>
                                </div>
                                <form action="vendor/send-product.php" method="post" class="send-form">
                                    <input type="hidden" name="id_prod" value="<?php echo $selected_prod['id']; ?>">
                                    <label>Укажите Количество</label>
                                    <input type="text" name="quant">
                                    <input type="submit" class="btn btn-primary" value="Заказать">
                                </form>
                                <div class="errMes">
                                    <?php print_r($_SESSION["errOrder"]); ?>
                                </div>
                            </div>
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