<?php
	session_start();
	
	include "lib/dbconnectsipbang.php";
	
	$userid = $_GET["a"];

	
	$sql = "DELETE FROM pengguna WHERE USERID = '$userid'";
	$res = runsqltext($sql);
	
	if ($res) {
		echo "1";
	} else {
		echo "0";
	}
	
?>