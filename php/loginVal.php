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
			<div id='header' data-role='header' data-theme="e">
				<a href="../index.html" data-icon="gear" class="ui-btn-left">BACK</a>
				<h1>COLLECTOR</h1>
			</div>

			<div id='content' data-role='content'>
				<?php
				$username = $_POST['txtUsername'];
				$password = $_POST['txtPassword'];

				// $dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
				// //$dbcon=mysql_connect("localhost","root","");
				// mysql_select_db("db_heart_foundation");
				//
				// $query = "select * from tbl_graphic_user where userID='" . $username . "' and userPass='" . $password . "'";
				// $result = mysql_query($query, $dbcon);
				// $num = mysql_num_rows($result);
				// if ($num < 1) {
				// echo "Unknown credentials" . mysql_error();
				// } else {
				// echo "yes";
				header('Location:menuPage.php');
				// }
				?>
			</div>
	</body>
</html>