<?php
include('../session.php');
include('account_pass_update.php');
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Update Account</title>
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
  <div class="logintitle">Change Password</div><br/>
  <div class="login">
    <form action="" method="post" name="account" id="account" onsubmit="return checkForm()">
      <div class="fields">
      <input type="text" name="username" placeholder="Username" style="width: 250px" value="<?=$username;?>"><br/><br/>
      <input type="password" name="password" id="password" placeholder="Password" style="width: 250px"><br/><br/><br/>       
      <input type="password" name="new_password" id="new_password" placeholder="New Password" style="width: 250px"><br/><br/>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" style="width: 250px">
      <span style="text-align:center; color: red"><h4><?php echo $error; ?></h4></span>
      <br/>
      <br/>
      <div class="submit">
        <input type="submit" value="Change" name="submit">
        <input type="button" onclick="window.location.replace('account_settings.php')" name="cancel" value="Cancel">
      </div>
  </form>
  </div>
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

