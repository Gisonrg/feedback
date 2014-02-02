// check valid email address
$(document).ready(function() {
	$("#inputEmail").change(function() {
		var reEmail = /^(?:\w+\.?)*\w+@(?:\w+\.)+\w+$/;
		var email = $('#inputEmail').val();
		//wrong email input
		if (!reEmail.test(email)) {
			$("#msg").html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Oops!</strong> Please enter an valid email.</div>');
		} else {
			$("#msg").html('');
		}
	});


	$("#btn").click(function() {

		var email_address = $("#inputEmail").val();
		var content = $("#content").val();
		var type = $('input[name=option]:checked').val();
		$.ajax({
			type: "POST",
			url: 'feedback_process.php',
			dataType: "json",
			data: {
				"action":1,
				"email": email_address,
				"content": content,
				"type": type
			},
			success: function(json) {
				if (json.success == 1) {
					$("#feedback_form").remove();
					$("#btn_area").remove();
					$("#title").text("Sucess!");
					$("#callback").html('<div class="alert alert-success" style="text-align:center"><img src="static/img/right.gif"/><h2 style="color:#3c763d">Thanks for your valuable feedback!</h2>');
				} else {
					$("#callback").html('<p>Please try again.</p>');
				}
			}
		});
	});
});

