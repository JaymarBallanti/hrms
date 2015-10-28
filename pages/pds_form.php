<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Add Employee</title>
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
      <br/>
      <br/>
      <br/>      
   <form action="../save_pds.php" ENCTYPE="multipart/form-data" method="post">
      <table id="title_fam_bg" style="width:100%; font-size:18px"><tr><td>Basic Information</td></tr></table>
      <div class="pds_fields">
         <table id="pds_border" style="width:100%">
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Employee ID: </td>
                     <td><input type="text" style="width:180px" name="employee_id">*</td>
                     <td>Department: </td>
                     <td><select name="department" style="width:180px">
                        <option value="Engineering and Technology" name="eng_tech">Engineering and Technology</option>
                        <option value="Business Management" name="bus_mgt">Business Management</option>
                        <option value="Teacher Education" name="t_educ">Teacher Education</option>
                        <option value="Administration" name="administ">Administration</option>
                        </select>*
                     </td>
                  </tr>
                  <tr>
                     <td>Date of Employment: </td>
                     <td><input type="date" placeholder="yyyy-mm-dd" style="width:180px" name="date_employed">*</td>
                     <td>Employee Status: </td>
                     <td><select name="employee_status" style="width:180px">
                        <option value="Active">Active</option>
                        <option value="On Leave">On Leave</option>
                        <option value="Inactive">Inactive</option>
                        </select>*
                     </td>
                  </tr>
                  <tr>
                     <td>Position: </td>
                     <td><input type="text" style="width:180px" name="position">*</td>
                     <td>Employment Status: </td>
                     <td><select name="employment_status" style="width:180px">
                        <option value="FT">FT</option>
                        <option value="PT">PT</option>
                        </select>*
                     </td>
                  </tr>
                  <tr>
                     <td>Primary Teaching Discipline: </td>
                     <td><input type="text" placeholder="use Code" style="width:180px" name="teaching_discipline">*</td>
                     <td>Professional License: </td>
                     <td><input type="text" placeholder="use Code" style="width:180px" name="prof_license">*</td>
                  </tr>
                  <tr>
                     <td>Tenure of Employment: </td>
                     <td><input type="text" placeholder="use Code" style="width:180px" name="tenure_employment">*</td>
                     <td>Faculty Rank: </td>
                     <td><input type="text" placeholder="use Code" style="width:180px" name="faculty_rank">*</td>
                  </tr>
                  <tr>
                     <td>Teaching Load: </td>
                     <td><input type="text" placeholder="use Code" style="width:180px" name="teaching_load">*</td>
                     <td>Subjects Taught: </td>
                     <td><input type="text" name="subjects_taught" rows="5" cols="50" style="width:180px">*</td>
                  </tr>
                  <tr>
                     <td><input type="hidden" name="role" rows="5"  value="Client"cols="50" style="width:180px"></td>
                     </td>
                  </tr>
               </table>
            </td>
            <td>
               <script type="text/javascript">

                  var loadFile = function(event) {
                      var output = document.getElementById('output');
                      output.src = URL.createObjectURL(event.target.files[0]);
                    };
               </script>
               <table style="width:100%">
                  <tr>
                     <td>Profile Picture: </td>
                  </tr>
                  <tr>
                     <td><input type="file" name="user_pics" accept="image/*" onchange="loadFile(event)"></td>
                     <img id="output" name="user_pics" style="width:180px; length:180px"/>
                  </tr>
               </table>
            </td>
         </table>
      </div>     
      <div class="pds_fields"><p>Personal Data Sheet</p>
         <table id="title_fam_bg" style="width:100%; font-size:18px"><tr><td>I. Personal Information</td></tr></table>
         <table id="pds_border" style="width:100%">
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Last Name: </td>
                     <td><input type="text" style="width:250px" name="last_name">*</td>
                  </tr>
                  <tr>
                     <td>First Name: </td>
                     <td><input type="text" style="width:250px" name="first_name">*</td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" format="yyyy-mm-dd" placeholder="yyyy-mm-dd" 
                        style="width:250px" name="birth_date">*</td>
                  </tr>
                  <tr>
                     <td>Sex: </td>
                     <td><select name="sex" style="width:250px">
                        <option value="Male">M</option>
                        <option value="Female">F</option>
                        </select>*
                     </td>
                  </tr>
                  <tr>
                     <td>Civil Status: </td>
                     <td><select name="civil_status" style="width:250px">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Annulled">Annulled</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Others">Others</option>
                        </select>*</td>
                  </tr>
                  <tr>
                     <td>Citizenship: </td>
                     <td><input type="text" style="width:250px" name="citizenship">*</td>
                  </tr>
                  <tr>
                     <td>Height(m): </td>
                     <td><input type="text" style="width:250px" name="height" id="height"></td>
                  </tr>
                  <tr>
                     <td>Weight(kg): </td>
                     <td><input type="text" style="width:250px" name="weight" id="weight"></td>
                  </tr>
                  <tr>
                     <td>Blood Type: </td>
                     <td><input type="text" style="width:250px" name="blood_type" ></td>
                  </tr>
                  <tr>
                     <td>GSIS ID No.: </td>
                     <td><input type="text" style="width:250px" name="gsis_no" ></td>
                  </tr>
                  <tr>           
                     <td>PAG-IBIG ID No.: </td>
                     <td><input type="text" style="width:250px" name="pagibig_no" ></td>
                  </tr>
                  <tr>
                     <td>PHILHEALTH No.: </td>
                     <td><input type="text" style="width:250px" name="phil_health_no" ></td>
                  </tr>
                  <tr>
                     <td>SSS No.: </td>
                     <td><input type="text" style="width:250px" name="sss_no"></td>
                  </tr>
               </table>
            </td>
            <td style="padding-left:60px">
               <table style="width:100%">
                  <tr>
                     <td>Midle Name: </td>
                     <td><input type="text" style="width:250px" name="middle_name">*</td>
                  </tr>
                  <tr>
                     <td>Name Extension: </td>
                     <td><input type="text" style="width:250px" name="ename"></td>
                  </tr>
                  <tr>
                     <td>Place of Birth: </td>
                     <td><input type="text" style="width:250px" name="birth_place">*</td>
                  </tr>
                  <tr>
                     <td><span style="color:blue">Residential Address: </span></td>
                     <td><input type="text" style="width:250px" name="residential_add" id="res_address">*</td>
                  </tr>
                  <tr>
                     <td><span style="color:blue">ZIP Code: </span></td>
                     <td><input type="text" style="width:250px" name="zip_code1" id="zip_code1"></td>
                  </tr>
                  <tr>
                     <td><span style="color:blue">Telephone No.: </span></td>
                     <td><input type="text" style="width:250px" name="telephone_no1" id="tel_no1"></td>
                  </tr>
                  <tr>
                     <td><span style="color:purple">Permanent Address: </span></td>
                     <td><input type="text" style="width:250px" name="permanent_add" id="perma_address">*</td>
                  </tr>
                  <tr>
                     <td><span style="color:purple">ZIP Code: </span></td>
                     <td><input type="text" style="width:250px" name="zip_code2" id="zip_code2"></td>
                  </tr>
                  <tr>
                     <td><span style="color:purple">Telephone No.: </span></td>
                     <td><input type="text" style="width:250px" name="telephone_no2" id="tel_no2"></td>
                  </tr>
                  <tr>
                     <td>Email Address: </td>
                     <td><input type="text" style="width:250px" name="email_address" id="email">*</td>
                  </tr>
                  <tr>
                     <td>Cellphone No.: </td>
                     <td><input type="text" style="width:250px" name="cellphone_no" id="cp_no">*</td>
                  </tr>
                  <tr>
                     <td>Agency Employee No.: </td>
                     <td><input type="text" style="width:250px" name="agency_employee_no" id="agency_emp_no"></td>
                  </tr>
                  <tr>
                     <td>TIN: </td>
                     <td><input type="text" style="width:250px" name="tin" id="tip"></td>
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
                     <td></td>
                  </tr>
                  <tr>
                     <td>Father's Last Name: </td>
                     <td><input type="text" style="width:240px" name="father_last_name" id="father_lname"></td>
                  </tr>
                  <tr>
                     <td>Father's First Name: </td>
                     <td><input type="text" style="width:240px" name="father_first_name" id="father_fname"></td>
                  </tr>
                  <tr>
                     <td>Father's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="father_middle_name" id="father_mname"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" placeholder="yyyy-mm-dd" style="width:240px" name="father_birth_date"></td>
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
                     <td><input type="text" style="width:240px" name="mother_maiden_name"></td>
                  </tr>
                  <tr>
                     <td>Mother's Last Name: </td>
                     <td><input type="text" style="width:240px" name="mother_last_name"></td>
                  </tr>
                  <tr>
                     <td>Mother's First Name: </td>
                     <td><input type="text" style="width:240px" name="mother_first_name"></td>
                  </tr>
                  <tr>
                     <td>Mother's Middle Name: </td>
                     <td><input type="text" style="width:240px" name="mother_middle_name"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" placeholder="yyyy-mm-dd" style="width:240px" name="mother_birth_date"></td>
                  </tr>
               </table>
            </td>
            <td>
               <table style="width:100%">
                  <tr>
                     <td>Employer/Bus. Name: </td>
                     <td><input type="text" style="width:240px" name="employer_bus_name"></td>
                  </tr>
                  <tr>            
                     <td>Business Address: </td>
                     <td><input type="text" style="width:240px" name="business_address"></td>
                  </tr>
                  <tr>
                     <td>Tel./CellPhone No.: </td>
                     <td><input type="text" style="width:240px" name="spouse_cp_no"></td>
                  </tr>
                  <tr>
                     <td>Date of Birth: </td>
                     <td><input type="date" placeholder="yyyy-mm-dd" style="width:240px" name="spouse_birth_date"></td>
                  </tr>
                  <tr>
                     <td>&nbsp</td>
                     <td>&nbsp</td>
                  </tr>
                  <tr>
                     <td>Name of Children: <span style="font-size:12px">(write in full and list all)</span></td>
                     <td>Date of Birth: </td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child1"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date1"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child2"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date2"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child3" id="child3"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date3" id="child3_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child4" id="child4"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date4" id="child4_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child5" id="child5"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date5" id="child5_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child6" id="child6"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date6" id="child6_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child7" id="child7"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date7" id="child7_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child8" id="child8"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date8" id="child8_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child9" id="child9"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date9" id="child9_bday"></td>
                  </tr>
                  <tr>
                     <td><input type="text" style="width:240px" name="child10" id="child10"></td>
                     <td><input type="date" style="width:240px" name="child_birth_date10" id="child10_bday"></td>
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
                <td><input type="text" rows="2" cols="40" style="width:220px" name="primary_name"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="primary_deg_course"></td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="primary_year_grad"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="primary_highest_grade"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="primary_attendance_from"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="primary_attendance_to"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="primary_academic"></td>
            </tr>
            <tr>
              <th>Secondary: </th>
                <td><input type="text" rows="2" cols="40" style="width:220px" name="secondary_name"></td>
                <td><input type="text" rows="2" cols="40" placeholder="--write in full--" style="width:200px" name="secondary_deg_course"></td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="secondary_year_grad"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="secondary_highest_grade"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="secondary_attendance_from"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="secondary_attendance_to"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="secondary_academic"></td>
            </tr>
            <tr>
              <th>College: </th>
                <td><input type="text" rows="2" cols="40" style="width:220px" name="college_name"></td>
                <td><input type="text" rows="2" cols="40" placeholder="Baccalaureate" style="width:200px" name="college_deg_course">*</td>
                <td><input type="text" rows="2" cols="40" style="width:120px" name="college_year_grad"></td>
                <td><input type="text" rows="2" cols="40" style="width:130px" name="college_highest_grade"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_from"></td>
                <td><input type="text" rows="2" cols="40" style="width:50px" name="college_attendance_to"></td>
                <td><input type="text" rows="2" cols="40" style="width:200px" name="college_academic"></td>
            </tr>
            <tr>
              <th>Graduate Studies: </th>
                <td><input type="text" rows="4" cols="40" style="width:220px" name="grad_studies_name"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Master's" style="width:200px" name="grad_deg_course">*</td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic"></td>
            </tr>
            <tr>
              <th></th>
                <td><input type="text" rows="4" cols="40" style="width:220px" name="grad_studies_name1"></td>
                <td><input type="text" rows="4" cols="40" placeholder="Doctorate" style="width:200px" name="grad_deg_course1">*</td>
                <td><input type="text" rows="4" cols="40" style="width:120px" name="grad_studies_year1"></td>
                <td><input type="text" rows="4" cols="40" style="width:130px" name="grad_studies_highest_grade1"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_from1"></td>
                <td><input type="text" rows="4" cols="40" style="width:50px" name="grad_attendance_to1"></td>
                <td><input type="text" rows="4" cols="40" style="width:200px" name="grad_studies_academic1"></td>
            </tr>
         </table>      
      <div class ="submit">
         <ul>
            <li>
               <input type="submit" style="width:100px; height:30px; 
                     font-size:16px" name="submit" value="Save">
               <input type="button" style="width:100px; height:30px; 
                     font-size:16px" onclick="window.location.replace('employee_mgt.php')"
                     name="cancel" value="Cancel">
            </li>
         </ul>
      </div>
      <br/>
   </div>
   </div>
   </form>
  	<div class="rsidebar"></div>
  </section><br/>
  <?php
   include('footer.php');
   ?>
</div>
</body>
</html>
