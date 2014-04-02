<!DOCTYPE html>
<html>

	<head>
		<title>NALO COLLECTOR MENU</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<link rel="stylesheet" href="style.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>

		<!-- <link rel="stylesheet" href="../jquery.mobile-1.2.0.min.css" />
		<script src="../jquery-1.8.2.min.js"></script>
		<script src="../jquery.mobile-1.2.0.min.js"></script> -->
	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header' style="background: #0171ba; text-align: center; padding: 5px;padding-left: 30px;">
				<!-- <a href="../index.html" data-icon="gear" class="ui-btn-left">LOGOUT</a> -->
				<span><img src="icon/rev_col.png"/> Revenue Collector</span>

			</div>

			<div id='content' data-role='content'>
				<table width="100%" height="90%" border="0" class="tbl_menu" class="menutable">
					<tr align="center" valign="bottom" height="50%">
						<td width="30%"><a href="clients.php" rel="external"><img src="icon/people.png" class="icons"/>
						<br/>
						Clients List</a></td>
						<td width="30%"></td>
						<td width="30%"><a href="transaction.php" rel="external"><img src="icon/file.png" class="icons"/>
						<br/>
						Payments</a></td>
					</tr>
					<tr align="center" valign="bottom">
						<td width="30%"><a href="addclients.php" rel="external"><img src="icon/pad.png" class="icons"/>
						<br/>
						Add Client</a></td>
						<td width="30%"></td>
						<td width="30%"><a href="search.php"><img src="icon/search.png" class="icons"/>
						<br/>
						Search</a></td>
					</tr>
					<tr align="center" valign="bottom">
						<td width="30%"><a href="settings.php"><img src="icon/settings.png" class="icons"/>
						<br/>
						Settings</a></td>
						<td width="30%"></td>
						<td width="30%"><a href="login.php" rel="external"><img src="icon/off.png" class="icons"/>
						<br/>
						Log Out</a></td>
					</tr>
				</table>
				<div class="loading">
					<div class="circle"></div>
					<div class="circle1"></div>
				</div>
			</div><!--end of content-->
		</div><!--end of page-->

	</body>
</html>