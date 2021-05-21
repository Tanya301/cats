<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stlz.css">
</head>

<body class=mainStl>
  <div class="headr">Login</div>
  <div class=mainStlAuth>
   <table class=tabl>
      <td width=30%>
        <img class="mw-100" src="img\loginLeft.jpeg" width=100%>
      </td>
      <td width=40%>
        <form action="login.php" method="post">
         	<?php if (isset($_GET['error'])) { ?>
         		<p class="error"><?php echo $_GET['error']; ?></p>
         	<?php } ?>
         	<label>Username</label>
         	<input type="text" name="uname" placeholder="Username"><br>

         	<label>Password</label>
         	<input type="password" name="password" placeholder="Password"><br>

         	<button class=btn type="submit">Login</button><br><br>
          <a href="signup.php">Create new account</a>
        </form>
      </td>
      <td width=30%>
        <img class="mw-100" src="img\loginRight.jpeg" width=100%>
      </td>
    </table>
  </div>
</body>
</html>