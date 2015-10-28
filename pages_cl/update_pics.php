<?php
include('../session.php');

$mypic = $_FILES['user_pics']['name'];
$temp = $_FILES['user_pics']['tmp_name'];
$type = $_FILES['user_pics']['type'];

if(isset($_POST ['submit'])) {
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
mysql_select_db("employee_record", $conn);

$user_pics = $mypic;

if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp") || ($type=="image/png")){
            
            move_uploaded_file($temp, "../profiles/$employee_id/images/$mypic");
            $display_img = "This will be you profile picture!<p><img border='1' width='180' height='180' src='../profiles/$employee_id/images/$mypic'><p>";
            
          } else {
            $valid_img = "Please upload a valid jpeg, jpg, png, or bmp image! And size must be less than 10k!";
          }

$sql="UPDATE record SET  user_pics= '".$mypic."'  WHERE employee_id='".$row['employee_id']."'";
$result=mysql_query($sql) or die ('Could not enter data: ' . mysql_error());

if($result) {
  echo "<meta http-equiv='refresh' content='1;URL=home.php'/><h1>Na-update mo!</h1></a>";
} else {
echo "UUYYYY, Nun-Error";
}
}
?>
