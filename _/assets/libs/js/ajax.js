$(document).on('click', '#btn-add', function (e) {
	var data = $("#user_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "assets/libs/php/save.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addEmployeeModal').modal('hide');
				alert('Data added successfully !');
				location.reload();
			} else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});

$(document).on('click', '.update', function (e) {
	var id = $(this).attr("data-id");
	var email = $(this).attr("data-email");
	var phone = $(this).attr("data-phone");
	var password = $(this).attr("data-password");
	var role = $(this).attr("data-role");
	console.log(id);
	console.log(email);
	console.log(phone);
	console.log(password);
	console.log(role);
	$('#id_u').val(id);
	$('#email_u').val(email);
	$('#phone_u').val(phone);
	$('#password_u').val(password);
	$('#role_u').val(role);
});

$(document).on('click', '#update', function (e) {
	var data = $("#update_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "assets/libs/php/save.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#editEmployeeModal').modal('hide');
				alert('Data updated successfully !');
				location.reload();
			} else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on("click", ".delete", function () {
	var id = $(this).attr("data-id");
	$('#id_d').val(id);
});

$(document).on("click", "#delete", function () {
	$.ajax({
		url: "assets/libs/php/save.php",
		type: "POST",
		cache: false,
		data: {
			type: 3,
			id: $("#id_d").val()
		},
		success: function (dataResult) {
			console.log(dataResult);
			$('#deleteEmployeeModal').modal('hide');
			alert('Data deleted successfully !');
			location.reload();
			//$("#" + dataResult).remove();
			
		}
	});
});

$(document).on("click", "#send", function () {
	$.ajax({
		url: "assets/libs/php/save.php",
		type: "POST",
		cache: false,
		data: {
			type: 5,
			id: $("#id_e").val()
		},
		success: function (dataResult) {
			console.log(dataResult);
			$('#emailModel').modal('hide');
			alert('Email sent successfully!');
			location.reload();
			//$("#" + dataResult).remove();
			
		}
	});
});

$(document).on("click", "#delete_multiple", function () {
	var user = [];
	$(".user_checkbox:checked").each(function () {
		user.push($(this).data('user-id'));
	});
	if (user.length <= 0) {
		alert("Please select records.");
	} else {
		WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
		var checked = confirm(WRN_PROFILE_DELETE);
		if (checked == true) {
			var selected_values = user.join(",");
			console.log(selected_values);
			$.ajax({
				type: "POST",
				url: "assets/libs/php/save.php",
				cache: false,
				data: {
					type: 4,
					id: selected_values
				},
				success: function (response) {
					var ids = response.split(",");
					for (var i = 0; i < ids.length; i++) {
						$("#" + ids[i]).remove();
					}
				}
			});
		}
	}
});
$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function () {
		if (this.checked) {
			checkbox.each(function () {
				this.checked = true;
			});
		} else {
			checkbox.each(function () {
				this.checked = false;
			});
		}
	});
	checkbox.click(function () {
		if (!this.checked) {
			$("#selectAll").prop("checked", false);
		}
	});
});