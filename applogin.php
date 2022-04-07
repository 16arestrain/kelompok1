<?php
	session_start();

	include "lib/dbconnectsipbang.php";
	
	$uid = $_GET["a"];
	$psw = $_GET["b"];

	$sql = "SELECT * FROM tableuser WHERE UID = '" .$uid. "' AND PSW = '" .$psw. "'";
	$res = runsqltext($sql);
	$numrow = mysqli_num_rows($res);
	
	if ($numrow > 0) {
		$_SESSION["isLogin"] = "1";
		$_SESSION["user"] = $uid;
		echo "1";
	} else {
		$_SESSION["isLogin"] = "0";
		echo "0";
	}

?>