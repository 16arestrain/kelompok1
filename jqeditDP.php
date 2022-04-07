<?php
	session_start();
	
	include "lib/dbconnectsipbang.php";
	
	$userid = $_GET["a"];
	$nip = $_GET["b"];
	$nama = $_GET["c"];
	$jabatan = $_GET["d"];
	
	$sql = "UPDATE pengguna SET NIP = '".$nip."', NAMA = '".$nama."', JABATAN = '".$jabatan."' WHERE USERID = '".$userid."'";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>