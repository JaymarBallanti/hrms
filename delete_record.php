<?php

$conn = mysql_connect("localhost","root","ramyaj");
mysql_select_db("employee_record", $conn);
  
  if (! $conn) {

    die('Could not connect: ' . mysql_connect_error());

  }

$employee_id=$_GET['employee_id'];


$sql = "DELETE FROM record WHERE employee_id= '$employee_id'";


$retval = mysql_query( $sql, $conn );

if(! $retval ) {

  die('Could not get data: ' . mysql_error());

}

echo "<meta http-equiv='refresh' content='1;URL=pages/basic_info.php'/><h1>Na-delete mo!</h1>\n";

mysql_close($conn);
?>