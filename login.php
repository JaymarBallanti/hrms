<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		// Define $username and $password
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "ramyaj");
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("employee_record", $connection);
		// SQL query to fetch information of registerd users and finds user match.

		$query = mysql_query("SELECT username, password, role from record where password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {

			$role = mysql_fetch_array($query);

			if($role['role']== "Admin"){

			$_SESSION['login_user']=$username;
			$_SESSION['role']=$role;
        	header("location: pages/home.php");
           exit();
     		 } else if($role['role'] == "Client"){

     		$_SESSION['login_user']=$username;
			$_SESSION['role']=$role;
 		 	header("location: pages_cl/home.php");

        	exit();
     		}
		} else {
			$error = "Username or Password is invalid";
		}
	mysql_close($connection); // Closing Connection
	}
}
?>