<?php
include('../session.php');
include('account_username_update.php');
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Account Settings</title>
</head>
<body>
  <?php

    $conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
    
    mysql_select_db("employee_record", $conn);
    $username = $row['username']; 

    $sql = "SELECT * FROM record WHERE username = '$username'";
    $result=mysql_query($sql);

    if($result === FALSE) { 
        die(mysql_error()); // TODO: better error handling

     } while($row = mysql_fetch_array($result)) {

    $username = $row['username'];
    $password = $row['password'];
  }
  ?>
<div id="container_index">
  <div class="titlebar_index"></div>
  <div class="logintitle">Account Settings</div>
  <div class="login">
    <form action="" method="post" name="verify">
      <div class="fields">
        <input type="password" name="password" placeholder="Enter Password"
                    style="width: 250px"><br/><br/><br/><br/>
        <input type="text" name="new_username" placeholder="New Username"
                    style="width: 250px">
      </div>
      <span style="text-align:center; color: red"><h4><?php echo $error; ?></h4></span>
        <br/><br/><br/>
      <div class="submit">
        <input type="submit" value="Change" name="submit" style="width: 100px; height:30px">
        <input class="button" type="button" onclick="window.location.replace('account_settings.php')" style="width:100px; height:30px; font-style:bold; font-size:16px" name="cancel" value="Cancel">
      </div>
  </form>
  </div>
  <br/>
  <br/>
  <br/>
  <div class="footer_index">© 2015 - Human Resource Information System<span><a href="http://www.ifsu.edu.ph">Ifugao State University - Lagawe Campus</a></span><br/>Developers: 
    <span><a href="https://www.facebook.com/ramyaj.itnallab.25">Ramyaj</a></span> |
    <span><a href="https://www.facebook.com/cd.pumihic">Ittop</a></span> |
    <span><a href="https://www.facebook.com/philipjansenn.cacliong">Cyezen</a></span> |
    <span><a href="https://www.facebook.com/revelyn.libiado">Revz</a></span> |
    <span><a href="https://www.facebook.com/rowena.hinumla">Weng</a></span>
    <br/>All Rights Reserved</div>
</div>
</body>
</html>
