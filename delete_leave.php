<?php

$conn = mysql_connect("localhost","root","ramyaj");
mysql_select_db("employee_record", $conn);
  
  if (! $conn) {

    die('Could not connect: ' . mysql_connect_error());

  }

$employee_id=$_GET['employee_id'];


$sql = "UPDATE record SET 
	leave_date_from = '', 
	leave_date_to = '', 
	leave_action = '', 
	leave_type = '', 
	disapproved = '',
	filling_date = '',
	sick_address = '',
	approved_for = '',
	sick_specify = '',
	vacation_specify = '',
	vacation_address = '' 
	WHERE employee_id= '$employee_id'";


$retval = mysql_query( $sql, $conn );

if(! $retval ) {

  die('Could not get data: ' . mysql_error());

}

echo "<meta http-equiv='refresh' content='1;URL=pages/show_leave_list.php'/><h1>Na-delete mo!</h1>";

mysql_close($conn);
?>