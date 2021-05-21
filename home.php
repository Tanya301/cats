<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>Home</title>
</head>

<body class='mainStl'>
  <div class="headr">Welcome :)</div><br>
  <table class='tabl'>
    <td align="center" width=30%>
      <img class="mw-100" src="img\csMir.png" width=100%>
    </td>
    <td align="center" width=40%>
      <button onclick="location.href = 'about.php';" id=aboutBtn class='btn'>About</button><br><br>
      <button onclick="location.href = 'mainPage.php';" id=mainPageBtn class='btn'>To the main page</button><br><br>
      <button onclick="location.href = 'logout.php';" id=logoutBtn class='btn'>Logout</button><br><br>
    </td>
    <td align="center" width=30%>
      <img class="mw-100" src="img\cs.png" width=100%>
    </td>
  </table>
</body>
</html>

<?php 
} else {
     header("Location: index.php");
     exit();
}
 ?>