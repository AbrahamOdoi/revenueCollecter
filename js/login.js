$(document).ready(function() {

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

	$("#btn_newclient").click(function() {
		alert('sd');
		$('#info').html('Please wait whiles details are being saved');
		$("#btn_newclient").prop('disabled','disabled' );
		$("#btn_newclient").css('background','gray' );
		// var clientname = $('#clientFullName').val();
		// var clientid = $('#clientid').val();
		// $.post('newClient.php', {
			// name : clientname,
			// id : clientid
		// }, function(data) {
			// if (data == 'yes') {
				// location.reload();
			// } else {
				// alert(data);
			// };
		// })
	});

	$("#btnnewtrans").click(function() {
		var accnum = $('#accnum').val();
		var accname = $('#accname').val();
		var amount = $('#amount').val();
		$.post('new_trans.php', {
			accnum : accnum,
			accname : accname,
			amount : amount
		}, function(data) {
			showSuccess(data);
			// alert(data);
		})
	});

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
	}

});
