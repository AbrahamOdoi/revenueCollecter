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
			<div id='header' data-role='header'>
				<a href="menuPage.php" data-icon="gear" class="ui-btn-left">LOGOUT</a>
				<h1>COLLECTOR</h1>
			</div>

			<div id='content' data-role='content'>
				<?php
				date_default_timezone_set('UTC');
				$now = date('Y-m-d G:i:s');
				$clientName = $_POST['txtClientname'];
				$accNumber = $_POST['txtaccNum'];

				$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
				//$dbcon = mysql_connect("localhost", "root", "");
				mysql_select_db("db_heart_foundation");

				$query = "insert into tbl_clients (clientName,accNumber,RegDate)values('$clientName','$accNumber','$now')";
				$result = mysql_query($query, $dbcon);
				if ($result) {header('Location:menuPage.php');
				} else {
					echo "client could not be created";
				}
				?>
			</div>
	</body>
</html>