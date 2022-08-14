
<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/home.css">
</head>
<body>
  <div class="hd1">
    <?php
    include 'header.php';
    ?>
  </div>
  <h1 class="moto">
    Fly Boundless!!
  </h1>
  <div class="sr" >
    <form class="sBar">
      <input type="text" placeholder="Search" name="t">
    </form>
  </div>
</body>
</html>