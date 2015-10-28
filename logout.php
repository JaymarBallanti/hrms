<html>
<head>
	<link rel="shortcut icon" href="../Icons/favicon.ico">
</head>
<body>

<span><h2 style="text-align:center; color:#47198b; margin-top:100px;">
<?php
include("session.php");
 
//Delete the session variables
unset($_SESSION["OK"]);
session_unset();
 
//And send the user back to the homepage
echo "<meta http-equiv='refresh' content='2;URL=index.php'/>Ni-
logout a mo!";
?></h2></span>
</body>
</html>