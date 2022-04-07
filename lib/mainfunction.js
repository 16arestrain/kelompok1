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
						
			$("#badd").click(function(e){
				prosesDP("ADD",e);
			});

			$("#btnHapusPengguna").click(function(){
				hapusDP();
			});
			$("#btnDPDeleteClose").click(function(){
				$("#pnlDPDelete").css("display","none");
			});			
		
		},
		error: function(err) {
			alert(err);
		}
	});
	
}

function cekEdit() {
	var elem = document.getElementsByName("rdoDP");
	var pilih = false;
	var pilihID = "";
	
	for (i=0; i < elem.length; i++) {
		if (elem[i].checked) {
			pilih = true;
			pilihID = elem[i].value;
			break;
		}
	}
	
	if (pilih == false) {
		alert("Silahkan pilih data yang akan di Edit");
	} else {
		//-proses edit disini
		//alert("Data "+pilihID+" akan di Edit");
		
		var myurl = "jqgetDP.php";
		var params = {a:pilihID};
		$.ajax({
			url: myurl,
			type: "GET",
			data: params,
			success: function(data) {
				var res = data.trim().replace(/[\n\r]/g, "");
				if (res == "0") {
					alert ("Data tidak ditemukan");
				} else {
					var row = res.split("|");	
					
					document.getElementById("DPUIDE").value = row[0];
					document.getElementById("DPNIPE").value = row[1];
					document.getElementById("DPNamaE").value = row[2];
					document.getElementById("DPJabatanE").value = row[3];
					
					$("#pnlDPEdit").css("display","block");
							
					$("#bDPedit").click(function(e){
						prosesDP("EDIT",e);
					});					
					
				}
			},
			error: function(err) {
				alert(err);
			}
		});
		
	}
	
}

function hapusDP() {
	var elem = document.getElementsByName("rdoDP");
	var pilihan = false;
	var pilihanID = "";
	
	for (i=0; i < elem.length; i++) {
		if (elem[i].checked) {
			pilihan = true;
			pilihanID = elem[i].value;
			break;
}
	}
if (pilihan == false) {
	alert("Silahkan pilih data yang akan di Hapus");
} else {
	//-proses hapus disini
	//alert("Data "+pilihID+" akan di hapus");

	var myurl = "jqgetDP.php";
	var params = {a:pilihanID};
	$.ajax({
		url: myurl,
		type: "GET",
		data: params,
		success: function(data) {
			var res = data.trim().replace(/[\n\r]/g, "");
			if (res == "0") {
				alert ("Movie tidak ditemukan");
			} else {
				var row = res.split("|");	
					
					document.getElementById("DPUIDD").value = row[0];
					document.getElementById("DPNIPD").value = row[1];
					document.getElementById("DPNamaD").value = row[2];
					document.getElementById("DPJabatanD").value = row[3];
					
					$("#pnlDPDelete").css("display","block");
							
					$("#bdel").click(function(e){
						prosesDP("DELETE",e);
					});					
					
				}
			},
			error: function(err) {
				alert(err);
			}
		});
		
	}
	
}

function prosesDP(opt,e) {
	switch(opt) {
		case "ADD": 
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
						
						var myurl = "jqaddDP.php";
						var params = {a:NIP,b:Nama,c:Jabatan};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("Data pengguna berhasil disimpan");
									$("#pnlDPAdd").css("display","none");
									MenuDataPengguna();
								} else {
									alert ("Gagal simpan data pengguna");
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
			var userid = document.getElementById("DPUIDE").value;
			var nip = document.getElementById("DPNIPE").value;
			var nama = document.getElementById("DPNamaE").value;
			var jabatan = document.getElementById("DPJabatanE").value;
			
			if (nip == "") {
				alert ("NIP harus diisi");
			} else {
				if (nama == "") {
					alert ("Nama harus diisi");
				} else {
					if (jabatan == "") {
						alert ("jabatan harus diisi");
					} else {

						var myurl = "jqeditDP.php";
						var params = {a:userid,b:nip,c:nama,d:jabatan};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("Data pengguna berhasil disimpan");
									$("#pnlDPEdit").css("display","none");
									MenuDataPengguna();
								} else {
									alert ("Gagal simpan data pengguna");
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
			var useridD = document.getElementById("DPUIDD").value;
			var nipD = document.getElementById("DPNIPD").value;
			var namaD = document.getElementById("DPNamaD").value;
			var jabatanD = document.getElementById("DPJabatanD").value;
			
			

			var myurl = "jqhapusDP.php";
			var params = {a:useridD,b:nipD,c:namaD,d:jabatanD};
			$.ajax({
				url: myurl,
				type: "GET",
				data: params,
				success: function(data) {
					var res = data.trim().replace(/[\n\r]/g, "");
					if (res == "1") {
						//----display data yg sudah diadd ke dalam list
						alert ("Data Pengguna Berhasil Dihapus");
						$("#pnlMovieDelete").css("display","none");
						MenuDataPengguna();
					} else {
						alert ("Gagal hapus data pengguna");
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
		
	
	
