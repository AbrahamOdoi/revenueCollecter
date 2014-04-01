<?php
date_default_timezone_set('UTC');
$now = date('Y-m-d G:i:s');

$clientName = $_POST['name'];
$accNumber = $_POST['id'];

$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
//$dbcon = mysql_connect("localhost", "root", "");
mysql_select_db("db_heart_foundation");

$query = "insert into tbl_clients (clientName,accNumber,RegDate)values('$clientName','$accNumber','$now')";
$result = mysql_query($query, $dbcon);
if ($result) {
	echo "yes";
} else {
	echo "client could not be created";
}
?>
