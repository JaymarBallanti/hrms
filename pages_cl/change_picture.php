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
  <div class="logintitle">Change Profile Picture</div><br/>
      <br/>
  <div class="login">
  <center>
      <form name="pics_update" ENCTYPE="multipart/form-data" method="post" action="update_pics.php">
      <table>
        <td>
                <script type="text/javascript">

                  var loadFile = function(event) {
                      var output = document.getElementById('output');
                      output.src = URL.createObjectURL(event.target.files[0]);
                    };
               </script>
               <table style="width:100%">
                  <tr>
                     <td>Profile Picture: </td>
                  </tr>
                  <tr><center>
                     <td><input type="file" name="user_pics" accept="image/*" onchange="loadFile(event)"></td>
                     <img id="output" src="../profiles/<?=$employee_id;?>/images/<?=$user_pics;?>" name="user_pics" style="width:180px; length:180px"/>
                  </center></tr>
               </table>
          </td>
     </table> 
   </center>
    <div class="submit">
      <ul>
            <li>
               <input type="submit" style="width:100px; height:30px; font-size:16px" name="submit" value="Change">
               <input type="button" style="width:100px; height:30px; font-size:16px" onclick="window.location.replace('home.php')" name="cancel" value="Cancel">
            </li>
         </ul>
    </div>
  </div>
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
