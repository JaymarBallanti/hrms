<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Home</title>
</head>
<body>
<div id="container">
  <?php
  include('header_home.php');
  include('employee_mgt_menubar.php');
  ?>
  <section id="wrapper_em">
  	<div class="lsidebar">
      <div class="hris">
        <marquee direction="down" width="250" height="400" behavior="alternate" >
          <marquee behavior="alternate">
          <img src="../Icons/logo.png" style="height:150px; width:200px">
          </marquee></marquee>
      </div>
      </div>
  	<div class="content_emp_record">
      <div class="form">
      </div>
    </div>
  	<div class="rsidebar">
    <marquee behavior="scroll" direction="up" style="color:#002E0F;" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
        <h3>What is HRIS?</h3>
            <justify><p>&nbsp &nbsp&nbsp &nbsp A HRIS, which is also known as a human resource 
                information system or human resource management system (HRMS), 
                is basically an intersection of human resources and information 
                technology through HR software. This allows HR activities and 
                processes to occur electronically.</p></justify>

                <justify><p>&nbsp &nbsp&nbsp &nbspTo put it another way, a HRIS may be viewed 
                as a way, through software, for businesses big and small to take care of a 
                number of activities, including those related to human resources, accounting, 
                management, and payroll. A HRIS allows a company to plan its HR costs more effectively, 
                as well as to manage them and control them without needing to allocate 
                too many resources toward them.- <a href="http://www.hrpayrollsystems.net/hris/">HRIS</a></p></justify>
            </marquee>
          </div>
  </section>
  <br/>
  <?php
  include('footer.php');
  ?>
</div>
</body>
</html>
