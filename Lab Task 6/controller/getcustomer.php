<?php

include "../model/db_conn.php";

$sql = "SELECT c_name, c_uname, c_nid,c_password,c_email
FROM customer WHERE c_uname = ?";

$stmt = $con->prepare($sql);
$stmt->bind_param('s',$_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cname,$cuname,$cnid,$cpass,$cemail);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th> Name</th>";
echo "<td> .cname. </td>";
echo "<th> User name</th>";
echo "<td> .cuname. </td>";
echo "<th> NID</th>";
echo "<td> .cnid. </td>";
echo "<th> Password</th>";
echo "<td> .cpass. </td>";
echo "<th> Email</th>";
echo "<td> .cnemail. </td>";
echo "</tr>";
echo "</table>";
?>