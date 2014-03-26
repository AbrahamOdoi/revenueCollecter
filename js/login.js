$(function() {
	$('#myForm').submit(function() {
		alert(yes);
		if (validateUsername() && validateUserPassword()) {
			});
		}

		function validateUsername() {
			if ($('#txtUsername').val().length == 0) {
				showError('Username cannot be empty');
				return false;
			} else {
				return true;
			}
		};

		function validateUserPassword() {
			if ($('#txtPassword').val().length == 0) {
				showError('password cannot be empty');
				return false;
			} else {
				return true;
			}
		};

		function showSuccess(message) {
			$('<div class="ui-loader ui-overlay-shadow ui_body_success ui-corner-all"><h1>' + message + '</h1></div>').css({
				"display" : "block",
				"opacity" : 0.96,
				"background" : "gray",
				"border" : "1px solid white",
				"font-size" : "12px",
				left : $(window).scrollLeft() + 10,
				top : $(window).scrollTop() + 100
			}).appendTo($.mobile.pageContainer).delay(2000).fadeOut(400, function() {
				$(this).remove();
			});
		};
		function showError(message) {
			$('<div class="ui-loader ui-overlay-shadow ui_body_error ui-corner-all"><h1>' + message + '</h1></div>').css({
				"display" : "block",
				"opacity" : 0.96,
				"background" : "gray",
				"border" : "1px solid white",
				"width" : "auto",
				"font-size" : "12px",
				left : $(window).scrollLeft() + 10,
				top : $(window).scrollTop() + 100
			}).appendTo($.mobile.pageContainer).delay(2000).fadeOut(400, function() {
				$(this).remove();
			});

		};
		return false;

	});
});

