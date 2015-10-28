<?php
$error='';

if (isset($_POST['submit'])) {
	if (empty($_POST['password'])) {
		$error = "Please Enter your password to continue!";
	} else {
		$password = md5($_POST['password']);
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "ramyaj");
		// To protect MySQL injection for Security purpose
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("employee_record", $connection);
		// SQL query to fetch information of registerd users and finds user match.
        
		$query = mysql_query("SELECT * from record where password='$password'", $connection);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {
            include('../update_record_client.php');
        } else {
		  $error = "Password is invalid";
        }
    mysql_close($connection); // Closing Connection
    }
}
?>