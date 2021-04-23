<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>CATS</title>
</head>

<body class='mainStl'>
  <button onclick="location.href = 'index.php';" id=mainPageBtn class='btn'>Back home</button><br><br>
  <?php
    session_start(); 
    include "dbcon.php";
    $result = mysql_query('select * from cats');
    $row = mysql_fetch_row($result);
    echo $row[0];
  ?>
</body>
</html>
