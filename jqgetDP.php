<?php
	session_start();
	
	include "lib/dbconnectsipbang.php";
	
	$userid = $_GET["a"];
	
	$sql = "SELECT * FROM pengguna WHERE USERID = '".$userid."'";
	$res = runsqltext($sql);
	if ($res) {
		$row = mysqli_fetch_row($res);
		echo $row[0]."|".$row[1]."|".$row[2]."|".$row[3];
	} else {
		echo "0";
	}
	
?>