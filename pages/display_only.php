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
    <div class="form_title"><p><br/>Search Result</p>
  <?php

  $conn = mysql_connect("localhost","root","ramyaj");
  mysql_select_db("employee_record", $conn);
  if (! $conn)
  {
    die('Could not connect: ' . mysql_connect_error());
  }

  $employee_id = $_GET['employee_id'];

  $sql = "SELECT employee_id, department, last_name, first_name, 
  middle_name, birth_date, employee_status, position, cellphone_no, 
  email_address, employment_status FROM record WHERE employee_id = $employee_id";

  $retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('No Result Found!');
    }

  include ("display_basic_info.php");
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