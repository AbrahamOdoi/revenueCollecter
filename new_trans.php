<?php
date_default_timezone_set('UTC');
$now = date('Y-m-d G:i:s');

$client = $_POST['accname'];
$Number = $_POST['accnum'];
$Amount = $_POST['amount'];

$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
//$dbcon = mysql_connect("localhost", "root", "");
mysql_select_db("db_heart_foundation");

$sql = "SELECT * FROM tbl_clients where clientName='" . $client . "' AND accNumber='" . $Number . "'";
$result = mysql_query($sql, $dbcon);
$num = mysql_num_rows($result);
if ($num > 0) {
	$query = "insert into tbl_transact (AccountNum,Amount,TransDate)values('$Number','$Amount','$now')";
	$result1 = mysql_query($query, $dbcon);
	if ($result1) {
		echo "Payment Successful";
	} else {
		echo "Payment unsuccessfull";
	}
} else {
	echo "client could not be found";
}
?>