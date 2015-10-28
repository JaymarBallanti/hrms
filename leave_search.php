<?php

if(isset($_POST ['submit']))
{
  $conn = mysql_connect("localhost","root","ramyaj");

  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

if (empty($_POST['employee_id']) {
$result = "Maid ne padli!";

} else {

  $employee_id = $_POST['employee_id'];

  $sql = "SELECT * FROM record WHERE employee_id =  $employee_id";


$db = mysql_select_db("employee_record", $conn);
$retval = mysql_query( $sql, $conn );

if(! $retval ) {

  die('Could not get data: ' . mysql_error());

}

include('assign_leave_form.php');
}
mysql_free_result($retval);
mysql_close($conn);

} 
?>