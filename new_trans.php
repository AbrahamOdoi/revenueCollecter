<?php
date_default_timezone_set('UTC');
$now = date('Y-m-d G:i:s');

$Number = $_POST['accnum'];
$Amount = $_POST['amount'];

$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
//$dbcon = mysql_connect("localhost", "root", "");
mysql_select_db("db_heart_foundation");

$sql = "SELECT * FROM tbl_clients where accNumber='" . $Number . "'";
$result = mysql_query($sql, $dbcon);
$num = mysql_num_rows($result);
if ($num > 0) {
	$query = "insert into tbl_transact (AccountNum,Amount,TransDate)values('$Number','$Amount','$now')";
	$result1 = mysql_query($query, $dbcon);
	if ($result1) {
		echo "Payment Successful";
		while ($row = mysql_fetch_assoc($result)) {
			$clientNum = $row['mobile'];
			$clientName = $row['clientName'];
		}

		$senderID = 'Revenue Col';
		$message = "Hello, " . $clientName . " your account has just been credited with GHc" . $Amount;
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
		echo "Payment unsuccessfull";
	}
} else {
	echo "client could not be found";
}
?>