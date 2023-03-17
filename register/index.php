<!DOCTYPE html>
<html>
<head>
	<title>АВТОРИЗАЦИЯ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/register/style.css">
</head>
<body>
	<div class="container">
		<div class="login-content">
			<form action="vendor/registr.php" method="post">
				<img src="../images/register/avatar.svg">
				<h2 class="title">РЕГИСТРАЦИЯ</h2>
           		<div class="input-div pass">
           		   	<div class="i"> 
						<i class="fa-regular fa-user"></i>
           		   	</div>
           		   	<div class="div">
           		    	<h5>Логин</h5>
           		    	<input type="text" class="input" name="login">
            	   	</div>
            	</div>
				<div class="input-div pass">
           		   	<div class="i"> 
						<i class="fa-solid fa-key"></i>
           		   	</div>
           		   	<div class="div">
           		    	<h5>Пароль</h5>
           		    	<input type="password" class="input" name="password">
            	   	</div>
            	</div>
            	<input type="submit" class="btn" value="Зарегестрироваться">
            </form>
        </div>
    </div>
	<img src="../images/register/foo1.svg" class="img">
	<img src="../images/register/foo2.svg" class="img">

    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../scripts/register/main.js"></script>
</body>
</html>