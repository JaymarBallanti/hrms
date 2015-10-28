
<html>
<head>
</head>    
<body>        
<table id = "names" style="width:95%; 
      cellpadding:5px; cell-spacing:0px; border-collapse:collapse">
  <tr>
    <td colspan="4" style="font-weight:bold; font-size:14px" scope="colgroup"><center>Name of Employee</center></td>
  </tr>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th> 
    <th colspan="2">Action</th>
  </tr>
<?php
while($row = mysql_fetch_assoc($query)) {
  $employee_id = $row['employee_id'];
  $last_name = $row['last_name'];
  $first_name = $row['first_name'];
  $middle_name = $row['middle_name'];
  $prev = $page -1;
  $next = $page +1;

  print "<tr>";
  print "<td><center>$employee_id</center></td>";
  print "<td><a href='dtr_august_update.php?employee_id=$employee_id'>$last_name, $first_name $middle_name<a/></td>";
  print "<td><a href='dtr_print_august.php?employee_id=$employee_id'>Generate Report<a/></td>";
  print "<td><a href='../delete_dtr_august.php?employee_id=$employee_id' onClick=\"javascript:return confirm('Pinhod talaga an i-DELETE hituwe?');\">Delete<a/></td>";
  } 
  print "</table>";

  echo "<center>";

  if (!($page<=1)) {
          echo "<a href='dtr_august.php?page=$prev'> Prev </a>";
        }
        if ($pages>=1 && $page<=$pages) {
          for ($x=1; $x<=$pages; $x++) {
            echo ($x == $page) ? '<strong><a href="?page='.$x.'"> '.$x.' </a></strong>':'<a href="?page='.$x.'"> '.$x.' </a>';
          }
        }
        if (!($page>=$pages)) {
          echo "<a href='dtr_august.php?page=$next'> Next </a>";
        }
  echo "</center>";
  ?>
</body> 
</html>