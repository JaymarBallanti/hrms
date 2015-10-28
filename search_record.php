<?php
include ("session.php");

if(isset($_POST ['submit']))
{
  $conn = mysql_connect("localhost","root","ramyaj");

  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

if (empty($_POST['id_filter']) || empty($_POST['name_filter'])) {
echo "<meta http-equiv='refresh' content='1;URL=search_index.php'/> <h1>Please fill up necessary information!</h1>\n";
}
else
{
  $employee_id = $_POST['id_filter'];
  $name = $_POST['name_filter'];

  $sql = "SELECT * FROM record WHERE employee_id= '$employee_id'";


$db = mysql_select_db("database_record", $conn);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
include('dept_record_show.php');
}
mysql_free_result($retval);
mysql_close($conn);

} 
?>