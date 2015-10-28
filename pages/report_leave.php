<?php

$conn = mysql_connect("localhost","root","ramyaj");
mysql_select_db("employee_record", $conn);
if (! $conn) {
die('Could not connect: ' . mysql_connect_error());
}

$sql = "SELECT employee_id, last_name, first_name, filling_date, 
	  middle_name, department, leave_date_from, leave_date_to, leave_action, 
	  leave_type, disapproved, vacation_address, vacation_specify,
      sick_specify, approved_for, sick_address FROM record WHERE leave_action = 'Approved'";

$retval = mysql_query( $sql, $conn );
if(! $retval )
  {
  die('No Results Found!');
}

include ("print_leave_report.php");
mysql_free_result($retval);
mysql_close($conn);

?>