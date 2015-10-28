<?php
include('../session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>Account Settings</title>
</head>
<body>
<div id="container_index">
  <div class="titlebar_index"></div>
  <div class="logintitle">Account Settings</div><br/>
      <br/>
  <div class="login">
    <div class="submit">
      <input type="button" value="Change Username" onclick="window.location.replace('account_change_username.php')" name="submit" style="width: 300px; height:35px">
      <br/>
      <br/>
      <input type="button" value="Change Password" 
          onclick="window.location.replace('account_change_pass.php')" name="submit" style="width: 300px; height:35px">
      <br/>
      <br/>
      <input type="button" name="cancel" value="Cancel"
        onclick="window.location.replace('home.php')" style="height:30px; width: 300px">
    </div>
  </div>
  <br/>
      <br/>
      <br/>
      <br/>
      <br/>
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
