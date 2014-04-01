<!DOCTYPE html>
<html>

	<head>
		<title>NALO COLLECTOR MENU</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<link rel="stylesheet" href="../style.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="../js/login.js"></script>
	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header' style="background: #0171ba; text-align: center; padding: 5px;padding-left: 30px;">
				<!-- <a href="../index.html" data-icon="gear" class="ui-btn-left">LOGOUT</a> -->
				<span><img src="../icon/rev_col.png"/> Revenue Collector</span>

			</div>

			<div id='content' data-role='content'>
				<table width="100%" height="90%" border="0" class="tbl_menu">
					<tr align="center" valign="bottom" height="50%">
						<td width="50%"><a href="clients.php"><img src="../icon/clients.png" class="icons"/><br/>Client List</a></td>
						<td width="50%"><a href="transaction.php"><img src="../icon/payments.png" class="icons"/><br/>Payments</a></td>
					</tr>
					<tr align="center" valign="bottom">
						<td width="50%"><img src="../icon/report.png" class="icons"/><br/>Report to HQ</td>
						<td width="50%"><img src="../icon/search.png" class="icons"/><br/>Client Search</td>
					</tr>
					<tr align="center" valign="bottom">
						<td width="50%"><img src="../icon/set.png" class="icons"/><br/>Settings</td>
						<td width="50%"><a href="../index.php"><img src="../icon/logout.png" class="icons"/><br/>Log Out</a></td>
					</tr>
				</table>
			</div><!--end of content-->
		</div><!--end of page-->

	</body>
</html>