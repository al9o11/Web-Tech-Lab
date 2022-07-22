<?php
require_once '../model/model.php';

    $data['name'] = $_POST['name'];
	  $data['b_price'] = $_POST['b_price'];
	  $data['s_price'] = $_POST['s_price'];

  if (addPr($data)) {
  	echo 'Successfully added!!';
  }
?>