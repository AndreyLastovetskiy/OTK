<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>АВТОРИЗАЦИЯ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/login/style.css">
</head>
<body>
	<div class="container">
		<div class="login-content">
			<form action="vendor/accept-phone.php" method="post" id="logform">
				<img src="../images/login/avatar.svg">
				<h2 class="title">АВТОРИЗАЦИЯ</h2>
           		<div class="input-div pass">
           		   <div class="i"> 
					  	<i class="fa-regular fa-user"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Индивидуальный код</h5>
           		    	<input type="text" class="input" name="login" id="login" target='_blank'>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
					  	<i class="fa-solid fa-key"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Номер телефона</h5>
           		    	<input type="password" class="input" name="password" id="password" target='_blank'>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Войти">
            </form>
			<div id="errorMes">
				<?php
					if (($_SESSION["errMes"] ?? '') === ''); else {
						print_r($_SESSION["errMes"]);
					}
				?>
			</div>
            <a href="../register/index.php">Вы не зарагистрированы? Зарегистрироваться</a>
        </div>
    </div>
	<img src="../images/login/foo1.svg" class="img">
	<img src="../images/login/foo2.svg" class="img">

    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../scripts/login/main.js"></script>
</body>
</html>

