

<?php
// Connect to server and select database.
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
#include('db_option.php');
mysql_select_db("employee_record", $conn);

// get value of id that sent from address bar
$employee_id = $_GET['employee_id'];


// Retrieve data from database 
$sql = "SELECT * FROM record WHERE employee_id = '$employee_id'";
$result=mysql_query($sql);

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling

 } while($row = mysql_fetch_array($result)) {
 
 // get data from db
$employee_id = $row['employee_id'];
$last_name = $row['last_name'];
$first_name = $row['first_name'];
$middle_name = $row['middle_name'];
$position = $row['position'];
$leave_date_from = $row['leave_date_from'];
$leave_date_to = $row['leave_date_to'];
$approved_date_from= $row['approved_date_from'];
$approved_date_to= $row['approved_date_to'];
$leave_action = $row['leave_action'];
$leave_type = $row['leave_type'];
$filling_date = $row['filling_date'];
$disapproved= $row['disapproved'];
$sick_address= $row['sick_address'];
$approved_for= $row['approved_for'];
$sick_specify= $row['sick_specify'];
$vacation_specify= $row['vacation_specify'];
$vacation_address= $row['vacation_address'];
}
?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>HRIS-Assign Leave</title>
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
      <div class="leave_fields"><p>Update Leave</p>
      <form action="../save_leave.php" name="assign_leave" method="post">
          <table style="width:100%; border:2px solid #8DC3E9; border-bottom: 0px">
            <span style="font-size:20px; font-weight:bold;"><center>Detail of Applicants</center></span>
            <tr>
              <td>Employee ID:</td>
              <td><input type="text" style="width:200px" readonly="readonly" value="<?=$employee_id;?>" name="employee_id"></td>
              <td>Employee:</td>
              <td><input type="text" style="width:220px" readonly="readonly" value="<?="$last_name, $first_name $middle_name";?>" name="name"></td>
              <td>Leave Type:</td>
              <td><select style="width:200px" name="leave_type">
                <option value="Sick Leave" name="sick_leave">Sick Leave</option>
                <option value="Maternity" name="maternity">Maternity</option>
                <option value="Paternity" name="paternity">Paternity</option>
                <option value="SPL" name="spl">SPL</option>
                <option value="COC" name="clash_of_clans">COC</option>
                <option value="Compensatory" name="compensatory">Compensatory Service</option>
                <option value="Vacation" name="vacation">Vacation</option>
                </select>
              </td>              
            </tr>
            <tr>
              <td>Inclusive Dates: </td>
              <td><input type="date" value="<?=$leave_date_from;?>" style="width:140px" name="leave_date_from"> -
                <input type="date" value="<?=$leave_date_to;?>" style="width:140px" name="leave_date_to"></td>
              <td>Date of Filling: </td>
              <td><input type="date" value="<?=$filling_date;?>" style="width:220px" name="filling_date"></td>
              <td>Position:</td>
              <td><input type="text" style="width:200px" readonly="readonly" value="<?=$position;?>" name="position"></td>
            </tr>
          </table>
          <table style="width:100%; border:2px solid #8DC3E9; border-top: 0px">
            <tr>
              <td>In case of vacation leave: </td>
              <td><select style="width:160px" name="vacation_address">
                <option value=" " name="none">None</option>
                <option value="Within the Philippines" name="philippines">Within the Philippines</option>
                <option value="Abroad" name="abroad">Abroad(specify)</option>
                </select> <input type="text" value="<?=$vacation_specify;?>" placeholder="specify leave address.." style="width:250px" name="vacation_specify"></td>
              <td>In case of sick leave: </td>
              <td><select style="width:150px" name="sick_address">
                <option value=" " name="none">None</option>
                <option value="In Hospital" name="hospital">In Hospital(specify)</option>
                <option value="Out Patient" name="out_patient">Out Patient(specify)</option>
                </select> <input type="text" value="<?=$sick_specify;?>" placeholder="specify leave address.." style="width:250px" name="sick_specify"></td>
            </tr>
            <tr>
              <td>Commutation: </td>
              <td><select style="width:150px" name="commutation">
                <option value="Requested" name="requested">Requested</option>
                <option value="Not Requested" name="not_requested">Not Requested</option>
                </select>
              </td>
              <td>Select Action:</td>
              <td><select style="width:200px" name="leave_action">
                <option value="Approved" name="approved">Approved</option>
                <option value="Dispproved" name="disapprove">Dispproved</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Approved for:</td>
              <td><input type="date" value="<?=$approved_date_from;?>" style="width:140px" name="approved_date_from"> - 
                <input type="date" value="<?=$approved_date_to;?>" style="width:140px" name="approved_date_to">
                <select style="width:150px" name="approved_for">
                <option value="days with pay" name="with_pay">days with pay</option>
                <option value="days without pay" name="without_pay">days without pay</option>
                <option value="others" name="others">others(specify)</option>
                </select></td>
              <td>Disapproved due to: </td>
              <td><input type="text" value="<?=$disapproved;?>" style="width:250px" name="disapproved"></td>
          </table>
            <div class ="submit">
              <ul>
                <li>
                  <input type="submit" style="width:100px; height:30px; 
                      font-size:16px" name="submit" value="Save"></td>
                  <input type="button" style="width:100px; height:30px; 
                      font-size:16px" onclick="window.location.replace('search_employee_form.php')"
                      name="cancel" value="Cancel"></td>
                </li>
              </ul>
            </div>
        </form>
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
