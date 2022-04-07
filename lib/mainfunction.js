$(document).ready(function() {
	
	$("#btnLogin").click(function() {		
		validateLogin();
	});
	
	$("#logoutbtn").click(function() {		
		btnLogout();
	});

});

function btnLogout() {
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


function MenuDataPengguna() {
	var myurls = "jqdatapengguna.php";
	$.ajax({
		url: myurls,
		type: "GET",
		success: function(data) {
			var res = data.trim().replace(/[\n\r]/g, "");
			document.getElementById("isicontent").innerHTML = res;
			
			$("#tblDataPengguna").DataTable();
			
			$("#btnTambahPengguna").click(function(){
				document.getElementById("DPNIPA").value = '';
				document.getElementById("DPNamaA").value = '';
				document.getElementById("DPJabatanA").value = '';
				$("#pnlDPAdd").css("display","block");
			});
			
			$("#btnEditPengguna").click(function(){
				cekEdit();
			});
			
			$("#btnDPAddClose").click(function(){
				$("#pnlDPAdd").css("display","none");
			});
			
			$("#btnEditDPClose").click(function(){
				$("#pnlDPEdit").css("display","none");
			});			
						
			$("#bDPadd").click(function(e){
				prosesDP("ADD",e);
			});

			$("#btnDPDelete").click(function(){
				apusapus();
			});
			$("#btnDPDeleteClose").click(function(){
				$("#pnlMovieDelete").css("display","none");
			});			
		
		},
		error: function(err) {
			alert(err);
		}
	});
	
}

function prosesDP(opt,e) {
	switch(opt) {
		case "ADD": 
			var USERID = document.getElementById("DPUIDA").value;
			var NIP = document.getElementById("DPNIPA").value;
			var Nama = document.getElementById("DPNamaA").value;
			var Jabatan = document.getElementById("DPJabatanA").value;
			
			if (NIP == "") {
				alert ("NIP harus diisi");
			} else {
				if (Nama == "") {
					alert ("Nama harus diisi");
				} else {
					if (Jabatan == "") {
						alert ("Jabatan harus diisi");
					} else {						
						
						var myurl = "6jqaddmovie.php";
						var params = {a:namamovie,b:genre,c:price};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("Data movie berhasil disimpan");
									$("#pnlMovieAdd").css("display","none");
									bListMovie();
								} else {
									alert ("Gagal simpan data movie");
								}
							},
							error: function(err) {
								alert(err);
							}
						});
						e.preventDefault();
						e.stopImmediatePropagation();
						return false;   
						
					}						
				}				
			}
			break;
		
			case "EDIT":
			var movieid = document.getElementById("movieidE").value;
			var namamovie = document.getElementById("movienameE").value;
			var genre = document.getElementById("moviegenreE").value;
			var price = document.getElementById("moviepriceE").value;
			
			if (namamovie == "") {
				alert ("Nama movie harus diisi");
			} else {
				if (genre == "") {
					alert ("Genre movie harus diisi");
				} else {
					if (price == "") {
						alert ("Harga sewa harus diisi");
					} else {

						var myurl = "6jqeditmovie.php";
						var params = {a:movieid,b:namamovie,c:genre,d:price};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("Data movie berhasil disimpan");
									$("#pnlMovieEdit").css("display","none");
									bListMovie();
								} else {
									alert ("Gagal simpan data movie");
								}
							},
							error: function(err) {
								alert(err);
							}
						});
						e.preventDefault();
						e.stopImmediatePropagation();
						return false;   			
					}
				}
			}
			break;
			
			
		case "DELETE":
			var movieid = document.getElementById("movieidD").value;
			var namamovie = document.getElementById("movienameD").value;
			var genre = document.getElementById("moviegenreD").value;
			var price = document.getElementById("moviepriceD").value;
			
			

			var myurl = "6jqapusapus.php";
			var params = {a:movieid,b:namamovie,c:genre,d:price};
			$.ajax({
				url: myurl,
				type: "GET",
				data: params,
				success: function(data) {
					var res = data.trim().replace(/[\n\r]/g, "");
					if (res == "1") {
						//----display data yg sudah diadd ke dalam list
						alert ("Data Movie Berhasil Dihapus");
						$("#pnlMovieDelete").css("display","none");
						bListMovie();
					} else {
						alert ("Gagal hapus data movie");
					}
				},
				error: function(err) {
					alert(err);
				}
			});		
			e.preventDefault();
			e.stopImmediatePropagation();
			return false;   
		break;
	}
}
		
	
	
