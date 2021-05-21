<html>
<head>
  <link rel='stylesheet' type='text/css' href='stlz.css'>
  <title>CATS</title>
</head>

<body class="mainStl">
  <div class="headr">Caaaatssss</div><br>
  <table id='tableMainPage' align=center border="1">
  <!--<table width=70% text-align=center background-color=#ff3bf8 border=1 align=center>-->
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Start typing a name.." title="Search for names"><br>
    <tr class='header'>
      <th>Name</th>
      <th>Breed</th>
      <th>Description</th>
      <th>Color</th>
      <th>Username</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "root", "cats");
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "select cats.name as name, breeds.name as breed, cats.description as description, colors.name as color, users.user_name as user from cats
        join breeds on cats.breed_id = breeds.id
        join colors on cats.color_id = colors.id
        join users on cats.user_id = users.id;";

      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["name"] . "</td><td>". $row["breed"]. "</td><td>". $row["description"]. "</td><td>". $row["color"]. "</td><td>". $row["user"]. "</td></tr>";
        }
      } else { 
        echo "0 results"; 
      }

      $conn->close();
    ?>
  </table>
    <!-- В этом js идёт фильтрация-->
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableMainPage");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>

  <br><br><button onclick="location.href = 'breeds.php';" id=breedPageBtn class='btn'>Explore breeds</button>
  <br><br><button onclick="location.href = 'home.php';" id=homeBtn class='btn'>Back home</button>
</body>
</html>