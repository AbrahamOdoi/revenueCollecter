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
				<h1>PAYMENT</h1>
			</div>

			<div id='content' data-role='content'>
				<div id="set1" data-role="collapsible" data-content-theme="b" data-collapsed="false">
					<h1>New Transaction</h1>
					<form >
						<label for="accnum">Account Number</label>
						<input type="text" name="accnum"  placeholder="Acc Number" id="accnum" required="required"/>
						<label for="amount">Amount</label>
						<input type="text" name="amount"  placeholder="AMOUNT" id="amount"/>
						<input type="submit"  data-corners="false" value="Process Payment" id="btnnewtrans" required="required"/>
							<div class="error" id="acerror"></div>
						<div class="loading">
							<div class="circle"></div>
							<div class="circle1"></div>
						</div>
						<div id="info"></div>
					</form>
				</div>

			</div><!--end of content-->
	</body>
</html>