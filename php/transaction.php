<html>
	
	<head>
		<title>NALO COLLECTOR</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header'  data-theme="e">
				<a href="menuPage.php" data-icon="gear" class="ui-btn-left">BACK</a>
				<h1>COLLECTOR</h1>
			</div>

			<div id='content' data-role='content'>
				<?php
				date_default_timezone_set('UTC');
				$now = date('Y-m-d G:i:s');

				$client = $_POST['txtClient'];
				$Number = $_POST['txtNum'];
				$Amount = $_POST['txtAmount'];

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
						header('Location:menuPage.php');
					} else {
						echo "Transaction unsuccessfull";
					}
				} else {
					echo "client could not be found";
				}
				?>
			</div>
	</body>
</html>