<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Expires" content="Mon, 20 Dec 1998 01:00:00 GMT" />
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		
		<title>SIPBANG "Sistem Informasi JFPBJ"</title>
		<link id="icon" rel="shortcut icon" type="image/x-icon" href="images/iconay.png" />
		
		<script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="lib/mainfunction.js"></script>
		<script type="text/javascript" src="datatables/datatables.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
		<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="lib/popup.css" />
		<link rel="stylesheet" type="text/css" href="lib/loginpage.css" />
        <link rel="stylesheet" type="text/css" href="lib/mainpage.css" />
	</head>

	<body>
		<?php
		
			if (isset($_SESSION["isLogin"])) {
				$login = $_SESSION["isLogin"];
			} else {
				$login = 0;
			}
		
			if ($login == 0) {
				include "loginpage.php";
			} else {
				include "mainpage.php";
			}
			
		
		?>
	</body>
</html>