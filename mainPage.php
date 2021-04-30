<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>CATS</title>
</head>

<body class='mainStl'>
  <button onclick="location.href = 'index.php';" id=mainPageBtn class='btn'>Back home</button><br><br>

  <table class="tabl" border=1>
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
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["breed_id"]. "</td> <td>". $row["description"]. "</td><td>". $row["color_id"]. "</td><td>". $row["user_id"]. "</td></tr>";
    }
      echo "</table>";
    } 
    else { 
      echo "0 results"; 
    }

    $conn->close();
    ?>
  </table>
  
</body>
</html>