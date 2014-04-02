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
			<div id='header' data-role='header' style="background: #0171ba; text-align: center; padding: 5px;padding-left: 30px;">
				<a href="menuPage.php" data-icon="gear" class="ui-btn-left">BACK</a>
				<h1>Clients</h1>
			</div>

				<div id='content' data-role='content'>
				
				<div id="set" data-role="collapsible-set" data-content-theme="b">
					
					<div id="set1">
						<!-- <h3>ALL CLIENTS</h3> -->
						<p>
							<?php
							$dbcon = mysql_connect("localhost", "heart", "F0undAti0n#1");
							//$dbcon = mysql_connect("localhost", "root", "");
							mysql_select_db("db_heart_foundation");

							$sql = "SELECT * FROM tbl_clients order by RegDate DESC";
							$result = mysql_query($sql);
							if (!$result) {
								echo 'no' . mysql_error();
							}
							if (mysql_num_rows($result) > 0) {echo "<ul data-role='listview' data-inset='true' data-filter='true' id='wrpPending' style='color:blue;'>";

								while ($row = mysql_fetch_array($result)) {
									echo "<li id='pendingDetails'><font color='gray' size='3px'>Name</font>:  " . $row['clientName'] . "<br/><font color='gray' size='3px'>Acc Num:</font>  " . $row['accNumber'] . "<br/><font color='gray' size='3px'>Mobile Num:</font> " . $row['mobile'] . "  </li>";
								}
								echo "</ul>";
							} else {
								echo "<div class='pendingHeader' id='codeerror'>NO CLIENTS</div>";
							}
							?></p>
					</div>
					</div>
					

			</div><!--end of content-->
	</body>
</html>