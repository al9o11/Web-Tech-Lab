
<?php
session_start();
$su = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/validation.js"></script>
  <link rel="stylesheet" href="css/signUp.css">
</head>
<body>
    <div>
      <form onsubmit="showCustomer('$su')">
      <input type="submit" name="submit" value="Show profile">
    </form>

    <p id="info"></p>

    <button><a href="dashboard.php">Back</a></button>
    
  </div>

  <script>
      function showCustomer(str){
        if(str == ""){
          document.getElementById('info').innerHTML="";
          return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload=function(){
          document.getElementById("info").innerHTML=this.responseText;
        }
        xhttp.open("GET","../controller/getcustomer.php?q="+str);
        xhttp.send();
      }
    </script>
</body>
</html>