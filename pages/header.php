<?php
include('../check.php');
?>
<!DOCTYPE html>
<html>
<head></head>
<link rel="shortcut icon" href="Icons/favicon.ico">
<body>
  <?php
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
mysql_select_db("employee_record", $conn);

$name = $row['username'];

$query = "SELECT username FROM record";

$result = mysql_query( $query, $conn );
$user = $name;
mysql_free_result($result);
mysql_close($conn);
?>
  <div class="header">
    <div class="logo"><marquee behavior="alternate" width="150px" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">
    <a href="http://www.ifsu.edu.ph"><img src="../Images/ifsu.png" style="height:120px"></a><p></p></marquee>
    </div>
    <div class="titlebar"><img src="../Images/head_title.gif" style="height:150px; width:900px"></div>
    <div class="top_right"><span><h4><center>Welcome <span style="color:#a52a2a"><?php echo strtoupper($user) ?></span>!</center></h4></span><hr/>
        <ul>
          <li><a href="../account_settings.php">Account Setting </a></li> |
          <li><a href="../logout.php"> Logout</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div><center>
  <marquee behavior="scroll" direction="left" width="100%" height="25px" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
        <img src="../Images/bottom_move.gif"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp <img src="../Images/bottom_move1.gif"></marquee></center>
</body>
</html>