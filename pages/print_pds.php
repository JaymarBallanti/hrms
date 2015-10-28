<html>
<head>
  <link type="text/css" rel="stylesheet" href="../css/style.css">
  <meta charset="utf-8">
<title>Print Employee Record</title>
</head>
</body>

  <?php
// Connect to server and select database.
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
#include('db_option.php');
mysql_select_db("employee_record", $conn);

$employee_id = $_GET['employee_id'];

$sql = "SELECT * FROM record WHERE employee_id = $employee_id";
$result=mysql_query($sql);

$retval = mysql_query( $sql, $conn );
    if(! $retval )
      {
      die('No Result Found!');
    } 

while($row = mysql_fetch_assoc($retval)) {
 
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
   <form name="record_update" method="post" action="../update_record.php">
   <div id="infotop_pds">
      <div class="form_title" style="width:100%; font-size:18px"><b><p><center>PDS Form</center></p></b>
         <table id="print_title_fam_bg" style="width:100%; font-size:18px"><tr><td><b>I. Personal Information</b></td></tr></table>
         <table id="print_pds_border" style="width:100%">
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
                     <td><input type="text" style="width:250px" name="birth_date" value="<?=$birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td>Sex: </td>
                     <td><input type="text" style="width:250px" name="sex" value="<?=$sex;?>"></td>
                  </tr>
                  <tr>
                     <td>Civil Status: </td>
                     <td><input type="text" style="width:250px" name="civil_status" value="<?=$civil_status;?>"></td>
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
                     <td><input type="text" style="width:250px" name="gsis_no" id="gsis_no" value="<?=$gsis_no;?>"></td>
                  </tr>
                  <tr>           
                     <td>PAG-IBIG ID No.: </td>
                     <td><input type="text" style="width:250px" name="pagibig_no" id="pagibig_no" value="<?=$pagibig_no;?>"></td>
                  </tr>
                  <tr>
                     <td>PHILHEALTH No.: </td>
                     <td><input type="text" style="width:250px" name="phil_health_no" value="<?=$phil_health_no;?>"></td>
                  </tr>
                  <tr>
                     <td>SSS No.: </td>
                     <td><input type="text" style="width:250px" name="sss_no" value="<?=$sss_no;?>"></td>
                  </tr>
               </table>
            </td>
            <td>
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
                     <td><input type="text" style="width:250px" name="email_address" value="<?=$email_address;?>"></td>
                  </tr>
                  <tr>
                     <td>Cellphone No.: </td>
                     <td><input type="text" style="width:250px" name="cellphone_no" value="<?=$cellphone_no;?>"></td>
                  </tr>
                  <tr>
                     <td>Agency Employee No.: </td>
                     <td><input type="text" style="width:250px" name="agency_employee_no" value="<?=$cellphone_no;?>"></td>
                  </tr>
                  <tr>
                     <td>TIN: </td>
                     <td><input type="text" style="width:250px" name="tin" value="<?=$tin;?>"></td>
                  </tr>
               </table>
            </td>
         </table>
         <table id="print_title_fam_bg" style="width:100%; font-size:18px"><tr><td><b>II. Family Background</b></td></tr></table>   
         <table id="print_pds_border" style="width:100%">
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Spouse's Last Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_last_name"></td>
                  </tr>
                  <tr>
                     <td>Spouse's First Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_first_name"></td>
                  </tr>
                  <tr>
                     <td>Spouse's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="spouse_middle_name"></td>
                  </tr>
                  <tr>
                     <td>Occupation: </td>
                     <td><input type="text" style="width:240px" name="occupation"></td>
                  </tr>
                  <tr>
                     <td><br/></td>
                     <td><br/></td>
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
                     <td><input type="text" style="width:240px" name="father_birth_date" value="<?=$father_birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td><br/></td>
                     <td><br/></td>
                  </tr>
                  <tr>
                     <td><br/></td>
                     <td><br/></td>
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
                     <td><input type="text" style="width:240px" name="mother_birth_date" value="<?=$mother_birth_date;?>"></td>
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
                     <td><input type="text" style="width:240px" name="spouse_birth_date" value="<?=$spouse_birth_date;?>"></td>
                  </tr>
                  <tr>
                     <td>&nbsp</td>
                     <td>&nbsp</td>
                  </tr>
                  <tr>
                     <td style="text-align:center">Name of Child/Children</td>
                     <td style="text-align:center">Date of Birth</td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name1" value="<?=$child_name1;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date1" value="<?=$child_birth_date1;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name2" value="<?=$child_name2;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date2" value="<?=$child_birth_date2;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name3" value="<?=$child_name3;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date3" value="<?=$child_birth_date3;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name4" value="<?=$child_name4;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date4" value="<?=$child_birth_date4;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name5" value="<?=$child_name5;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date5" value="<?=$child_birth_date5;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name6" value="<?=$child_name6;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date6" value="<?=$child_birth_date6;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name7" value="<?=$child_name7;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date7" value="<?=$child_birth_date7;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name8" value="<?=$child_name8;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date8" value="<?=$child_birth_date8;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name9" value="<?=$child_name9;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date9" value="<?=$child_birth_date9;?>"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:280px" name="child_name10" value="<?=$child_name10;?>"></td>
                     <td><input type="text" style="width:240px" name="child_birth_date10" value="<?=$child_birth_date10;?>"></td>
                  </tr>
               </table>
            </td>
         </table>
         <table id="print_title_fam_bg" style="width:100%; font-size:18px"><tr><td><b>III. Educational Bacground</b></td></tr></table>
         <table id="print_pds_border" style="width:100%">
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
              <th>College: </th>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="college_name" value="<?=$college_name;?>"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="college_deg_course" value="<?=$college_deg_course;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="college_year_grad" value="<?=$college_year_grad;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="college_highest_grade" value="<?=$college_highest_grade;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_from" value="<?=$college_attendance_from;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_to" value="<?=$college_attendance_to;?>"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="college_academic" value="<?=$college_academic;?>"></td>
            </tr>
            <tr>
              <th>Graduate Studies: </th>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_name" value="<?=$grad_studies_name;?>"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Masteral" style="width:200px" name="grad_deg_course" value="<?=$grad_deg_course;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year" value="<?=$grad_studies_year;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade" value="<?=$grad_studies_highest_grade;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from" value="<?=$grad_attendance_from;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to" value="<?=$grad_attendance_to;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic" value="<?=$grad_studies_academic;?>"></td>
            </tr>
            <tr>
              <th></th>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_name1" value="<?=$grad_studies_name1;?>"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Doctorate" style="width:200px" name="grad_deg_course1" value="<?=$grad_deg_course1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year1" value="<?=$grad_studies_year1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade1" value="<?=$grad_studies_highest_grade1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from1" value="<?=$grad_attendance_from1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to1" value="<?=$grad_attendance_to1;?>"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic1" value="<?=$grad_studies_academic1;?>"></td>
            </tr>
         </table>
      </div>
   </div>
   </form>
   <div class="rsidebar"></div>
  </section>
</body>
</html>
