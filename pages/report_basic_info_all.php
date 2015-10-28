<?php

  $conn = mysql_connect("localhost","root","ramyaj");
  mysql_select_db("employee_record", $conn);
  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

  $sql = "SELECT employee_id, department, last_name, first_name, 
  middle_name, birth_date, employee_status, position, cellphone_no, 
  email_address, employment_status FROM record WHERE role = 'Client' ORDER BY last_name ASC";

  $retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('Could not get data: ' . mysql_error());
    }

  include ("report_display_basic_info_all.php");
mysql_free_result($retval);
mysql_close($conn);

?>