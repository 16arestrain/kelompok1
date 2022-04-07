<?php
	session_start();
	
	include "library/dbconnect.php";
	
	$nip = $_GET["a"];
	$nama = $_GET["b"];
	$jabatan = $_GET["c"];

	$sql = "INSERT INTO tablemovie VALUES ('".$nip."','".$nama."','".$jabatan."')";
	$res = runsqltext($sql);
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>