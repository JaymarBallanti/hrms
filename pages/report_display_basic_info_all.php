<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
</head>    
<body></body>        
            <table id = "form_e5" style="width:100%; cellpadding:5px; cell-spacing:0px; border-collapse:collapse">
                <tr>
                  <th colspan="9" style="height:5px">List of Employee/s</th>&nbsp
                </tr>
                <tr>
                  <th >ID</th> 
                  <th >Name</th>  
                  <th >Department</th> 
                  <th >Position</th>
                  <th >Employee Status</th>
                  <th >Cp./Tel. Number</th>
                  <th >Email Address</th>
                  <th >Employment Status</th>
                </tr>
              <?php
              while($row = mysql_fetch_assoc($retval)) 
              { 
                print "<tr>"; 
                print "<td><center>" . $row['employee_id'] . "</td>"; 
                print "<td><center>" . $row['last_name'].", ".$row['first_name']." ".$row['middle_name']."</td>";
                print "<td><center>" . $row['department'] . "</td>";
                print "<td><center>" . $row['position'] . "</td>";
                print "<td><center>" . $row['employee_status'] . "</td>";
                print "<td><center>" . $row['cellphone_no'] . "</td>";
                print "<td><center>" . $row['email_address'] . "</td>";
                print "<td><center>" . $row['employment_status'] . "</td>";
                print "</tr>"; 
                } 
                print "</table>";
                ?>
            </body> 
        </html>