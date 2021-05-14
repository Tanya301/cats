<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="stlz.css">
</head>

<body class=mainStlAuth>
   <table class=tabl>
      <td>
        <img class="mw-100" src="img\loginLeft.jpeg" width="300">
      </td>
      <td>
        <form class=auth action="login.php" method="post">
         	<?php if (isset($_GET['error'])) { ?>
         		<p class="error"><?php echo $_GET['error']; ?></p>
         	<?php } ?>
          <div class="headr">Login</div><br>
         	<label>Username</label>
         	<input type="text" name="uname" placeholder="Имя пользователя"><br>

         	<label>Пароль</label>
         	<input type="password" name="password" placeholder="Пароль"><br>

         	<button class=btn type="submit">Login</button><br><br>
          <a href="signup.php" class="ca">Create new account</a>
        </form>
      </td>
      <td>
        <img class="mw-100" src="img\loginRight.jpeg" width="200">
      </td>
</body>
</html>