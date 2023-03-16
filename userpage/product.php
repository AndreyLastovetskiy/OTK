<?php
session_start();

if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login/index.php");
}
require_once("../db/db.php");

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
                    <a href="index.php"><img src="../images/dashboard/logo-sm.svg.svg"> Lorem</a>
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
                <?php
                    $sel_prod = mysqli_query($link, "SELECT * FROM `product`");
                    $sel_prod = mysqli_fetch_all($sel_prod);
                ?>
                <div class="col table">
                    <div class="row">
                        <?php 
                            foreach($sel_prod as $sp) {?>
                                <div class="col-md-3">
                                    <a href="cart-product.php?id=<?php echo $sp[0];?>" class="cart-wrapper">
                                        <img src="<?php print_r("../" . $sp[2]); ?>" alt="">
                                        <div class="info-prod">
                                            <p><?php echo $sp[1]; ?></p>
                                            <p>Количество: <?php echo $sp[3]; ?></p>
                                            <p>Цена: <?php echo $sp[4]; ?>руб</p>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>