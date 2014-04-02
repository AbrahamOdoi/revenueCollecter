<!DOCTYPE html>
<html>
	<head>
		<title>NALO COLLECTOR</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" /> -->
		<!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> -->
		<!-- <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script> -->

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<link rel="stylesheet" href="style.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header' style="background: #0171ba; text-align: left; padding: 5px;padding-left: 30px;">
				<span><img src="img/login.png"/> LOGIN</span>
			</div>

			<div id='content' data-role='content'>
				<form id="myForm" method="post" action="http://216.224.161.207/revenueCollecter/loginVal.php" data-transition="pop" data-direction="reverse">
				<!-- <form id="myForm" method="post" action="php/loginVal.php" data-transition="pop" data-direction="reverse"> -->

				<fieldset>
					<div id='frmlogin' data-role="field-contain">

						<label for='txtUsername' id="usernameDiv" data-role="field-contain">UserID</label>
						<input type="text" name="txtUsername" placeholder="username" id="txtUsername"/>

						<label for="txtPassword" id="passwordDiv" data-role="field-contain">Password</label>
						<input type="password" name="txtPassword" placeholder="password" id="txtPassword"/>

						<input type="submit" value="LOGIN" data-corners="false" data-theme="d" id="btnenter"/>
						<div class="loading">
							<div class="circle"></div>
							<div class="circle1"></div>
						</div>
					</div>
				</fieldset>
				</form>

			</div>

		</div>

	</body>
</html>

