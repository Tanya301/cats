<?php
  $conn = mysql_connect('localhost', 'root', '');
  mysql_select_db('cats');
  if (!$conn) {
    die('error connecting to db' . mysql_error());
  }

  echo 'Connected to db "cats" . <br>';
?>