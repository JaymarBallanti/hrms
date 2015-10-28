<?php

session_start();

$null = '';
$pass_match = '';
$user_match = '';
$success = '';

if (isset($_POST['submit'])) {

	$conn = mysql_connect("localhost", "root", "ramyaj");
	mysql_select_db("user_record", $conn);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if($password == $cpassword) {

		if(strlen($password)>3) {

			if($username && $password && $cpassword) {
				
				$retval = mysql_query( "SELECT username FROM record WHERE username = '$username'", $conn );
				$num_row = mysql_num_rows($retval);

				if ($num_row == 1) {

					$user_match = "Oops! Nausar mo naen Username,<br/>
					Padas mu an mangkalga sabali.";

				} else {

					$md5password = md5($password);
					mysql_query("INSERT INTO record (username,password) VALUES('$username','$md5password')");
					$registered = mysql_affected_rows();
					$success = "Ni-register a mo, mun login a mo.<br/>
					<a href=../index.php>Login Now</a>";

				}
			

			} else {
		
				$null = "Kalgaham an namin nan Fields.";
			}

		} else {

			$lenght = "Udmam nan Password te atikke!";
		}

	} else {

		$pass_match = "Igge nun ing-ngoy Password mu.";
	}
		
mysql_close($conn);
}

?>