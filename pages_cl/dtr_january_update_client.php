<html>
<head>
  <link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/style.css">
<link type="text/css" rel="stylesheet" href="../css/user.css">
<meta charset="utf-8">
<title>HRIS-DTR Form</title>
</head>
<body>
<div id="container_dtr">
  <?php
  include('header_user.php');
  include('menubar.php');
  include('menubar_month.php');
  ?>

  <section id="wrapper_em_cl">
    <div class="lsidebar_dtr_cl"></div>
      <?php
        // Connect to server and select database.
        $conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
        #include('db_option.php');
        mysql_select_db("time_record", $conn);

        // get value of id that sent from address bar
        $employee_id = $row['employee_id'];


        // Retrieve data from database 
        $sql = "SELECT * FROM january WHERE employee_id = '$employee_id'";
        $result=mysql_query($sql);

        if(mysql_num_rows($result) == 0) { 
          echo '<h1><center>Maid pay nikarga an DTR record muh!</center></h1>'; 
          die(mysql_error());

         } while($row = mysql_fetch_array($result)) {

  $employee_id = $row['employee_id'];
  $last_name = $row['last_name'];
  $first_name = $row['first_name'];
  $middle_name = $row['middle_name'];
  $regular_days = $row['regular_days'];
  $saturdays = $row['saturdays'];
  $month = $row['month'];

  $amahr1 = $row['amahr1'];
  $amamin1 = $row['amamin1'];
  $amdhr1 = $row['amdhr1'];
  $amdmin1 = $row['amdmin1'];
  $pmahr1 = $row['pmahr1'];
  $pmamin1 = $row['pmamin1'];
  $pmdhr1 = $row['pmdhr1'];
  $pmdmin1 = $row['pmdmin1'];
  $hours1 = $row['hours1'];
  $min1 = $row['min1'];
  $tmin1 = $row['tmin1'];

     
  $amahr2 = $row['amahr2'];
  $amamin2 = $row['amamin2'];
  $amdhr2 = $row['amdhr2'];
  $amdmin2 = $row['amdmin2'];
  $pmahr2 = $row['pmahr2'];
  $pmamin2 = $row['pmamin2'];
  $pmdhr2 = $row['pmdhr2'];
  $pmdmin2 = $row['pmdmin2'];
  $hours2 = $row['hours2'];
  $min2 = $row['min2'];
  $tmin2 = $row['tmin2'];

   
  $amahr3 = $row['amahr3'];
  $amamin3 = $row['amamin3'];
  $amdhr3 = $row['amdhr3'];
  $amdmin3 = $row['amdmin3'];
  $pmahr3 = $row['pmahr3'];
  $pmamin3 = $row['pmamin3'];
  $pmdhr3 = $row['pmdhr3'];
  $pmdmin3 = $row['pmdmin3'];
  $hours3 = $row['hours3'];
  $min3 = $row['min3'];
  $tmin3 = $row['tmin3'];

  
  $amahr4 = $row['amahr4'];
  $amamin4 = $row['amamin4'];
  $amdhr4 = $row['amdhr4'];
  $amdmin4 = $row['amdmin4'];
  $pmahr4 = $row['pmahr4'];
  $pmamin4 = $row['pmamin4'];
  $pmdhr4 = $row['pmdhr4'];
  $pmdmin4 = $row['pmdmin4'];
  $hours4 = $row['hours4'];
  $min4 = $row['min4'];
  $tmin4 = $row['tmin4'];

   
  $amahr5 = $row['amahr5'];
  $amamin5 = $row['amamin5'];
  $amdhr5 = $row['amdhr5'];
  $amdmin5 = $row['amdmin5'];
  $pmahr5 = $row['pmahr5'];
  $pmamin5 = $row['pmamin5'];
  $pmdhr5 = $row['pmdhr5'];
  $pmdmin5 = $row['pmdmin5'];
  $hours5 = $row['hours5'];
  $min5 = $row['min5'];
  $tmin5 = $row['tmin5'];

   
  $amahr6 = $row['amahr6'];
  $amamin6 = $row['amamin6'];
  $amdhr6 = $row['amdhr6'];
  $amdmin6 = $row['amdmin6'];
  $pmahr6 = $row['pmahr6'];
  $pmamin6 = $row['pmamin6'];
  $pmdhr6 = $row['pmdhr6'];
  $pmdmin6 = $row['pmdmin6'];
  $hours6 = $row['hours6'];
  $min6 = $row['min6'];
  $tmin6 = $row['tmin6'];

  $amahr7 = $row['amahr7'];
  $amamin7 = $row['amamin7'];
  $amdhr7 = $row['amdhr7'];
  $amdmin7 = $row['amdmin7'];
  $pmahr7 = $row['pmahr7'];
  $pmamin7 = $row['pmamin7'];
  $pmdhr7 = $row['pmdhr7'];
  $pmdmin7 = $row['pmdmin7'];
  $hours7 = $row['hours7'];
  $min7 = $row['min7'];
  $tmin7 = $row['tmin7'];

   
  $amahr8 = $row['amahr8'];
  $amamin8 = $row['amamin8'];
  $amdhr8 = $row['amdhr8'];
  $amdmin8 = $row['amdmin8'];
  $pmahr8 = $row['pmahr8'];
  $pmamin8 = $row['pmamin8'];
  $pmdhr8 = $row['pmdhr8'];
  $pmdmin8 = $row['pmdmin8'];
  $hours8 = $row['hours8'];
  $min8 = $row['min8'];
  $tmin8 = $row['tmin8'];
   
  $amahr9 = $row['amahr9'];
  $amamin9 = $row['amamin9'];
  $amdhr9 = $row['amdhr9'];
  $amdmin9 = $row['amdmin9'];
  $pmahr9 = $row['pmahr9'];
  $pmamin9 = $row['pmamin9'];
  $pmdhr9 = $row['pmdhr9'];
  $pmdmin9 = $row['pmdmin9'];
  $hours9 = $row['hours9'];
  $min9 = $row['min9'];
  $tmin9 = $row['tmin9'];

   
  $amahr10 = $row['amahr10'];
  $amamin10 = $row['amamin10'];
  $amdhr10 = $row['amdhr10'];
  $amdmin10 = $row['amdmin10'];
  $pmahr10 = $row['pmahr10'];
  $pmamin10 = $row['pmamin10'];
  $pmdhr10 = $row['pmdhr10'];
  $pmdmin10 = $row['pmdmin10'];
  $hours10 = $row['hours10'];
  $min10 = $row['min10'];
  $tmin10 = $row['tmin10'];

   
  $amahr11 = $row['amahr11'];
  $amamin11 = $row['amamin11'];
  $amdhr11 = $row['amdhr11'];
  $amdmin11 = $row['amdmin11'];
  $pmahr11 = $row['pmahr11'];
  $pmamin11 = $row['pmamin11'];
  $pmdhr11 = $row['pmdhr11'];
  $pmdmin11 = $row['pmdmin11'];
  $hours11 = $row['hours11'];
  $min11 = $row['min11'];
  $tmin11 = $row['tmin11'];

   
  $amahr12 = $row['amahr12'];
  $amamin12 = $row['amamin12'];
  $amdhr12 = $row['amdhr12'];
  $amdmin12 = $row['amdmin12'];
  $pmahr12 = $row['pmahr12'];
  $pmamin12 = $row['pmamin12'];
  $pmdhr12 = $row['pmdhr12'];
  $pmdmin12 = $row['pmdmin12'];
  $hours12 = $row['hours12'];
  $min12 = $row['min12'];
  $tmin12 = $row['tmin12'];

   
  $amahr13 = $row['amahr13'];
  $amamin13 = $row['amamin13'];
  $amdhr13 = $row['amdhr13'];
  $amdmin13 = $row['amdmin13'];
  $pmahr13 = $row['pmahr13'];
  $pmamin13 = $row['pmamin13'];
  $pmdhr13 = $row['pmdhr13'];
  $pmdmin13 = $row['pmdmin13'];
  $hours13 = $row['hours13'];
  $min13 = $row['min13'];
  $tmin13 = $row['tmin13'];

   
  $amahr14 = $row['amahr14'];
  $amamin14 = $row['amamin14'];
  $amdhr14 = $row['amdhr14'];
  $amdmin14 = $row['amdmin14'];
  $pmahr14 = $row['pmahr14'];
  $pmamin14 = $row['pmamin14'];
  $pmdhr14 = $row['pmdhr14'];
  $pmdmin14 = $row['pmdmin14'];
  $hours14 = $row['hours14'];
  $min14 = $row['min14'];
  $tmin14 = $row['tmin14'];

   
  $amahr15 = $row['amahr15'];
  $amamin15 = $row['amamin15'];
  $amdhr15 = $row['amdhr15'];
  $amdmin15 = $row['amdmin15'];
  $pmahr15 = $row['pmahr15'];
  $pmamin15 = $row['pmamin15'];
  $pmdhr15 = $row['pmdhr15'];
  $pmdmin15 = $row['pmdmin15'];
  $hours15 = $row['hours15'];
  $min15 = $row['min15'];
  $tmin15 = $row['tmin15'];

   
  $amahr16 = $row['amahr16'];
  $amamin16 = $row['amamin16'];
  $amdhr16 = $row['amdhr16'];
  $amdmin16 = $row['amdmin16'];
  $pmahr16 = $row['pmahr16'];
  $pmamin16 = $row['pmamin16'];
  $pmdhr16 = $row['pmdhr16'];
  $pmdmin16 = $row['pmdmin16'];
  $hours16 = $row['hours16'];
  $min16 = $row['min16'];
  $tmin16 = $row['tmin16'];

   
  $amahr17 = $row['amahr17'];
  $amamin17 = $row['amamin17'];
  $amdhr17 = $row['amdhr17'];
  $amdmin17 = $row['amdmin17'];
  $pmahr17 = $row['pmahr17'];
  $pmamin17 = $row['pmamin17'];
  $pmdhr17 = $row['pmdhr17'];
  $pmdmin17 = $row['pmdmin17'];
  $hours17 = $row['hours17'];
  $min17 = $row['min17'];
  $tmin17 = $row['tmin17'];

   
  $amahr18 = $row['amahr18'];
  $amamin18 = $row['amamin18'];
  $amdhr18 = $row['amdhr18'];
  $amdmin18 = $row['amdmin18'];
  $pmahr18 = $row['pmahr18'];
  $pmamin18 = $row['pmamin18'];
  $pmdhr18 = $row['pmdhr18'];
  $pmdmin18 = $row['pmdmin18'];
  $hours18 = $row['hours18'];
  $min18 = $row['min18'];
  $tmin18 = $row['tmin18'];

  
  $amahr19 = $row['amahr19'];
  $amamin19 = $row['amamin19'];
  $amdhr19 = $row['amdhr19'];
  $amdmin19 = $row['amdmin19'];
  $pmahr19 = $row['pmahr19'];
  $pmamin19 = $row['pmamin19'];
  $pmdhr19 = $row['pmdhr19'];
  $pmdmin19 = $row['pmdmin19'];
  $hours19 = $row['hours19'];
  $min19 = $row['min19'];
  $tmin19 = $row['tmin19'];

   
  $amahr20 = $row['amahr20'];
  $amamin20 = $row['amamin20'];
  $amdhr20 = $row['amdhr20'];
  $amdmin20 = $row['amdmin20'];
  $pmahr20 = $row['pmahr20'];
  $pmamin20 = $row['pmamin20'];
  $pmdhr20 = $row['pmdhr20'];
  $pmdmin20 = $row['pmdmin20'];
  $hours20 = $row['hours20'];
  $min20 = $row['min20'];
  $tmin20 = $row['tmin20'];

   
  $amahr21 = $row['amahr21'];
  $amamin21 = $row['amamin21'];
  $amdhr21 = $row['amdhr21'];
  $amdmin21 = $row['amdmin21'];
  $pmahr21 = $row['pmahr21'];
  $pmamin21 = $row['pmamin21'];
  $pmdhr21 = $row['pmdhr21'];
  $pmdmin21 = $row['pmdmin21'];
  $hours21 = $row['hours21'];
  $min21 = $row['min21'];
  $tmin21 = $row['tmin21'];

   
  $amahr22 = $row['amahr22'];
  $amamin22 = $row['amamin22'];
  $amdhr22 = $row['amdhr22'];
  $amdmin22 = $row['amdmin22'];
  $pmahr22 = $row['pmahr22'];
  $pmamin22 = $row['pmamin22'];
  $pmdhr22 = $row['pmdhr22'];
  $pmdmin22 = $row['pmdmin22'];
  $hours22 = $row['hours22'];
  $min22 = $row['min22'];
  $tmin22 = $row['tmin22'];

   
  $amahr23 = $row['amahr23'];
  $amamin23 = $row['amamin23'];
  $amdhr23 = $row['amdhr23'];
  $amdmin23 = $row['amdmin23'];
  $pmahr23 = $row['pmahr23'];
  $pmamin23 = $row['pmamin23'];
  $pmdhr23 = $row['pmdhr23'];
  $pmdmin23 = $row['pmdmin23'];
  $hours23 = $row['hours23'];
  $min23 = $row['min23'];
  $tmin23 = $row['tmin23'];

  $amahr24 = $row['amahr24'];
  $amamin24 = $row['amamin24'];
  $amdhr24 = $row['amdhr24'];
  $amdmin24 = $row['amdmin24'];
  $pmahr24 = $row['pmahr24'];
  $pmamin24 = $row['pmamin24'];
  $pmdhr24 = $row['pmdhr24'];
  $pmdmin24 = $row['pmdmin24'];
  $hours24 = $row['hours24'];
  $min24 = $row['min24'];
  $tmin24 = $row['tmin24'];

  $amahr25 = $row['amahr25'];
  $amamin25 = $row['amamin25'];
  $amdhr25 = $row['amdhr25'];
  $amdmin25 = $row['amdmin25'];
  $pmahr25 = $row['pmahr25'];
  $pmamin25 = $row['pmamin25'];
  $pmdhr25 = $row['pmdhr25'];
  $pmdmin25 = $row['pmdmin25'];
  $hours25 = $row['hours25'];
  $min25 = $row['min25'];
  $tmin25 = $row['tmin25'];

  $amahr26 = $row['amahr26'];
  $amamin26 = $row['amamin26'];
  $amdhr26 = $row['amdhr26'];
  $amdmin26 = $row['amdmin26'];
  $pmahr26 = $row['pmahr26'];
  $pmamin26 = $row['pmamin26'];
  $pmdhr26 = $row['pmdhr26'];
  $pmdmin26 = $row['pmdmin26'];
  $hours26 = $row['hours26'];
  $min26 = $row['min26'];
  $tmin26 = $row['tmin26'];

  $amahr27 = $row['amahr27'];
  $amamin27 = $row['amamin27'];
  $amdhr27 = $row['amdhr27'];
  $amdmin27 = $row['amdmin27'];
  $pmahr27 = $row['pmahr27'];
  $pmamin27 = $row['pmamin27'];
  $pmdhr27 = $row['pmdhr27'];
  $pmdmin27 = $row['pmdmin27'];
  $hours27 = $row['hours27'];
  $min27 = $row['min27'];
  $tmin27 = $row['tmin27'];

  $amahr28 = $row['amahr28'];
  $amamin28 = $row['amamin28'];
  $amdhr28 = $row['amdhr28'];
  $amdmin28 = $row['amdmin28'];
  $pmahr28 = $row['pmahr28'];
  $pmamin28 = $row['pmamin28'];
  $pmdhr28 = $row['pmdhr28'];
  $pmdmin28 = $row['pmdmin28'];
  $hours28 = $row['hours28'];
  $min28 = $row['min28'];
  $tmin28 = $row['tmin28'];

  $amahr29 = $row['amahr29'];
  $amamin29 = $row['amamin29'];
  $amdhr29 = $row['amdhr29'];
  $amdmin29 = $row['amdmin29'];
  $pmahr29 = $row['pmahr29'];
  $pmamin29 = $row['pmamin29'];
  $pmdhr29 = $row['pmdhr29'];
  $pmdmin29 = $row['pmdmin29'];
  $hours29 = $row['hours29'];
  $min29 = $row['min29'];
  $tmin29 = $row['tmin29'];

  $amahr30 = $row['amahr30'];
  $amamin30 = $row['amamin30'];
  $amdhr30 = $row['amdhr30'];
  $amdmin30 = $row['amdmin30'];
  $pmahr30 = $row['pmahr30'];
  $pmamin30 = $row['pmamin30'];
  $pmdhr30 = $row['pmdhr30'];
  $pmdmin30 = $row['pmdmin30'];
  $hours30 = $row['hours30'];
  $min30 = $row['min30'];
  $tmin30 = $row['tmin30'];

  $amahr31 = $row['amahr31'];
  $amamin31 = $row['amamin31'];
  $amdhr31 = $row['amdhr31'];
  $amdmin31 = $row['amdmin31'];
  $pmahr31 = $row['pmahr31'];
  $pmamin31 = $row['pmamin31'];
  $pmdhr31 = $row['pmdhr31'];
  $pmdmin31 = $row['pmdmin31'];
  $hours31 = $row['hours31'];
  $min31 = $row['min31'];
  $tmin31 = $row['tmin31'];

  $total_hours = $row['total_hours'];
  $total_min = $row['total_min'];
  $total_under_min = $row['total_under_min']; 
  }   
    ?>
    <?php
    include('dtr_inputs_client.php');
    ?>
    <div class="rsidebar_dtr_cl"></div>
    </section>
<br/>
</div>
</body>
<?php
  include('footer_user.php');
?>
</html>
