$(document).ready(function() {
	
	$("#btnLogin").click(function() {		
		validateLogin();
	});
	
	$("#btnLogout").click(function() {		
		bLogout();
	});

});

function bLogout() {
	var myurl = "applogout.php";
	$.ajax({
		url: myurl,
		type: "GET",
		success: function(data) {
			var res = data.trim().replace(/[\n\r]/g, "");
			if (res == "1") {
				//----kembali ke halaman login
				alert ("User berhasil Logout");
				window.location.reload();
			} else {
				alert ("Logout gagal");
			}
		},
		error: function(err) {
			alert(err);
		}
	});
}

function validateLogin() {
	var uid = document.getElementById("xuid").value;
	var psw = document.getElementById("xpsw").value;
	
	if (uid == "") {
		alert("User ID harus diisi");
	} else {
		if (psw == "") {
			alert("Password harus diisi");
		} else {
			//----proses disini
			var myurl = "applogin.php";
			var params = {a:uid,b:psw};
			$.ajax({
				url: myurl,
				type: "GET",
				data: params,
				success: function(data) {
					var res = data.trim().replace(/[\n\r]/g, "");
					if (res == "1") {
						//----lanjutkan ke halaman utama
						alert ("user id dan password benar");
						window.location.reload();
					} else {
						alert ("user id dan password tidak dikenal di database");
					}
				},
				error: function(err) {
					alert(err);
				}
			});
		}
	}
}


