<?php
session_start();
if(!isset($_SESSION["username"])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
  <div class="hd1">
    <?php
    include 'header2.php';
    ?>
  </div>
</body>
</html>