<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="stlz.css">
</head>
<body class=mainStl>
  <div class="headr">Registration</div><br>
  <div class=mainStlAuth>
  <table class=tabl>
    <td width=30%>
      <img class="mw-100" src="img\signupLeft.jpeg" width=100%>
    </td>
    <td width=40%>
     <form action="signup-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

      <?php if (isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

      <label>Username</label>
      <?php if (isset($_GET['uname'])) { ?>
           <input type="text" 
                  name="uname" 
                  placeholder="Username"
                  value="<?php echo $_GET['uname']; ?>"><br>
      <?php } else { ?>
           <input type="text" 
                  name="uname" 
                  placeholder="Username"><br>
      <?php } ?>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

      <label>Repeat password</label>
      <input type="password" name="re_password" placeholder="Repeat password"><br>

     	<button class=btn type="submit">Sign up</button><br><br>
      <a href="index.php" class="ca">Already have an account?</a>
     </form>
   </td>
   <td width=30%>
    <img class="mw-100" src="img\signupRight.jpeg" width=100%>
   </td>
 </table>
</div>
</body>
</html>