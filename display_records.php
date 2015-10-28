<html>
<head></head>    
<body></body>        
            <?php
            print " 
              <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" 
              style=\"border-collapse: collapse\" bordercolor=\"#8DC3E9\" 
              width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#757116\">
                <tr> 
                  <td width=100 style=\"color: #47198b\"><b><center>Employee ID</td> 
                  <td width=100 style=\"color: #47198b\"><b><center>Name</td>  
                  <td width=100 style=\"color: #47198b\"><b><center>Department</td> 
                  <td width=100 style=\"color: #47198b\"><b><center>Position</td>
                  <td width=100 style=\"color: #47198b\"><b><center>Employee Status</td>
                  <td width=100 style=\"color: #47198b\"><b><center>Telephone No</td> 
                  <td width=100 style=\"color: #47198b\"><b><center>Email Address</td>
                  <td width=100 style=\"color: #47198b\"><b><center>Employment Status</td>
                  <td width=100 style=\"color: #47198b\"><b><center>Modify</td>
                </tr>"; 

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
                echo "<td><center><a href='update.php?employee_id=".$row['employee_id']."'>Edit</a> | <a href='../delete.php?employee_id=".$row['employee_id']."'>Delete</a></td>";
                print "</tr>"; 
                } 
                print "</table>";
                ?>
            </body> 
        </html>