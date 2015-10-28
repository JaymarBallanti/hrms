<?php
if(isset($_POST ['submit'])) {

  $conn = mysql_connect("localhost","root","ramyaj");
  $db = mysql_select_db("employee_record", $conn);
  
  if (! $conn) {

    die('Could not connect: ' . mysql_connect_error());
  } 

$sql="UPDATE record SET  
    filling_date ='".$_POST['filling_date']."',
    leave_date_from= '".$_POST['leave_date_from']."',
    leave_date_to= '".$_POST['leave_date_to']."',
    approved_date_from= '".$_POST['approved_date_from']."',
    approved_date_to= '".$_POST['approved_date_to']."',
    leave_action= '".$_POST['leave_action']."',
    leave_type= '".$_POST['leave_type']."',
    disapproved= '".$_POST['disapproved']."',
    sick_address= '".$_POST['sick_address']."',
    approved_for= '".$_POST['approved_for']."',
    sick_specify= '".$_POST['sick_specify']."',
    vacation_specify= '".$_POST['vacation_specify']."',
    vacation_address= '".$_POST['vacation_address']."'

    WHERE employee_id='".$_POST['employee_id']."'";



$retval = mysql_query( $sql, $conn );

if(! $retval ) {

  die('Could not enter data: ' . mysql_error());
}
echo "<meta http-equiv='refresh' content='1;URL=pages/show_leave_list.php'/><h1>Ok, 
niddum mo!</h1>";
mysql_close($conn);

}
?>