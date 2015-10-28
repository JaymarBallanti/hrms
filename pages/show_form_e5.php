<?php

  $conn = mysql_connect("localhost","root","ramyaj");
  mysql_select_db("employee_record", $conn);
  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

  $employee_id = $_GET['employee_id'];

  $sql = "SELECT employee_id, teaching_discipline, last_name, first_name, employment_status, 
  middle_name, tenure_employment, prof_license, faculty_rank, teaching_load, 
  subjects_taught, college_deg_course, grad_deg_course, grad_deg_course1, sex FROM record WHERE employee_id = $employee_id";

  $retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('Could not get data: ' . mysql_error());
    }

  include ("print_form_e5.php");
mysql_free_result($retval);
mysql_close($conn);

?>