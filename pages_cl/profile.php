<?php
include('client_update_confirmation.php');
?>
<html>
<head>
   <link rel="shortcut icon" href="../Icons/favicon.ico">
  <link type="text/css" rel="stylesheet" href="../css/style.css">
  <link type="text/css" rel="stylesheet" href="../css/user.css">
  <meta charset="utf-8">
<title>Profile</title>
</head>
</body>
<div id="container">

  <?php
  include('header_user.php');
  include('menubar.php');
  ?>

  <?php
// Connect to server and select database.
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
#include('db_option.php');
mysql_select_db("employee_record", $conn);

$employee_id = $row['employee_id'];


// Retrieve data from database 
$sql = "SELECT * FROM record WHERE employee_id = '$employee_id'";
$result=mysql_query($sql);

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling

 } while($row = mysql_fetch_array($result)) {
 
 // get data from db
$employee_id = $row['employee_id'];
$department = $row['department'];
$date_employed = $row['date_employed'];
$position = $row['position'];
$employee_status = $row['employee_status'];
$employment_status = $row['employment_status'];
$teaching_discipline = $row['teaching_discipline'];
$prof_license = $row['prof_license'];
$tenure_employment = $row['tenure_employment'];
$faculty_rank = $row['faculty_rank'];
$teaching_load = $row['teaching_load'];
$subjects_taught = $row['subjects_taught'];
$last_name = $row['last_name'];
$first_name = $row['first_name'];
$middle_name = $row['middle_name'];
$name_extension = $row['name_extension'];
$birth_date = $row['birth_date'];
$sex = $row['sex'];
$civil_status = $row['civil_status'];
$citizenship = $row['citizenship'];
$height = $row['height'];
$weight = $row['weight'];
$blood_type = $row['blood_type'];
$gsis_no = $row['gsis_no'];
$pagibig_no = $row['pagibig_no'];
$phil_health_no = $row['phil_health_no'];
$sss_no = $row['sss_no'];
$birth_place = $row['birth_place'];
$residential_add = $row['residential_add'];
$zip_code1 = $row['zip_code1'];
$telephone_no1 = $row['telephone_no1'];
$permanent_add = $row['permanent_add'];
$zip_code2 = $row['zip_code2'];
$telephone_no2 = $row['telephone_no2'];
$email_address = $row['email_address'];
$cellphone_no = $row['cellphone_no'];
$agency_employee_no = $row['agency_employee_no'];
$tin = $row['tin'];
$spouse_last_name = $row['spouse_last_name'];
$spouse_first_name = $row['spouse_first_name'];
$spouse_middle_name = $row['spouse_middle_name'];
$occupation = $row['occupation'];
$employer_bus_name = $row['employer_bus_name'];
$business_address = $row['business_address'];
$spouse_cp_no = $row['spouse_cp_no'];
$spouse_birth_date = $row['spouse_birth_date'];
$child_name1 = $row['child_name1'];
$child_name2 = $row['child_name2'];
$child_name3 = $row['child_name3'];
$child_name4 = $row['child_name4'];
$child_name5 = $row['child_name5'];
$child_name6 = $row['child_name6'];
$child_name7 = $row['child_name7'];
$child_name8 = $row['child_name8'];
$child_name9 = $row['child_name9'];
$child_name10 = $row['child_name10'];
$child_birth_date1 = $row['child_birth_date1'];
$child_birth_date2 = $row['child_birth_date2'];
$child_birth_date3 = $row['child_birth_date3'];
$child_birth_date4 = $row['child_birth_date4'];
$child_birth_date5 = $row['child_birth_date5'];
$child_birth_date6 = $row['child_birth_date6'];
$child_birth_date7 = $row['child_birth_date7'];
$child_birth_date8 = $row['child_birth_date8'];
$child_birth_date9 = $row['child_birth_date9'];
$child_birth_date10 = $row['child_birth_date10'];
$father_last_name = $row['father_last_name'];
$father_first_name = $row['father_first_name'];
$father_middle_name = $row['father_middle_name'];
$father_birth_date = $row['father_birth_date'];
$mother_maiden_name  = $row['mother_maiden_name'];
$mother_last_name = $row['mother_last_name'];
$mother_first_name = $row['mother_first_name'];
$mother_middle_name = $row['mother_middle_name'];
$mother_birth_date = $row['mother_birth_date'];

$primary_name = $row['primary_name'];
$primary_deg_course = $row['primary_deg_course'];
$primary_year_grad = $row['primary_year_grad'];
$primary_highest_grade = $row['primary_highest_grade'];
$primary_attendance_from = $row['primary_attendance_from'];
$primary_attendance_to = $row['primary_attendance_to'];
$primary_academic = $row['primary_academic'];

$secondary_name = $row['secondary_name'];
$secondary_deg_course = $row['secondary_deg_course'];
$secondary_year_grad = $row['secondary_year_grad'];
$secondary_highest_grade = $row['secondary_highest_grade'];
$secondary_attendance_from = $row['secondary_attendance_from'];
$secondary_attendance_to = $row['secondary_attendance_to'];
$secondary_academic = $row['secondary_academic'];

$college_name = $row['college_name'];
$college_deg_course = $row['college_deg_course'];
$college_year_grad = $row['college_year_grad'];
$college_highest_grade = $row['college_highest_grade'];
$college_attendance_from = $row['college_attendance_from'];
$college_attendance_to = $row['college_attendance_to'];
$college_academic = $row['college_academic'];

$grad_studies_name = $row['grad_studies_name'];
$grad_deg_course = $row['grad_deg_course'];
$grad_studies_year = $row['grad_studies_year'];
$grad_studies_highest_grade = $row['grad_studies_highest_grade'];
$grad_attendance_from = $row['grad_attendance_from'];
$grad_attendance_to = $row['grad_attendance_to'];
$grad_studies_academic = $row['grad_studies_academic'];

$grad_studies_name1 = $row['grad_studies_name1'];
$grad_deg_course1 = $row['grad_deg_course1'];
$grad_studies_year1 = $row['grad_studies_year1'];
$grad_studies_highest_grade1 = $row['grad_studies_highest_grade1'];
$grad_attendance_from1 = $row['grad_attendance_from1'];
$grad_attendance_to1 = $row['grad_attendance_to1'];
$grad_studies_academic1 = $row['grad_studies_academic1'];
}
?>
<section id="wrapper_em">
   <div class="lsidebar"></div>
   <div class="content_emp_record">
      <span style="text-align:center; color: red"><h4><?php echo $error; ?></h4></span>
   <div class="form_title"><p><br/>Employee Record</p>
   <form name="" method="post" action="">
      <div class="pds_fields1">
         <table id="pds_border" style="width:100%">
            <tr>
               <td>Employee ID: </td>
               <td><input type="text" style="width:180px" readonly="true" name="employee_id" value="<?=$employee_id;?>"></td>
               <td>Department: </td>
               <td><input type="text" name="department" value="<?=$department;?>" style="width:180px" readonly="true" ></td>
               <td>Employee Status: </td>
               <td><input type="text" name="employee_status" value="<?=$employee_status;?>" readonly="true" style="width:180px"></td>
            </tr>
            <tr>
               <td>Date Employed: </td>
               <td><input type="date" style="width:180px" readonly="true" name="date_employed" value="<?=$date_employed;?>"></td>
               <td>Position: </td>
               <td><input type="text" style="width:180px" readonly="true" name="position" id="position" value="<?=$position;?>"></td>
               <td>Employment Status: </td>
               <td><input type="text" name="employment_status" value="<?=$employment_status;?>" readonly="true" style="width:180px"></td>
            </tr>
            <tr>
               <td>Primary Teaching Discipline: </td>
               <td><input type="text" placeholder="use Code" readonly="true" style="width:180px" name="teaching_discipline" value="<?=$teaching_discipline;?>"></td>
               <td>Professional License: </td>
               <td><input type="text" placeholder="use Code" readonly="true" style="width:180px" name="prof_license" value="<?=$prof_license;?>"></td>
               <td>Tenure of Employment: </td>
               <td><input type="text" placeholder="use Code" readonly="true" style="width:180px" name="tenure_employment" value="<?=$tenure_employment;?>"></td>
            </tr>
            <tr>
               <td>Faculty Rank: </td>
               <td><input type="text" placeholder="use Code" readonly="true" style="width:180px" name="faculty_rank" value="<?=$faculty_rank;?>"></td>
               <td>Teaching Load: </td>
               <td><input type="text" placeholder="use Code"readonly="true"  style="width:180px" name="teaching_load" value="<?=$teaching_load;?>"></td>
               <td>Subjects Taught: </td>
               <td><input name="subjects_taught" rows="5" readonly="true" cols="50" style="width:180px" value="<?=$subjects_taught;?>"></td>
            </tr>
         </table>
      </div>
      <div class="pds_fields1"><p>Personal Data Sheet</p>
         <table id="title_fam_bg" style="width:100%; font-size:18px"><tr><td>I. Personal Information</td></tr></table>
         <table id="pds_border" style="width:100%">
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Last Name: </td>
                     <td><input type="text" style="width:250px" name="last_name" value="<?=$last_name;?>"></td>
                  </tr>
                  <tr>
                     <td>First Name: </td>
                     <td><input type="text" style="width:250px" name="first_name" value="<?=$first_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" style="width:250px" name="birth_date" value="<?=$birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td>Sex: </td>
                     <td><select style="width:250px" name="sex">
                        <option value="M" <?php if($sex == 'Male') { echo 'selected="selected"'; } ?>>M</option>
                        <option value="F" <?php if($sex == 'Female') { echo 'selected="selected"'; } ?>>F</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td>Civil Status: </td>
                     <td><select style="width:250px" name="civil_status" value="<?=$civil_status;?>">
                        <option value="Single" <?php if($civil_status == 'Single') { echo 'selected="selected"'; } ?>>Single</option>
                        <option value="Married" <?php if($civil_status == 'Married') { echo 'selected="selected"'; } ?>>Married</option>
                        <option value="Annulled" <?php if($civil_status == 'Annulled') { echo 'selected="selected"'; } ?>>Annulled</option>
                        <option value="Widowed" <?php if($civil_status == 'Widowed') { echo 'selected="selected"'; } ?>>Widowed</option>
                        <option value="Separated" <?php if($civil_status == 'Separated') { echo 'selected="selected"'; } ?>>Separated</option>
                        <option value="Others" <?php if($civil_status == 'Others') { echo 'selected="selected"'; } ?>>Others</option>
                        </select></td>
                  </tr>
                  <tr>
                     <td>Citizenship: </td>
                     <td><input type="text" style="width:250px" name="citizenship" value="<?=$citizenship;?>"></td>
                  </tr>
                  <tr>
                     <td>Height(m): </td>
                     <td><input type="text" style="width:250px" name="height" id="height" value="<?=$height;?>"></td>
                  </tr>
                  <tr>
                     <td>Weight(kg): </td>
                     <td><input type="text" style="width:250px" name="weight" id="weight" value="<?=$weight;?>"></td>
                  </tr>
                  <tr>
                     <td>Blood Type: </td>
                     <td><input type="text" style="width:250px" name="blood_type" id="blood_type" value="<?=$blood_type;?>"></td>
                  </tr>
                  <tr>
                     <td>GSIS ID No.: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="gsis_no" id="gsis_no" value="<?=$gsis_no;?>"></td>
                  </tr>
                  <tr>           
                     <td>PAG-IBIG ID No.: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="pagibig_no" id="pagibig_no" value="<?=$pagibig_no;?>"></td>
                  </tr>
                  <tr>
                     <td>PHILHEALTH No.: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="phil_health_no" value="<?=$phil_health_no;?>"></td>
                  </tr>
                  <tr>
                     <td>SSS No.: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="sss_no" value="<?=$sss_no;?>"></td>
                  </tr>
               </table>
            </td>
            <td style="padding-left:60px">
               <table style="width:100%">
                  <tr>
                     <td>Midle Name: </td>
                     <td><input type="text" style="width:250px" name="middle_name" value="<?=$middle_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Name Extension: </td>
                     <td><input type="text" style="width:250px" name="name_extension" value="<?=$name_extension;?>"></td>
                  </tr>
                  <tr>
                     <td>Place of Birth: </td>
                     <td><input type="text" style="width:250px" name="birth_place" value="<?=$birth_place;?>"></td>
                  </tr>
                  <tr>
                     <td>Residential Address: </td>
                     <td><input type="text" style="width:250px" name="residential_add" value="<?=$residential_add;?>"></td>
                  </tr>
                  <tr>
                     <td>ZIP Code: </td>
                     <td><input type="text" style="width:250px" name="zip_code1" value="<?=$zip_code1;?>"></td>
                  </tr>
                  <tr>
                     <td>Telephone No.: </td>
                     <td><input type="text" style="width:250px" name="telephone_no1" value="<?=$telephone_no1;?>"></td>
                  </tr>
                  <tr>
                     <td>Permanent Address: </td>
                     <td><input type="text" style="width:250px" name="permanent_add" value="<?=$permanent_add;?>"></td>
                  </tr>
                  <tr>
                     <td>ZIP Code: </td>
                     <td><input type="text" style="width:250px" name="zip_code2" value="<?=$zip_code2;?>"></td>
                  </tr>
                  <tr>
                     <td>Telephone No.: </td>
                     <td><input type="text" style="width:250px" name="telephone_no2" value="<?=$telephone_no2;?>"></td>
                  </tr>
            
                  <tr>
                     <td>Email Address: </td>
                     <td><input type="text" style="width:250px"  name="email_address" value="<?=$email_address;?>">*</td>
                  </tr>
                  <tr>
                     <td>Cellphone No.: </td>
                     <td><input type="text" style="width:250px" name="cellphone_no" value="<?=$cellphone_no;?>">*</td>
                  </tr>
                  <tr>
                     <td>Agency Employee No.: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="agency_employee_no" value="<?=$agency_employee_no;?>"></td>
                  </tr>
                  <tr>
                     <td>TIN: </td>
                     <td><input type="text" style="width:250px" readonly="true" name="tin" value="<?=$tin;?>"></td>
                  </tr>
               </table>
            </td>
         </table>
         <table id="title_fam_bg" style="width:100%; font-size:18px"><tr><td>II. Family Background</td></tr></table>   
         <table id="pds_border" style="width:100%">
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Spouse's Last Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_last_name" value="<?=$spouse_last_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Spouse's First Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_first_name" value="<?=$spouse_first_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Spouse's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_middle_name" value="<?=$spouse_middle_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Occupation: </td>
                     <td><input type="text" style="width:240px" name="occupation" value="<?=$occupation;?>"></td>
                  </tr>
                  <tr>
                     <td></td>
                  </tr>
                  <tr>
                     <td>Father's Last Name: </td>
                     <td><input type="text" style="width:240px" name="father_last_name" value="<?=$father_last_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Father's First Name: </td>
                     <td><input type="text" style="width:240px" name="father_first_name" value="<?=$father_first_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Father's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="father_middle_name" value="<?=$father_middle_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" style="width:240px" name="father_birth_date" value="<?=$father_birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td>&nbsp</td>
                     <td>&nbsp</td>
                  </tr>
                  <tr>
                     <td>&nbsp</td>
                  </tr>
                  <tr>
                     <td>Mother's Maiden Name: </td>
                     <td><input type="text" style="width:240px" name="mother_maiden_name" value="<?=$mother_maiden_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Mother's Last Name: </td>
                     <td><input type="text" style="width:240px" name="mother_last_name" value="<?=$mother_last_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Mother's First Name: </td>
                     <td><input type="text" style="width:240px" name="mother_first_name" value="<?=$mother_first_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Mother's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="mother_middle_name" value="<?=$mother_middle_name;?>"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" style="width:240px" name="mother_birth_date" value="<?=$mother_birth_date;?>"></td>
                  </tr>
               </table>
            </td>
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Employer/Bus. Name: </td>
                     <td><input type="text" style="width:240px" name="employer_bus_name" value="<?=$employer_bus_name;?>"></td>
                  </tr>
                  <tr>            
                     <td>Business Address: </td>
                     <td><input type="text" style="width:240px" name="business_address" value="<?=$business_address;?>"></td>
                  </tr>
                  <tr>
                     <td>Tel./CellPhone No.: </td>
                     <td><input type="text" style="width:240px" name="spouse_cp_no" value="<?=$spouse_cp_no;?>"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" style="width:240px" name="spouse_birth_date" value="<?=$spouse_birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td>&nbsp</td>
                     <td>&nbsp</td>
                  </tr>
                  <tr>
                     <td style="text-align:center">Name of Children<span style="font-size:12px">(write in full and list all)</span></td>
                     <td style="text-align:center">Date of Birth</td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name1" value="<?=$child_name1;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date1" value="<?=$child_birth_date1;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name2" value="<?=$child_name2;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date2" value="<?=$child_birth_date2;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name3" value="<?=$child_name3;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date3" value="<?=$child_birth_date3;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name4" value="<?=$child_name4;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date4" value="<?=$child_birth_date4;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name5" value="<?=$child_name5;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date5" value="<?=$child_birth_date5;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name6" value="<?=$child_name6;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date6" value="<?=$child_birth_date6;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name7" value="<?=$child_name7;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date7" value="<?=$child_birth_date7;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name8" value="<?=$child_name8;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date8" value="<?=$child_birth_date8;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name9" value="<?=$child_name9;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date9" value="<?=$child_birth_date9;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name10" value="<?=$child_name10;?>"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date10" value="<?=$child_birth_date10;?>"></td>
                  </tr>
               </table>
            </td>
         </table>
         <table id="title_fam_bg" style="width:100%; font-size:18px"><tr><td>III. Educational Background</td></tr></table>
         <table id="pds_border" style="width:100%">
            <tr>
              <th rowspan="2" scope="colgroup">Level</th>
              <th rowspan="2" scope="colgroup">Name of School<br/><span style="font-size:12px"><center>(write in full)</center></span></th>
              <th rowspan="2" scope="colgroup">Degree Course<br/><span style="font-size:12px"><center>(write in full)</center></span></th>
              <th rowspan="2" scope="colgroup">Year<br/>Graduated<br/><span style="font-size:12px"><center>(if graduated)</center></span></th>
              <th rowspan="2" scope="colgroup">Highest Grade/<br/>Level/<br/>Units Earned<br/><span style="font-size:12px"><center>(if not graduated)</center></span></th>
              <th colspan="2" scope="colgroup">Inclusive<br/>Dates of<br/>Attendance</th>
              <th rowspan="2" scope="colgroup">Scholarship/<br/>Academic Honors<br/>Received</th>
            </tr>
            <tr>
              <th scope="col">From</th>
              <th scope="col">To</th>
            </tr>
            <tr>
              <th>Elementary: </th>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="primary_name" value="<?=$primary_name;?>"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="primary_deg_course" value="<?=$primary_deg_course;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="primary_year_grad" value="<?=$primary_year_grad;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="primary_highest_grade" value="<?=$primary_highest_grade;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="primary_attendance_from" value="<?=$primary_attendance_from;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="primary_attendance_to" value="<?=$primary_attendance_to;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="primary_academic" value="<?=$primary_academic;?>"></td>
            </tr>
            <tr>
              <th>Secondary: </th>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="secondary_name" value="<?=$secondary_name;?>"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="secondary_deg_course" value="<?=$secondary_deg_course;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="secondary_year_grad" value="<?=$secondary_year_grad;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="secondary_highest_grade" value="<?=$secondary_highest_grade;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="secondary_attendance_from" value="<?=$secondary_attendance_from;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="secondary_attendance_to" value="<?=$secondary_attendance_to;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="secondary_academic" value="<?=$secondary_academic;?>"></td>
            </tr>
            <tr>
              <th>College: </th>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="college_name" value="<?=$college_name;?>"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="college_deg_course" value="<?=$college_deg_course;?>">*</td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="college_year_grad" value="<?=$college_year_grad;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="college_highest_grade" value="<?=$college_highest_grade;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_from" value="<?=$college_attendance_from;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_to" value="<?=$college_attendance_to;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="college_academic" value="<?=$college_academic;?>"></td>
            </tr>
            <tr>
              <th>Graduate Studies: </th>
                <td><input type="text" rows="4" cols="40" placeholder="--write in full--" style="width:200px" name="grad_studies_name" value="<?=$grad_studies_name;?>"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Masteral" style="width:200px" name="grad_deg_course" value="<?=$grad_deg_course;?>">*</td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year" value="<?=$grad_studies_year;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade" value="<?=$grad_studies_highest_grade;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from" value="<?=$grad_attendance_from;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to" value="<?=$grad_attendance_to;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic" value="<?=$grad_studies_academic;?>"></td>
            </tr>
            <tr>
              <th></th>
                <td><input type="text" rows="4" cols="40" placeholder="--write in full--" style="width:200px" name="grad_studies_name1" value="<?=$grad_studies_name1;?>"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Doctorate" style="width:200px" name="grad_deg_course1" value="<?=$grad_deg_course1;?>">*</td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year1" value="<?=$grad_studies_year1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade1" value="<?=$grad_studies_highest_grade1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from1" value="<?=$grad_attendance_from1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to1" value="<?=$grad_attendance_to1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic1" value="<?=$grad_studies_academic1;?>"></td>
            </tr>
         </table>
      </div>
      <center><h2>Confirmation: Please Enter your password to continue!</h2>
         <div class="fields">
            <input type="password" name="password" placeholder="Password"
                    style="width: 250px">
         </div></center>
      <div class ="submit">
      <span style="text-align:center; color: red"><h4><?php echo $error; ?></h4></span>
         <ul>
            <li>
               <input type="submit" style="width:100px; height:30px; font-size:16px" name="submit" value="Update"></td>
               <input type="button" style="width:100px; height:30px; 
                     font-size:16px" onclick="window.location.replace('home.php')"
                     name="cancel" value="Cancel"></td>
            </li>
         </ul>
      </div>
      <br/>
   </form>
   </div>
   </div>
   <div class="rsidebar"></div>
  </section>
</body>
<?php
  include('footer_user.php');
?>
</html>
