<?php
date_default_timezone_set('UTC');
$now = date('Y-m-d G:i:s');

$clientName = $_POST['name'];
$clientNum = $_POST['number'];
$accNumber = $_POST['id'];

if (substr($clientNum, 0, 1) == '0') {
	$num = substr($clientNum, 1);
	$clientNum = '233' . $num;
}

// echo $clientNum;
$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
//$dbcon = mysql_connect("localhost", "root", "");
mysql_select_db("db_heart_foundation");

$query = "insert into tbl_clients (clientName,mobile,accNumber,RegDate)values('$clientName','$clientNum','$accNumber','$now')";
$result = mysql_query($query, $dbcon);
if ($result) {
	echo "New client successful created";
	
	$senderID='Revenue Col';
	$message = "Hello, ".$clientName." your account was created successfully and your acnt number is ".$accNumber;
	$url = "http://121.241.242.114:8080/bulksms/bulksms?username=na1-debbie&password=nalosol&type=0&dlr=1";
	$myvars = 'destination=' . $clientNum . '&source=' . $senderID . '&message=' . $message;

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
} else {
	echo "client could not be created" . mysql_error();
}
?>
