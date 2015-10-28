<html>
<head></head>    
<body>   
            <table id = "form_e5" style="width:100%; cellpadding:5px; cell-spacing:0px; border-collapse:collapse">
                <tr>
                  <th colspan="9" style="height:5px">List of Employee/s</th>
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
                  <th >Action</th> 
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
                print "<td><center><a href='update_form.php?employee_id=".$row['employee_id']."'>View Info</a> | <a href='../delete_record.php?employee_id=".$row['employee_id']."' onClick=\"javascript:return confirm('Pinhod muh talaga an i-DELETE hituwe an RECORD?');\">Delete</a></td>";
                print "</tr>"; 
                } 
                print "</table>";

                ?>
  </body>
</html>