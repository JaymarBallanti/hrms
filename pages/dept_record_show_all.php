<?php

  $conn = mysql_connect("localhost","root","ramyaj");
  mysql_select_db("employee_record", $conn);
  if (! $conn) {
    die('Could not connect: ' . mysql_connect_error());
  }

  $sql = "SELECT employee_id, teaching_discipline, last_name, first_name, employment_status, 
  middle_name, tenure_employment, prof_license, faculty_rank, teaching_load, 
  subjects_taught, college_deg_course, grad_deg_course, grad_deg_course1, sex FROM record Where role='Client' ORDER BY last_name ASC";

  $retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('Could not get data: ' . mysql_error());
    }

  include ("display_records.php");
mysql_free_result($retval);
mysql_close($conn);

?>