<?php
	session_start();
	
	unset($_SESSION["isLogin"]);
	unset($_SESSION["user"]);
	echo "1";
?>