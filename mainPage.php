<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>CATS</title>
</head>

<body class="mainStl">
  <div class="headr">Caaaatssss</div><br>

  <table class='tableMainPage' align=center border="1">
  <!--<table width=70% text-align=center background-color=#ff3bf8 border=1 align=center>-->
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>breed_id</th>
      <th>description</th>
      <th>color_id</th>
      <th>user_id</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "root", "cats");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM cats";

      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["breed_id"]. "</td><td>". $row["description"]. "</td><td>". $row["color_id"]. "</td><td>". $row["user_id"]. "</td></tr>";
        }
      } else { 
        echo "0 results"; 
      }

      $conn->close();
    ?>
  </table>

  <br><br><button onclick="location.href = 'home.php';" id=homeBtn class='btn'>Back home</button>
</body>
</html>