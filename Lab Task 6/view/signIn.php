
<?php
if(isset($_POST['submit'])){
    if($_POST['uname']!="" && $_POST['pass']!=""){
      include "../controller/customerlog.php";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title></title>
  <script src="js/jquery.js"></script>
  <script src="js/validation2.js"></script>
  <link rel="stylesheet" href="css/signIn.css">
</head>
<body>
    <div class="lgblk">
      <h1 style="text-align: center;">SIGN IN</h1>
      <div>
        <form name="signin"  onSubmit="return validation();" method="POST">
          <p class="lbl">
            Username
          </p>
          <input id="unm" class = "fld" type="text" onblur="checkuname()" onkeyup="checkuname()" name="uname" placeholder="Type your username"><br>
          <p id="unameerr" style="color: red;"></p>
          <p class="lbl">
            Password
          </p>
          <input id="ps" class = "fld"  type="password" onblur="checkpass()" onkeyup="checkpass()" name="pass" placeholder="Type your password"><br>
          <p id="passerr" style="color: red;"></p>
          <input class="btn1" type="submit" name="submit" value="Sign In"> <br>
        </form>
        <p style="margin-left: 80px;" class="lbl"> 
          Don't have an account?
        </p>
        <p>
          <a href="signUp.php"><button class="btn1">Create account</button></a>
        </p>
      </div> 
    </div>
</body>
</html>