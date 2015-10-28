<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "ramyaj");
// Selecting Database
$db = mysql_select_db("employee_record", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username, role from record where  username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];
$user_role =$row['role'];
if(($login_session != 'ifsu') || ($user_role != 'Admin')){
	mysql_close($connection); // Closing Connection
	header('Location: ../pages_cl/home.php'); // Redirecting To Home Page
}
?>