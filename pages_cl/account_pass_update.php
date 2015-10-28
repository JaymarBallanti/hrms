<?php
$error='';

if (isset($_POST['submit'])) {

	$name = $row['username'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$new_password = $_POST['new_password'];
	$c_password = md5($_POST['confirm_password']);

	$username = stripslashes($username);
	$password = stripslashes($password);
	$new_password = stripslashes($new_password);
	$c_password = stripslashes($c_password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$new_password = mysql_real_escape_string($new_password);
	$c_password = mysql_real_escape_string($c_password);

	if ($password && $username && $new_password && $c_password) {
		$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
		mysql_select_db("employee_record", $conn);

		$query = mysql_query("SELECT * FROM record WHERE password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {

			$update = mysql_query("UPDATE record SET password='$c_password' WHERE username='$name'");

			echo "<meta http-equiv='refresh' content='1;URL=../logout.php'/><h1>Na-update mo nan Password mu!</h1></a>";
		} else {
			$error = "Nihalla nan Password!";
		}
	}
	mysql_close($connection); // Closing Connection
}
?>