<?php
// Connect to server and select database.
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
mysql_select_db("employee_record", $conn);

$employee_id = $_POST['employee_id'];
  $department = $_POST['department'];
  $date_employed = $_POST['date_employed'];
  $position = $_POST['position'];
  $employee_status = $_POST['employee_status'];
  $employment_status = $_POST['employment_status'];
  $teaching_discipline = $_POST['teaching_discipline'];
  $prof_license = $_POST['prof_license'];
  $tenure_employment = $_POST['tenure_employment'];
  $faculty_rank = $_POST['faculty_rank'];
  $teaching_load = $_POST['teaching_load'];
  $subjects_taught = $_POST['subjects_taught'];
  $last_name = $_POST['last_name'];
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $name_extension = $_POST['name_extension'];
  $birth_date = $_POST['birth_date'];
  $sex = $_POST['sex'];
  $civil_status = $_POST['civil_status'];
  $citizenship = $_POST['citizenship'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $blood_type = $_POST['blood_type'];
  $birth_place = $_POST['birth_place'];
  $residential_add = $_POST['residential_add'];
  $zip_code1 = $_POST['zip_code1'];
  $telephone_no1 = $_POST['telephone_no1'];
  $permanent_add = $_POST['permanent_add'];
  $zip_code2 = $_POST['zip_code2'];
  $telephone_no2 = $_POST['telephone_no2'];
  $email_address = $_POST['email_address'];
  $cellphone_no = $_POST['cellphone_no'];
  $agency_employee_no = $_POST['agency_employee_no'];
  $spouse_last_name = $_POST['spouse_last_name'];
  $spouse_first_name = $_POST['spouse_first_name'];
  $spouse_middle_name = $_POST['spouse_middle_name'];
  $occupation = $_POST['occupation'];
  $employer_bus_name = $_POST['employer_bus_name'];
  $business_address = $_POST['business_address'];
  $spouse_cp_no = $_POST['spouse_cp_no'];
  $spouse_birth_date = $_POST['spouse_birth_date'];
  $child_name1 = $_POST['child_name1'];
  $child_birth_date1 = $_POST['child_birth_date1'];
  $child_name2 = $_POST['child_name2'];
  $child_birth_date2 = $_POST['child_birth_date2'];
  $child_name3 = $_POST['child_name3'];
  $child_birth_date3 = $_POST['child_birth_date3'];
  $child_name4 = $_POST['child_name4'];
  $child_birth_date4 = $_POST['child_birth_date4'];
  $child_name5 = $_POST['child_name5'];
  $child_birth_date5 = $_POST['child_birth_date5'];
  $child_name6 = $_POST['child_name6'];
  $child_birth_date6 = $_POST['child_birth_date6'];
  $child_name7 = $_POST['child_name7'];
  $child_birth_date7 = $_POST['child_birth_date7'];
  $child_name8 = $_POST['child_name8'];
  $child_birth_date8 = $_POST['child_birth_date8'];
  $child_name9 = $_POST['child_name9'];
  $child_birth_date9 = $_POST['child_birth_date9'];
  $child_name10 = $_POST['child_name10'];
  $child_birth_date10 = $_POST['child_birth_date10'];
  $father_last_name = $_POST['father_last_name'];
  $father_first_name = $_POST['father_first_name'];
  $father_middle_name = $_POST['father_middle_name'];
  $father_birth_date = $_POST['father_birth_date'];
  $mother_maiden_name = $_POST['mother_maiden_name'];
  $mother_last_name = $_POST['mother_last_name'];
  $mother_first_name = $_POST['mother_first_name'];
  $mother_middle_name = $_POST['mother_middle_name'];
  $mother_birth_date = $_POST['mother_birth_date'];

  $primary_name = $_POST['primary_name'];
  $primary_deg_course = $_POST['primary_deg_course'];
  $primary_year_grad = $_POST['primary_year_grad'];
  $primary_highest_grade = $_POST['primary_highest_grade'];
  $primary_attendance_from = $_POST['primary_attendance_from'];
  $primary_attendance_to = $_POST['primary_attendance_to'];
  $primary_academic = $_POST['primary_academic'];

  $secondary_name = $_POST['secondary_name'];
  $secondary_deg_course = $_POST['secondary_deg_course'];
  $secondary_year_grad = $_POST['secondary_year_grad'];
  $secondary_highest_grade = $_POST['secondary_highest_grade'];
  $secondary_attendance_from = $_POST['secondary_attendance_from'];
  $secondary_attendance_to = $_POST['secondary_attendance_to'];
  $secondary_academic = $_POST['secondary_academic'];

  $college_name = $_POST['college_name'];
  $college_deg_course = $_POST['college_deg_course'];
  $college_year_grad = $_POST['college_year_grad'];
  $college_highest_grade = $_POST['college_highest_grade'];
  $college_attendance_from = $_POST['college_attendance_from'];
  $college_attendance_to = $_POST['college_attendance_to'];
  $college_academic = $_POST['college_academic'];
  $grad_studies_name = $_POST['grad_studies_name'];
  $grad_deg_course = $_POST['grad_deg_course'];
  $grad_studies_year = $_POST['grad_studies_year'];
  $grad_studies_highest_grade = $_POST['grad_studies_highest_grade'];
  $grad_attendance_from = $_POST['grad_attendance_from'];
  $grad_attendance_to = $_POST['grad_attendance_to'];
  $grad_studies_academic = $_POST['grad_studies_academic'];
  $grad_studies_name1 = $_POST['grad_studies_name1'];
  $grad_deg_course1 = $_POST['grad_deg_course1'];
  $grad_studies_year1 = $_POST['grad_studies_year1'];
  $grad_studies_highest_grade1 = $_POST['grad_studies_highest_grade1'];
  $grad_attendance_from1 = $_POST['grad_attendance_from1'];
  $grad_attendance_to1 = $_POST['grad_attendance_to1'];
  $grad_studies_academic1 = $_POST['grad_studies_academic1'];

  $employee_id = mysql_real_escape_string($employee_id);
  $department = mysql_real_escape_string($department);
  $date_employed = mysql_real_escape_string($date_employed);
  $position = mysql_real_escape_string($position);
  $employee_status = mysql_real_escape_string($employee_status);
  $employment_status = mysql_real_escape_string($employment_status);
  $teaching_discipline = mysql_real_escape_string($teaching_discipline);
  $prof_license = mysql_real_escape_string($prof_license);
  $tenure_employment = mysql_real_escape_string($tenure_employment);
  $faculty_rank = mysql_real_escape_string($faculty_rank);
  $teaching_load = mysql_real_escape_string($teaching_load);
  $subjects_taught = mysql_real_escape_string($subjects_taught);
  $last_name = mysql_real_escape_string($last_name);
  $first_name = mysql_real_escape_string($first_name);
  $middle_name = mysql_real_escape_string($middle_name);
  $name_extension = mysql_real_escape_string($name_extension);
  $birth_date = mysql_real_escape_string($birth_date);
  $sex = mysql_real_escape_string($sex);
  $civil_status = mysql_real_escape_string($civil_status);
  $citizenship = mysql_real_escape_string($citizenship);
  $height = mysql_real_escape_string($height);
  $weight = mysql_real_escape_string($weight);
  $blood_type = mysql_real_escape_string($blood_type);
  $birth_place = mysql_real_escape_string($birth_place);
  $residential_add = mysql_real_escape_string($residential_add);
  $zip_code1 = mysql_real_escape_string($zip_code1);
  $telephone_no1 = mysql_real_escape_string($telephone_no1);
  $permanent_add = mysql_real_escape_string($permanent_add);
  $zip_code2 = mysql_real_escape_string($zip_code2);
  $telephone_no2 = mysql_real_escape_string($telephone_no2);
  $email_address = mysql_real_escape_string($email_address);
  $cellphone_no = mysql_real_escape_string($cellphone_no);
  $agency_employee_no = mysql_real_escape_string($agency_employee_no);
  $spouse_last_name = mysql_real_escape_string($spouse_last_name);
  $spouse_first_name = mysql_real_escape_string($spouse_first_name);
  $spouse_middle_name = mysql_real_escape_string($spouse_middle_name);
  $occupation = mysql_real_escape_string($occupation);
  $employer_bus_name = mysql_real_escape_string($employer_bus_name);
  $business_address = mysql_real_escape_string($business_address);
  $spouse_cp_no = mysql_real_escape_string($spouse_cp_no);
  $spouse_birth_date = mysql_real_escape_string($spouse_birth_date);
  $child_name1 = mysql_real_escape_string($child_name1);
  $child_birth_date1 = mysql_real_escape_string($child_birth_date1);
  $child_name2 = mysql_real_escape_string($child_name2);
  $child_birth_date2 = mysql_real_escape_string($child_birth_date2);
  $child_name3 = mysql_real_escape_string($child_name3);
  $child_birth_date3 = mysql_real_escape_string($child_birth_date3);
  $child_name4 = mysql_real_escape_string($child_name4);
  $child_birth_date4 = mysql_real_escape_string($child_birth_date4);
  $child_name5 = mysql_real_escape_string($child_name5);
  $child_birth_date5 = mysql_real_escape_string($child_birth_date5);
  $child_name6 = mysql_real_escape_string($child_name6);
  $child_birth_date6 = mysql_real_escape_string($child_birth_date6);
  $child_name7 = mysql_real_escape_string($child_name7);
  $child_birth_date7 = mysql_real_escape_string($child_birth_date7);
  $child_name8 = mysql_real_escape_string($child_name8);
  $child_birth_date8 = mysql_real_escape_string($child_birth_date8);
  $child_name9 = mysql_real_escape_string($child_name9);
  $child_birth_date9 = mysql_real_escape_string($child_birth_date9);
  $child_name10 = mysql_real_escape_string($child_name10);
  $child_birth_date10 = mysql_real_escape_string($child_birth_date10);
  $father_last_name = mysql_real_escape_string($father_last_name);
  $father_first_name = mysql_real_escape_string($father_first_name);
  $father_middle_name = mysql_real_escape_string($father_middle_name);
  $father_birth_date = mysql_real_escape_string($father_birth_date);
  $mother_maiden_name = mysql_real_escape_string($mother_maiden_name);
  $mother_last_name = mysql_real_escape_string($mother_last_name);
  $mother_first_name = mysql_real_escape_string($mother_first_name);
  $mother_middle_name = mysql_real_escape_string($mother_middle_name);
  $mother_birth_date = mysql_real_escape_string($mother_birth_date);

  $primary_name = mysql_real_escape_string($primary_name);
  $primary_deg_course = mysql_real_escape_string($primary_deg_course);
  $primary_year_grad = mysql_real_escape_string($primary_year_grad);
  $primary_highest_grade = mysql_real_escape_string($primary_highest_grade);
  $primary_attendance_from = mysql_real_escape_string ($primary_attendance_from);
  $primary_attendance_to = mysql_real_escape_string ($primary_attendance_to);
  $primary_academic = mysql_real_escape_string($primary_academic);

  $secondary_name = mysql_real_escape_string($secondary_name);
  $secondary_deg_course = mysql_real_escape_string($secondary_deg_course);
  $secondary_year_grad = mysql_real_escape_string($secondary_year_grad);
  $secondary_highest_grade = mysql_real_escape_string($secondary_highest_grade);
  $secondary_attendance_from = mysql_real_escape_string ($secondary_attendance_from);
  $secondary_attendance_to = mysql_real_escape_string ($secondary_attendance_to);
  $secondary_academic = mysql_real_escape_string($secondary_academic);
  
  $college_name = mysql_real_escape_string($college_name);
  $college_deg_course = mysql_real_escape_string($college_deg_course);
  $college_year_grad = mysql_real_escape_string($college_year_grad);
  $college_highest_grade = mysql_real_escape_string($college_highest_grade);
  $college_attendance_from = mysql_real_escape_string ($college_attendance_from);
  $college_attendance_to = mysql_real_escape_string ($college_attendance_to);
  $college_academic = mysql_real_escape_string($college_academic);
  $grad_studies_name = mysql_real_escape_string($grad_studies_name);
  $grad_deg_course = mysql_real_escape_string($grad_deg_course);
  $grad_studies_year = mysql_real_escape_string($grad_studies_year);
  $grad_studies_highest_grade = mysql_real_escape_string($grad_studies_highest_grade);
  $grad_attendance_from = mysql_real_escape_string ($grad_attendance_from);
  $grad_attendance_to = mysql_real_escape_string ($grad_attendance_to);
  $grad_studies_academic = mysql_real_escape_string($grad_studies_academic);
  $grad_studies_name1 = mysql_real_escape_string($grad_studies_name1);
  $grad_deg_course1 = mysql_real_escape_string($grad_deg_course1);
  $grad_studies_year1 = mysql_real_escape_string($grad_studies_year1);
  $grad_studies_highest_grade1 = mysql_real_escape_string($grad_studies_highest_grade1);
  $grad_attendance_from1 = mysql_real_escape_string ($grad_attendance_from1);
  $grad_attendance_to1 = mysql_real_escape_string ($grad_attendance_to1);
  $grad_studies_academic1 = mysql_real_escape_string($grad_studies_academic1);


$sql="UPDATE record SET  
    last_name= '".$_POST['last_name']."', 
    first_name= '".$_POST['first_name']."',
    middle_name= '".$_POST['middle_name']."', 
    name_extension= '".$_POST['name_extension']."', 
  	teaching_discipline= '".$_POST['teaching_discipline']."', 
    prof_license= '".$_POST['prof_license']."', 
    tenure_employment= '".$_POST['tenure_employment']."', 
    faculty_rank= '".$_POST['faculty_rank']."', 
    teaching_load= '".$_POST['teaching_load']."', 
    subjects_taught= '".$_POST['subjects_taught']."', 
    birth_date= '".$_POST['birth_date']."', 
    sex= '".$_POST['sex']."', 
    civil_status= '".$_POST['civil_status']."', 
    citizenship= '".$_POST['citizenship']."', 
    height= '".$_POST['height']."', 
    weight= '".$_POST['weight']."',
  	blood_type= '".$_POST['blood_type']."', 
    birth_place= '".$_POST['birth_place']."',
  	residential_add= '".$_POST['residential_add']."', 
    permanent_add= '".$_POST['permanent_add']."', 
    zip_code1= '".$_POST['zip_code1']."', 
    zip_code2= '".$_POST['zip_code2']."', 
    telephone_no1= '".$_POST['telephone_no1']."', 
    telephone_no2= '".$_POST['telephone_no2']."', 
    email_address= '".$_POST['email_address']."', 
    cellphone_no= '".$_POST['cellphone_no']."',
    agency_employee_no= '".$_POST['agency_employee_no']."', 
    spouse_last_name= '".$_POST['spouse_last_name']."', 
    spouse_first_name= '".$_POST['spouse_first_name']."', 
    spouse_middle_name= '".$_POST['spouse_middle_name']."',
  	occupation= '".$_POST['occupation']."', 
    employer_bus_name= '".$_POST['employer_bus_name']."', 
    business_address= '".$_POST['business_address']."', 
    spouse_cp_no= '".$_POST['spouse_cp_no']."', 
    spouse_birth_date= '".$_POST['spouse_birth_date']."',
  	child_name1= '".$_POST['child_name1']."', 
    child_birth_date1= '".$_POST['child_birth_date1']."',
    child_name2= '".$_POST['child_name2']."', 
    child_birth_date2= '".$_POST['child_birth_date2']."',
    child_name3= '".$_POST['child_name3']."', 
    child_birth_date3= '".$_POST['child_birth_date3']."',
    child_name4= '".$_POST['child_name4']."', 
    child_birth_date4= '".$_POST['child_birth_date4']."',
    child_name5= '".$_POST['child_name5']."', 
    child_birth_date5= '".$_POST['child_birth_date5']."',
    child_name6= '".$_POST['child_name6']."', 
    child_birth_date6= '".$_POST['child_birth_date6']."',
    child_name7= '".$_POST['child_name7']."', 
    child_birth_date7= '".$_POST['child_birth_date7']."',
    child_name8= '".$_POST['child_name8']."', 
    child_birth_date8= '".$_POST['child_birth_date8']."',
    child_name9= '".$_POST['child_name9']."', 
    child_birth_date9= '".$_POST['child_birth_date9']."',
    child_name10= '".$_POST['child_name10']."', 
    child_birth_date10= '".$_POST['child_birth_date7']."',
    father_last_name= '".$_POST['father_last_name']."', 
    father_first_name= '".$_POST['father_first_name']."', 
    father_middle_name= '".$_POST['father_middle_name']."',
  	father_birth_date= '".$_POST['father_birth_date']."', 
    mother_last_name= '".$_POST['mother_last_name']."', 
    mother_maiden_name= '".$_POST['mother_maiden_name']."', 
    mother_first_name= '".$_POST['mother_first_name']."', 
    mother_middle_name= '".$_POST['mother_middle_name']."',
  	mother_birth_date= '".$_POST['mother_birth_date']."', 
     

    primary_name= '".$_POST['primary_name']."', 
    primary_deg_course= '".$_POST['primary_deg_course']."', 
    primary_year_grad= '".$_POST['primary_year_grad']."', 
    primary_highest_grade= '".$_POST['primary_highest_grade']."',
    primary_attendance_to= '".$_POST['primary_attendance_to']."', 
    primary_attendance_from= '".$_POST['primary_attendance_from']."',
    primary_academic= '".$_POST['primary_academic']."',

    secondary_name= '".$_POST['secondary_name']."', 
    secondary_deg_course= '".$_POST['secondary_deg_course']."', 
    secondary_year_grad= '".$_POST['secondary_year_grad']."', 
    secondary_highest_grade= '".$_POST['secondary_highest_grade']."',
    secondary_attendance_to= '".$_POST['secondary_attendance_to']."', 
    secondary_attendance_from= '".$_POST['secondary_attendance_from']."',
    secondary_academic= '".$_POST['secondary_academic']."',

    college_name= '".$_POST['college_name']."', 
    college_deg_course= '".$_POST['college_deg_course']."', 
    college_year_grad= '".$_POST['college_year_grad']."', 
    college_highest_grade= '".$_POST['college_highest_grade']."',
    college_attendance_to= '".$_POST['college_attendance_to']."', 
    college_attendance_from= '".$_POST['college_attendance_from']."',
    college_academic= '".$_POST['college_academic']."',

    grad_studies_name= '".$_POST['grad_studies_name']."', 
    grad_deg_course= '".$_POST['grad_deg_course']."', 
    grad_studies_year= '".$_POST['grad_studies_year']."', 
    grad_studies_highest_grade= '".$_POST['grad_studies_highest_grade']."',
  	grad_studies_academic= '".$_POST['grad_studies_academic']."', 
    grad_attendance_from= '".$_POST['grad_attendance_from']."', 
    grad_attendance_to= '".$_POST['grad_attendance_to']."', 
    grad_studies_name1= '".$_POST['grad_studies_name1']."', 
    grad_deg_course1= '".$_POST['grad_deg_course1']."', 
    grad_studies_year1= '".$_POST['grad_studies_year1']."', 
    grad_studies_highest_grade1= '".$_POST['grad_studies_highest_grade1']."',
    grad_studies_academic1= '".$_POST['grad_studies_academic1']."', 
    grad_attendance_from1= '".$_POST['grad_attendance_from1']."', 
    grad_attendance_to1= '".$_POST['grad_attendance_to1']."'
    WHERE employee_id='".$_POST['employee_id']."'";
$result=mysql_query($sql) or die ('Could not enter data: ' . mysql_error());


// if successfully updated. 
if($result){

echo "<meta http-equiv='refresh' content='1;URL=profile.php'/><h1>Na-update mo!</h1></a>";
}

else {
echo "UUYYYY, Nun-Error";
}

?>