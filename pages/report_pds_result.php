<?php
  if(isset($_REQUEST['submit'])) {
    $search_term = $_GET['search_term'];

    $sql = "SELECT * FROM record WHERE employee_id LIKE '%" . $search_term . "%' OR first_name LIKE '%" . $search_term . "%' OR last_name LIKE '" . $search_term . "%' OR department LIKE '" . $search_term . "%' OR position LIKE '" . $search_term . "'";
    $conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
    mysql_select_db("employee_record", $conn);

    $result=mysql_query($sql);
    $num = mysql_num_rows($result);
  
      if($num > 0 && $search_term!="") {
    
        echo "$num result(s) found for <b>$search_term</b>!<br/>";

        while($row = mysql_fetch_assoc($result)) {
         
        $employee_id = $row['employee_id'];
        $last_name = $row['last_name'];
        $first_name = $row['first_name'];
        $middle_name = $row['middle_name'];
        $position = $row['position'];
        $employee_status = $row['employee_status'];
        $employment_status = $row['employment_status'];
        $department = $row['department'];
        $sex = $row['sex'];
        
        echo "<br/><b style='font-size:16px'><a href='print_pds.php?employee_id=$employee_id'>$last_name, $first_name $middle_name<a/></b><br/>
                Employee ID: $employee_id; Sex: $sex; Department: $department; Position: $position<br/>
                Employee_status: $employment_status; Employment_status: $employment_status<br/>";
        }

      } else {
        echo "No Results Found!";
      }
      mysql_close();
    }
    ?>