<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Employee Info</title>
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
      <div class="form_title"><p><br/>Employee Basic Information</p>
        <?php
        include('basic_info_show_all.php');
        ?>
      </div>
    </div>
  	<div class="rsidebar"></div>
  </section>
  <br/>
  <?php
  include('footer.php');
  ?>
</div>
</body>
</html>
