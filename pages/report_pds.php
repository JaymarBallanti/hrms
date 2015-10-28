<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>HRIS</title>
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
    <div class="form_title"><p><br/>PDS Report</p>
    <div id="button">
      <form method="GET" action="report_pds.php">
      <ul>
        <li><input class="sfield" placeholder="Search Name/ID/Dep't/Position" type="text" style="width:200px" name="search_term"></li> &nbsp&nbsp&nbsp&nbsp
        <li><input class="search" type="submit" style="width:100px; height:30px; font-size:16px" name="submit" value="Search"></li>
      </ul>
      </form>
    </div>
    <hr/>
    <u style="font-size:20px;"><b>Results: </b></u>
    <?php
    include('report_pds_result.php');
    ?>
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
