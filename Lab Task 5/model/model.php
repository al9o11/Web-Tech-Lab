<?php
require_once 'db_connect.php';

function addPr($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (name,b_price,s_price,profit)
    VALUES (:name, :b_price, :s_price, :profit)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
          ':b_price' => $data['b_price'],
          ':s_price' => $data['s_price'],
          ':profit' => $data['s_price']-$data['b_price']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
?>