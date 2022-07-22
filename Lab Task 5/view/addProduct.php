
<html>
  <head>
    <style>
      p{
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
  <form method="POST">
  <p>Name</p>
  <input type="text"  class="st" id="name" name="name"><br>
  <p>Buying Price</p>
  <input type="number" class="st" id="b_price" name="b_price"><br>
  <p>Selling Price</p>
  <input type="number" class="st" id="s_price" name="s_price"><br>
  <input type="submit" name="Save">
</form>
  </body>
</html>
<?php
include "../control/addPro.php";
if(isset($_POST["submit"])){
  if($_POST['name']!="" && $_POST['b_price']!="" && $_POST['s_price']!=""){
    include "../control/addPro.php";
  }
}
?>