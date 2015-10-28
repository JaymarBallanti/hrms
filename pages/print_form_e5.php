<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
  <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>    
<body>        
              <table id = "print_form_e5" style="width:100%; border:2px solid #ffffff; 
                    cellpadding:5px; cell-spacing:0px; border-collapse:collapse">
                <tr>
                  <th colspan="13" style="font-weight:bold; font-size:14px" scope="colgroup">Name of Institution: &nbsp Ifugao State University-Lagawe Campus</th>
                </tr>
                <tr>
                <th colspan="13" style="font-weight:bold; font-size:14px" scope="colgroup">Region: &nbsp&nbsp Cordillera Administrative Region</th>
                </tr>
                <tr>
                  <th rowspan="2" scope="colgroup">Name of Faculty</th> 
                  <th rowspan="2" scope="colgroup">Full-Time/<br/>Part-Time</th>  
                  <th rowspan="2" scope="colgroup">Sex</th> 
                  <th rowspan="2" scope="colgroup">Primary<br/>Teaching<br/>Discipline</th>
                  <th colspan="3" scope="colgroup">Educational Credential Earned</th>
                  <th rowspan="2" scope="colgroup">Proffessional<br/>License</th>
                  <th rowspan="2" scope="colgroup">Tenure<br/>of<br/>Employment</th>
                  <th rowspan="2" scope="colgroup">Faculty<br/>Rank</th>
                  <th rowspan="2" scope="colgroup">Teaching<br/>Load</th>
                  <th rowspan="2" scope="colgroup">Subjects<br/>Taught</th>
                </tr>
                <tr>
                  <th scope="col">Baccalaureate</th>
                  <th scope="col">Master's</th> 
                  <th scope="col">Doctorate</th>
                </tr>
              <?php
              while($row = mysql_fetch_assoc($retval)) 
              { 
                print "<tr>";
                print "<td><center>" . $row['last_name'].", ".$row['first_name']." ".$row['middle_name']."</td>";
                print "<td><center>" . $row['employment_status'] . "</td>";
                print "<td><center>" . $row['sex'] . "</td>";
                print "<td><center>" . $row['teaching_discipline'] . "</td>";
                print "<td><center>" . $row['college_deg_course'] . "</td>";
                print "<td><center>" . $row['grad_deg_course'] . "</td>";
                print "<td><center>" . $row['grad_deg_course1'] . "</td>";
                print "<td><center>" . $row['prof_license'] . "</td>";
                print "<td><center>" . $row['tenure_employment'] . "</td>";
                print "<td><center>" . $row['faculty_rank'] . "</td>";
                print "<td><center>" . $row['teaching_load'] . "</td>";
                print "<td><center>" . $row['subjects_taught'] . "</td>";
                print "</tr>"; 
                } 
                print "</table>";
                ?>
            </body> 
        </html>