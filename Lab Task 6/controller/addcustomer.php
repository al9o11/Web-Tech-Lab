<?php
require_once '../model/model.php';

    $data['name'] = $_POST['name'];
    $data['uname'] = $_POST['uname'];
    $data['nid'] = $_POST['nid'];
    $data['pass'] = $_POST['pass'];
    $data['email'] = $_POST['email'];

  if (addcmr($data)) {
  	echo "<script type=\"text/javascript\">
    alert('Account created Successfully'); window.location = '../view/index.php';
    </script>";
  }
?>