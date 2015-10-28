<?php
include('../session.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="header">
    <div class="logo">
          <div id="slideShowImageshead">
                <img src="../Images/ifsu.png" alt="Slide 1">
                <img src="../Icons/logo.png" alt="Slide 2" />
              </div>
          <script src="../js/slideShowhead.js"></script>
    </div>
    <div class="titlebar"><img src="../Images/head_title.gif" style="height:150px"></div>
    <div class="top_right">
      <a href="change_picture.php" >
        <img id="output" src="../profiles/<?=$employee_id;?>/images/<?=$user_pics;?>" name="user_pics" style="width:70px; length:70px"/></a>
      <span> <h3>Welcome! </h3> 
        <span style="color:#a52a2a">
          <?php echo strtoupper($first_name)?> &nbsp <?php echo strtoupper($last_name)?>
        </span>
     </span>
        <script type="text/javascript">
                  var loadFile = function(event) {
                      var output = document.getElementById('output');
                      output.src = URL.createObjectURL(event.target.files[0]);
                    };
               </script>
<hr/>
        <ul>
          <li><a href="account_settings.php">Account Setting </a></li> |
          <li><a href="../logout.php"> Logout</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
  <marquee behavior="scroll" direction="left" width="100%" height="25px" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
        <img src="../Images/bottom_move.gif"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp <img src="../Images/bottom_move1.gif"></marquee>
</body>
</html>