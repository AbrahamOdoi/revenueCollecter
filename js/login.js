$(document).ready(function() {

	$('.circle, .circle1').removeClass('stop');
	$('.triggerFull').click(function() {
		$('.circle, .circle1').toggleClass('stop');
	});

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
		$('#info').html('Please wait whiles details are being saved');
		$("#btn_newclient").prop('disabled', 'disabled');
		$(".loading").show();
		var clientname = $('#clientFullName').val();
		var clientnum = $('#MobileNumber').val();
		var clientid = $('#clientid').val();
		$.post('newClient.php', {
			name : clientname,
			number : clientnum,
			id : clientid
		}, function(data) {
			$("#btn_newclient").prop('disabled', 'disabled');
			$(".loading").hide();
			$('#info').html(data);
		})
		return false
	});

	$("#btnnewtrans").click(function() {
		var accnum = $('#accnum').val();
		var amount = $('#amount').val();
		if (accnum == '') {
			$("#acerror").html('field required');
			$('#accnum').css('background', 'orange');
		} else if (amount == '') {
			$("#acerror").html('field required');
			$('#amount').css('background', 'orange');
		} else {
			$('#info').html('Please wait whiles payment is recorded');
			$("#btnnewtrans").prop('disabled', 'disabled');
			$(".loading").show();
			$.post('new_trans.php', {
				accnum : accnum,
				amount : amount
			}, function(data) {
				alert(data);
			})
			return false;
		}
	});

	$("#btnenter").click(function() {
		$(".loading").show();
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
