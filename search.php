<?php

if(isset($_POST ['submit']))
{
  $conn = mysql_connect("localhost","root","ramyaj");

  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

if (empty($_POST['employee_id']) ) {
echo "<meta http-equiv='refresh' content='1;URL=search_form.php'/> <h1>Please Input Valid Employee ID Number!</h1>\n";
}
else
{
  $employee_id = $_POST['employee_id'];
 
  $sql = "SELECT employee_id, department, last_name, first_name, 
  middle_name, birth_date, employee_status, position, cellphone_no, 
  email_address, employment_status FROM record WHERE employee_id=" . $employee_id;

$db = mysql_select_db("employee_record", $conn);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
include('../display_records.php');
}
mysql_close($conn);

} 
?>