<?php
$error='';

if (isset($_POST['submit'])) {
	
	$name = $row['username'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$new_username = $_POST['new_username'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	if ($username && $password && $new_username) {

		$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 

		$db = mysql_select_db("employee_record", $connection);

		$query = mysql_query("SELECT * FROM record WHERE password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {
			
			$update = mysql_query("UPDATE record SET username='$new_username' WHERE username='$name'");
			echo "<meta http-equiv='refresh' content='1;URL=../logout.php'/><h1>Na-update mo nan Username mu!</h1></a>";
		} else {
			$error = "Nihalla nan Password!";
		}
	

	} else {
		$error = "Mahapul an kalgaham nan Fields!";
	}
	mysql_close($connection); // Closing Connection
}
?>