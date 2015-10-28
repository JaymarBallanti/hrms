<?php
  include('../check.php');
  ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
  <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>    
<body>        
      <table id = "print_form_e5" style="width:100%; border:1px solid black; cellpadding:5px; cell-spacing:0px; border-collapse:collapse">
        <tr>
            <th rowspan="2" scope="colgroup">Employee ID</th> 
            <th rowspan="2" scope="colgroup">Name</th>
            <th rowspan="2" scope="colgroup">Department</th>
            <th rowspan="2" scope="colgroup">Action</th>
            <th rowspan="2" scope="colgroup">Leave Type</th>
            <th colspan="2" scope="colgroup">Dates</th>
            <th rowspan="2" scope="colgroup">Comment</th>
            <th rowspan="2" scope="colgroup">Address</th>
            <th rowspan="2" scope="colgroup">Filling Date</th>
          </tr>
        <tr>
          <th scope="col">From</th>
          <th scope="col">To</th>
        </tr>
      <?php
      while($row = mysql_fetch_assoc($retval)) 
      { 
        print "<tr>";
        print "<td><center>" . $row['employee_id'] . "</td>";
        print "<td><center>" . $row['last_name'].", ".$row['first_name']." ".$row['middle_name']."</td>";
        print "<td><center>" . $row['department'] . "</td>";
        print "<td><center>" . $row['leave_action'] . "</td>";
        print "<td><center>" . $row['leave_type'] . "</td>";
        print "<td><center>" . $row['leave_date_from'] . "</td>";
        print "<td><center>" . $row['leave_date_to'] . "</td>";
        print "<td><center>" . $row['disapproved']."".$row['approved_for']."</td>";
        print "<td><center>" . $row['sick_address']."".$row['vacation_address'].",  ".$row['vacation_specify']."".$row['sick_specify']."</td>";
        print "<td><center>" . $row['filling_date'] . "</td>";
        print "</tr>"; 
        } 
        print "</table>";
        ?>
    </body> 
</html>