<!DOCTYPE html>
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
      <div class="form_title"><p><br/>Leave List</p>
            <?php

  			$conn = mysql_connect("localhost","root","ramyaj");
			  mysql_select_db("employee_record", $conn);
			  if (! $conn) {
			    die('Could not connect: ' . mysql_connect_error());
			  }

			  $sql = "SELECT employee_id, last_name, first_name, filling_date, 
			  middle_name, department, leave_date_from, leave_date_to, leave_action, 
			  leave_type, disapproved, vacation_address, vacation_specify,
        sick_specify, approved_for, sick_address FROM record WHERE leave_action = 'Approved'";

			  $retval = mysql_query( $sql, $conn );
			    if(! $retval )
			      {
			      die('Could not get data: ' . mysql_error());
			    }

			  include ("display_leave.php");
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

