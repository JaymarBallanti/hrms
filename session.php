<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "ramyaj");
// Selecting Database
$db = mysql_select_db("employee_record", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT username, employee_id, first_name, last_name, user_pics, middle_name from record where  username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$first_name =$row['first_name'];
$last_name =$row['last_name'];
$employee_id =$row['employee_id'];
$user_pics =$row['user_pics'];
$middle_name =$row['middle_name'];
if(!isset($login_session)){
	mysql_close($connection); // Closing Connection
	header('Location: ../index.php'); // Redirecting To Home Page
}
?>