<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>hlep</title>
	<link rel="stylesheet" type="text/css" href="stlz.css">
</head>
<body>
    <h1>ТЫ ВООБЩЕ КТО?!></h1>
</body>
</html>

<?php 
} else {
    header("Location: index.php");
    exit();
}
?>