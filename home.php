<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>HI</title>
</head>

<body class='mainStl'>
  <div class="headr">Welcome :)</div><br>
  <table class='tabl'>
    <td align="center">
      <img class="mw-100" src="img\csMir.png" width="300" height="400">
    </td>
    <td align="center">
      <button onclick="location.href = 'about.php';" id=aboutBtn class='btn'>About</button><br><br>
      <button onclick="location.href = 'mainPage.php';" id=mainPageBtn class='btn'>To the main page</button><br><br>
      <button onclick="location.href = 'logout.php';" id=logoutBtn class='btn'>Log out</button>
    </td>
    <td align="center">
      <img class="mw-100" src="img\cs.png" width="300" height="400">
    </td>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>