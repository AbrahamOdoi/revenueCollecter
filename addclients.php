<html>

	<head>
		<title>NALO COLLECTOR</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<link rel="stylesheet" href="style.css" />
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

				<div id="set1" data-role="collapsible" data-content-theme="b" data-collapsed="false">
					<h3>NEW CLIENT DETAILS</h3>
					<div id='frmNewC' data-role="field-contain">
						<label for="txtClientname">Full Name</label>
						<input type="text" name="txtClientname" placeholder="Full Name" id="clientFullName"/>
						<label for="txtClientnum">Mobile Number</label>
						<input type="text" name="txtClientnum" placeholder="Mobile No." id="MobileNumber"/>
						<label for="txtaccNum">Account Number</label>
						<input type="text" name="txtaccNum" readonly="true" value="<?php echo "NRC".rand (100,999)?>" id="clientid"/>
						<input type="submit" value="SEND" id='btn_newclient' style="background: green; color: white;"/>
						<div id="info"></div>
					</div>
				</div>

			</div><!--end of content-->
	</body>
</html>