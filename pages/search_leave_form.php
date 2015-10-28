<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>HRIS-Assign Leave</title>

<script lang="javascript" type="text/javascript">

  function checkForm(leave_search){
    var value = document.getElementById('search_term').value;
    if((leave_search.search_term.value == "") || (leave_search.search_term.value == "") || (value.length < 3)) {
      alert("Kalgaham te maid nikalga or kulang nan nikarga!");
      leave_search.search_term.focus();
      return false;
    }
    
    return true;
  }
</script>
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
    <div class="form_title"><p><br/>Assign Leave</p>
    <div id="button">
      <form name="leave_search" method="GET" action="assign_leave_form.php" onsubmit="return checkForm(this);">
      <ul>
        <li><input class="sfield" placeholder="Search Name or ID" type="text" style="width:200px" id="search_term" name="search_term"></li> &nbsp&nbsp&nbsp&nbsp
        <li><input class="search" type="submit" style="width:100px; height:30px; font-size:16px" name="load" value="Assign"></li>
      </ul>
      </form>
    </div>
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
