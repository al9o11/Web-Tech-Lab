
<?php
  if(isset($_POST['submit'])){
    if($_POST['name']!="" && $_POST['uname']!="" && $_POST['nid']!="" && $_POST['pass']!="" && $_POST['repass']!="" && $_POST['email']!=""){
      include "../controller/addcustomer.php";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/jquery.js"></script>
  <script src="js/validation.js"></script>
  <link rel="stylesheet" href="css/signUp.css">
</head>
<body>
    <div class="frm1">
      <h1 style="text-align: center;">Register</h1>
      <form name="signup" onSubmit="return validation();" method="POST">
        <p class="lbl">
          Name
        </p>
        <input id="nm" class = "fld" type="text" onblur="checkName()" onkeyup="checkName()" name="name" placeholder="Enter your name"><br>
        <p id="nameerr" style="color: red;"></p>
        <p class="lbl">
          Username
        </p>
        <input id="unm" class = "fld" type="text" onblur="checkuname()" onkeyup="checkuname()" name="uname" placeholder="Enter your username"><br>
        <p id="unameerr" style="color: red;"></p>
        <p class="lbl">
          Email
        </p>
        <input id="em" class = "fld" type="text" onblur="checkemail()" onkeyup="checkemail()" name="email" placeholder="Enter your email"><br>
        <p id="emailerr" style="color: red;"></p>
        <p class="lbl">
          NID
        </p>
        <input id="ni" class = "fld" type="number"  onblur="checknid()" onkeyup="checknid()" name="nid" placeholder="Enter your NID"><br>
        <p id="niderr" style="color: red;"></p>
        <p class="lbl">
          Password
        </p>
        <input id="ps"class = "fld" type="password" name="pass" onblur="checkpass()" onkeyup="checkpass()"  placeholder="Enter your password"><br>
        <p id="passerr" style="color: red;"></p>
        <p class="lbl">
          Confirm Password
        </p>
        <input id="rps" class = "fld" type="password" name="repass" placeholder="re-enter password"><br>
        <p id="repasserr" style="color: red;"></p>
        <input class="btn1" type="submit" name="submit" value="Create Account"> <br>
      </form>
    </div>
</body>
</html>