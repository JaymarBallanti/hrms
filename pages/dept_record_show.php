<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>HRIS-Employee Management</title>
</head>
<body>
<div id="container">
<?php
include('header.php');
  include('employee_mgt_menubar.php');
?>
  <section id="wrapper_em">
  	<div class="lsidebar"></div>
  	<div class="content_emp_record">
    <div class="form_title"><p><br/>Form E.5</p>
  <?php

  $conn = mysql_connect("localhost","root","ramyaj");
  mysql_select_db("employee_record", $conn);
  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

  $department=$_GET['department'];

  $sql = "SELECT employee_id, teaching_discipline, last_name, first_name, employment_status,
  middle_name, tenure_employment, prof_license, faculty_rank, teaching_load, 
  subjects_taught, college_deg_course, grad_deg_course, grad_deg_course1, sex FROM record
  WHERE department = '$department' ORDER BY last_name ASC";

  $retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('Could not get data: ' . mysql_error());
    }

  include ("display_records.php");
mysql_free_result($retval);
mysql_close($conn);

?>
    </div>
    </div>
  	<div class="rsidebar"></div>
  </section>
  <?php
	include('footer.php');
	?>
</div>
</body>
</html>