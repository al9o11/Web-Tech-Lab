<?php

include "../model/db_conn2.php";

$username = $_POST['uname'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password); 

$sql = "select *from customer where c_uname = '$username' and c_password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){  
  session_start();
  $_SESSION['username'] = $_POST['uname'];

  echo "<script type=\"text/javascript\">
  alert('LogIn Successfully'); window.location = '../view/dashboard.php';
  </script>";  
}
else{
  echo "<script type=\"text/javascript\">
  alert('Username or Password invalid'); window.location = '../view/signIn.php';
  </script>";  
}

?>