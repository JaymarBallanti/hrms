

<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/form.css">
<meta charset="utf-8">
<title>DTR Form</title>
</head>
<body>
<div id="container_dtr">
  <?php
  include('header.php');
    include('employee_mgt_menubar.php');
  include('time_mgt_menubar_month.php');
  ?>

  <section id="wrapper_em">
    <div class="lsidebar_dtr">
      <?php
      $conn = mysql_connect("localhost","root","ramyaj");
      mysql_select_db("time_record", $conn);
      if (! $conn) {
        die('Could not connect: ' . mysql_connect_error());
      }
      $per_page = 15;
      $pages_query = mysql_query("SELECT COUNT('id') FROM april");
      $pages = ceil(mysql_result($pages_query, 0) / $per_page);
      $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
      $start = ($page - 1) * $per_page;
      $query = mysql_query("SELECT employee_id, first_name,
          last_name, middle_name FROM april ORDER BY last_name ASC LIMIT $start, $per_page");
      include('display_names_april.php');
      mysql_close($conn);
      ?>
    </div>
    <div class="content_dtr">
      <div class="form_title"><p>Add Employee Daily Time Record</p>
      <form name="dtr" action="dtr_form_save_april.php" method="post">
      <table id="timesheet" style="width:100%; border:2px solid #8DC3E9">
        <tr>
          <th colspan="2">Employee ID: </th>
          <th colspan="2"><input type="text" style="width:100px" name="employee_id" ></th>
          <th colspan="8">Name: &nbsp&nbsp
            <input type="text"  style="width:100px" placeholder="Last Name"  name="last_name">,&nbsp 
            <input type="text"  style="width:100px" placeholder="First Name" name="first_name">&nbsp
            <input type="text"  style="width:20px" placeholder="MI" name="middle_name"></th>
        </th>
        <tr>
          <th colspan="2">Month: </th>
          <th colspan="2"><input type="text" style="width:100px" 
            value="April" name="month"></th>
          <th colspan="8">Regular Days: <input type="text" style="width:100px" id="regular_days" name="regular_days">
             Saturdays: <input type="text" style="width:100px" id="saturdays" name="saturdays"></th>
        </tr>
        <tr>
          <th colspan="12"></th>
        </tr>
        <?php
        include('dtr_inputs.php');
        ?>
    <div class ="submit">
      <ul>
        <li>
          <input class="submit" type="submit" style="width:100px; height:30px; font-style:bold; font-size:16px" name="submit" value="Save">
          <input class="button" type="button" onclick="window.location.replace('dtr_april.php')" style="width:100px; height:30px; font-style:bold; font-size:16px" name="cancel" value="Cancel">
        </li>
      </ul>
    </div>
    </form>
  </div>
  </div>
    <div class="rsidebar_dtr"></div>
    </section>
    <br/>
<?php
  include('footer.php');
?>
</div>
</body>
</html>

