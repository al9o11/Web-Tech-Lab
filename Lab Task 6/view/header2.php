
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
<ul>
  <li><a class="active" href="index.php">LogOut</a></li>
  <li><a class="active" href="profile.php"><?php  echo $_SESSION["username"]?></a></li>
  <li><a href="about.php">About</a></li>
</ul>
</body>
</html>