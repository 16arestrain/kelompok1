<?php

	function connectdb() {		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbse = "sipbang";
		
		$link = new mysqli($host, $user, $pass, $dbse);
		if (mysqli_connect_errno()) {
			die ("Cannot connect to DB, Error: " . mysqli_connect_error());
		} else {
			return $link;
		}
	}

	function runsqltext($sSQL) {
		$connected = connectdb();
		
		if ($connected) {
			$result = mysqli_query($connected, $sSQL);
			if ($result) {
				return $result;
			} else {
				die ("Cannot execute query! SQL = " .$sSQL);
			}
		}
		mysqli_close($connected);		
	}

?>