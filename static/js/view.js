$(document).ready(function() {
	$('#set_read').click(function() {
		var chk_value = [];
		$("input[type=checkbox]:checked").each(function(i) {
			chk_value[i] = $(this).val();
		});
		$.ajax({
			type: "POST",
			url: 'feedback_process.php',
			dataType: "json",
			data: {
				"action": 2,
				"postid": chk_value.join(',')
			},
			success: function(json) {
				if (json.success == 1) {
					alert("success");
					location.reload();
				} else {
					alert("Error!");
				}
			}
		});
	});
	$('#set_unread').click(function() {
				var chk_value = [];
		$("input[type=checkbox]:checked").each(function(i) {
			chk_value[i] = $(this).val();
		});
		$.ajax({
			type: "POST",
			url: 'feedback_process.php',
			dataType: "json",
			data: {
				"action": 3,
				"postid": chk_value.join(',')
			},
			success: function(json) {
				if (json.success == 1) {
					alert("success");
					location.reload();
				} else {
					alert("Error!");
				}
			}
		});
	});
	$('#select_all').click(function() {
		if (this.checked) {
			$("[name='select']").each(function(){	
				$(this).prop("checked", true); 
			});
		} else {
			$("[name='select']:checkbox").each(function(){
								
				$(this).prop("checked", false);
			});
		}
	});
	$('#bt1').click(function() {
		var chk_value = [];
		$("input[type=checkbox]:checked").each(function(i) {
			chk_value[i] = $(this).val();
		});
		$.ajax({
			type: "POST",
			url: 'feedback_process.php',
			dataType: "json",
			data: {
				"action": 4,
				"postid": chk_value.join(',')
			},
			success: function(json) {
				if (json.success == 1) {
					alert("success");
					location.reload();
				} else {
					alert("Error!");
				}
			}
		});
	});
	$('#bt2').click(function() {
		$(".Read").hide(500);
	});
	$('#bt3').click(function() {
		$(".Read").show(500);
	});

});



