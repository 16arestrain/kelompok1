<?php
	session_start();
	
	include "lib/dbconnectsipbang.php";
	
	$nip = $_GET["a"];
	$nama = $_GET["b"];
	$jabatan = $_GET["c"];

	$todaytime = date("Y-m-d H:i:s");
	$userid = strtoupper(md5($nama.$todaytime));

	$sql = "INSERT INTO pengguna VALUES ('".$userid."','".$nip."','".$nama."','".$jabatan."')";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>