
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
<meta charset="utf-8">
<title>HRIS-DTR Form</title>
</head>
<body>
<div id="container_dtr">
  <section id="wrapper_em">
    <div class="lsidebar_dtr">
      <?php
        // Connect to server and select database.
        $conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
        #include('db_option.php');
        mysql_select_db("time_record", $conn);

        // get value of id that sent from address bar
        $employee_id = $_GET['employee_id'];


        // Retrieve data from database 
        $sql = "SELECT * FROM may WHERE employee_id = '$employee_id'";
        $result=mysql_query($sql);

        if($result === FALSE) { 
            die(mysql_error()); // TODO: better error handling

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
    </div>
    <div class="content_dtr">
      <div class="form_title"tex-aling="center"><p><h1>Daily Time Record</h1></p>
      <form name="dtr" action="" method="post">
      <table id="timesheet" style="width:100%; solid #8DC3E9">
        <tr>
          <td colspan="2">Employee ID: </td>
          <td colspan="2"><input type="text" readonly="true" style="width:100px" name="employee_id" value="<?=$employee_id;?>"></td>
          <td colspan="8">Name: &nbsp&nbsp
            <input type="text"  style="width:100px" readonly="true"placeholder="Last Name"  name="last_name" value="<?=$last_name;?>">,&nbsp 
            <input type="text"  style="width:100px" readonly="true"placeholder="First Name" name="first_name" value="<?=$first_name;?>">&nbsp
            <input type="text"  style="width:20px" readonly="true"placeholder="MI" name="middle_name" value="<?=$middle_name;?>"></td>
        </tr>
        <tr>
          <td colspan="2">Month: </td>
          <td colspan="2"><input type="text" style="width:100px" readonly="true"
             name="month" value="<?=$month;?>"></td>
          <td colspan="8">Regular Days: <input type="text" style="width:100px" id="regular_days" name="regular_days" value="<?=$regular_days;?>">
             Saturdays: <input type="text" style="width:100px" id="saturdays" name="saturdays" value="<?=$saturdays;?>"></td>
        </tr>
        <tr>
          <td colspan="12"></td>
        </tr>
        <tr>
          <th rowspan="3" scope="colgroup" style="width:40px; text-align:center">Day</th>
          <th colspan="4" scope="colgroup" style="width:120px; text-align:center">AM</th>
          <th colspan="4" scope="colgroup" style="width:120px; text-align:center">PM</th>
          <th colspan="3" scope="colgroup" style="width:120px; text-align:center">Total Under Time</th>
        </tr>
        <tr>
          <th colspan="2" scope="col" style="width:60px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:60px; text-align:center">Departure</th>
          <th colspan="2" scope="col" style="width:60px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:60px; text-align:center">Departure</th>
          <th rowspan="2" scope="col" style="width:60px; text-align:center">Hours</th>
          <th rowspan="2" scope="col" style="width:60px; text-align:center">Min</th>
          <th rowspan="2" scope="col" style="width:60px; text-align:center">Total in<br/>Minutes</th>
        </tr>
        <tr>
          <th scope="col" style="width:30px; text-align:center">Hours</th>
          <th scope="col" style="width:30px; text-align:center">Min</th>
          <th scope="col" style="width:30px; text-align:center">Hours</th>
          <th scope="col" style="width:30px; text-align:center">Min</th>
          <th scope="col" style="width:30px; text-align:center">Hours</th>
          <th scope="col" style="width:30px; text-align:center">Min</th>
          <th scope="col" style="width:30px; text-align:center">Hours</th>
          <th scope="col" style="width:30px; text-align:center">Min</th>
        </tr>
        <tr>
          <td>1</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction1()" placeholder="08" id="amahr1" name="amahr1" value="<?=$amahr1;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction1()" placeholder="00" id="amamin1" name="amamin1" value="<?=$amamin1;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction1()" placeholder="12" id="amdhr1" name="amdhr1" value="<?=$amdhr1;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction1()" placeholder="00" id="amdmin1" name="amdmin1" value="<?=$amdmin1;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction1()" placeholder="13" id="pmahr1" name="pmahr1" value="<?=$pmahr1;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction1()" placeholder="00" id="pmamin1" name="pmamin1" value="<?=$pmamin1;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction1()" placeholder="17" id="pmdhr1" name="pmdhr1" value="<?=$pmdhr1;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction1()" placeholder="00" id="pmdmin1" name="pmdmin1" value="<?=$pmdmin1;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="hours1" name="hours1" value="<?=$hours1;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="min1" name="min1"value="<?=$min1;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="tmin1" name="tmin1"value="<?=$tmin1;?>"></td>

            <script lang="javascript" type="text/javascript">

              function myFunction1(){

                var amahr = document.getElementById("amahr1").value;
                var amamin = document.getElementById("amamin1").value;
                var amdhr = document.getElementById("amdhr1").value;
                var amdmin = document.getElementById("amdmin1").value;
                var pmahr = document.getElementById("pmahr1").value;
                var pmamin = document.getElementById("pmamin1").value;
                var pmdhr = document.getElementById("pmdhr1").value;
                var pmdmin = document.getElementById("pmdmin1").value;
                var hours = document.getElementById("hours1").value;
                var min = document.getElementById("min1").value;
                var tmin = document.getElementById("tmin1").value;
            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min1.value = finalmin;
                hours1.value = fullhour;
            }

            tmin1.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>2</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction2()" id="amahr2" name="amahr2" value="<?=$amahr2;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction2()" id="amamin2" name="amamin2" value="<?=$amamin2;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction2()" id="amdhr2" name="amdhr2" value="<?=$amdhr2;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction2()" id="amdmin2" name="amdmin2" value="<?=$amdmin2;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction2()" id="pmahr2" name="pmahr2" value="<?=$pmahr2;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction2()" id="pmamin2" name="pmamin2" value="<?=$pmamin2;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction2()" id="pmdhr2" name="pmdhr2" value="<?=$pmdhr2;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction2()" id="pmdmin2" name="pmdmin2" value="<?=$pmdmin2;?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours2" name="hours2" value="<?=$hours2;?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min2" name="min2" value="<?=$min2;?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin2" name="tmin2" value="<?=$tmin2;?>"></td>
            
            <script lang="javascript" type="text/javascript">

              function myFunction2(){ 

                var amahr = document.getElementById("amahr2").value;
                var amamin = document.getElementById("amamin2").value;
                var amdhr = document.getElementById("amdhr2").value;
                var amdmin = document.getElementById("amdmin2").value;
                var pmahr = document.getElementById("pmahr2").value;
                var pmamin = document.getElementById("pmamin2").value;
                var pmdhr = document.getElementById("pmdhr2").value;
                var pmdmin = document.getElementById("pmdmin2").value;
                var hours = document.getElementById("hours2").value;
                var min = document.getElementById("min2").value;
                var tmin = document.getElementById("tmin2").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min2.value = finalmin;
                hours2.value = fullhour;
            }

            tmin2.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>3</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction3()" id="amahr3" name="amahr3" value="<?=$amahr3;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction3()" id="amamin3" name="amamin3" value="<?=$amamin3;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction3()" id="amdhr3" name="amdhr3" value="<?=$amdhr3;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction3()" id="amdmin3" name="amdmin3" value="<?=$amdmin3;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction3()" id="pmahr3" name="pmahr3"value="<?=$pmahr3;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction3()" id="pmamin3" name="pmamin3"value="<?=$pmamin3;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction3()" id="pmdhr3" name="pmdhr3"value="<?=$pmdhr3;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction3()" id="pmdmin3" name="pmdmin3"value="<?=$pmdmin3;?>"></td>
            <td><input type="text" style="font-weight:bold"   readonly="readonly" id="hours3" name="hours3" value="<?=$hours3;?>"></td>
            <td><input type="text" style="font-weight:bold"   readonly="readonly" id="min3" name="min3"value="<?=$min3;?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin3" name="tmin3"value="<?=$tmin3;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction3(){

                var amahr = document.getElementById("amahr3").value;
                var amamin = document.getElementById("amamin3").value;
                var amdhr = document.getElementById("amdhr3").value;
                var amdmin = document.getElementById("amdmin3").value;
                var pmahr = document.getElementById("pmahr3").value;
                var pmamin = document.getElementById("pmamin3").value;
                var pmdhr = document.getElementById("pmdhr3").value;
                var pmdmin = document.getElementById("pmdmin3").value;
                var hours = document.getElementById("hours3").value;
                var min = document.getElementById("min3").value;
                var tmin = document.getElementById("tmin3").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min3.value = finalmin;
                hours3.value = fullhour;
            }

            tmin3.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>4</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction4()" id="amahr4" name="amahr4"value="<?=$amahr4;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction4()" id="amamin4" name="amamin4"value="<?=$amamin4;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction4()" id="amdhr4" name="amdhr4"value="<?=$amdhr4;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction4()" id="amdmin4" name="amdmin4"value="<?=$amdmin4;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction4()" id="pmahr4" name="pmahr4"value="<?=$pmahr4;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction4()" id="pmamin4" name="pmamin4"value="<?=$pmamin4;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction4()" id="pmdhr4" name="pmdhr4"value="<?=$pmdhr4;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction4()" id="pmdmin4" name="pmdmin4"value="<?=$pmdmin4;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours4" name="hours4" value="<?=$hours4;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min4" name="min4"value="<?=$min4;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin4" name="tmin4"value="<?=$tmin4;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction4(){

                var amahr = document.getElementById("amahr4").value;
                var amamin = document.getElementById("amamin4").value;
                var amdhr = document.getElementById("amdhr4").value;
                var amdmin = document.getElementById("amdmin4").value;
                var pmahr = document.getElementById("pmahr4").value;
                var pmamin = document.getElementById("pmamin4").value;
                var pmdhr = document.getElementById("pmdhr4").value;
                var pmdmin = document.getElementById("pmdmin4").value;
                var hours = document.getElementById("hours4").value;
                var min = document.getElementById("min4").value;
                var tmin = document.getElementById("tmin4").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min4.value = finalmin;
                hours4.value = fullhour;
            }

            tmin4.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>5</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction5()" id="amahr5" name="amahr5"value="<?=$amahr5;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction5()" id="amamin5" name="amamin5"value="<?=$amamin5;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction5()" id="amdhr5" name="amdhr5"value="<?=$amdhr5;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction5()" id="amdmin5" name="amdmin5"value="<?=$amdmin5;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction5()" id="pmahr5" name="pmahr5"value="<?=$pmahr5;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction5()" id="pmamin5" name="pmamin5"value="<?=$pmamin5;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction5()" id="pmdhr5" name="pmdhr5"value="<?=$pmdhr5;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction5()" id="pmdmin5" name="pmdmin5"value="<?=$pmdmin5;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours5" name="hours5" value="<?=$hours5;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min5" name="min5"value="<?=$min5;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin5" name="tmin5"value="<?=$tmin5;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction5(){

                var amahr = document.getElementById("amahr5").value;
                var amamin = document.getElementById("amamin5").value;
                var amdhr = document.getElementById("amdhr5").value;
                var amdmin = document.getElementById("amdmin5").value;
                var pmahr = document.getElementById("pmahr5").value;
                var pmamin = document.getElementById("pmamin5").value;
                var pmdhr = document.getElementById("pmdhr5").value;
                var pmdmin = document.getElementById("pmdmin5").value;
                var hours = document.getElementById("hours5").value;
                var min = document.getElementById("min5").value;
                var tmin = document.getElementById("tmin5").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min5.value = finalmin;
                hours5.value = fullhour;
            }

            tmin5.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>6</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction6()" id="amahr6" name="amahr6"value="<?=$amahr6;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction6()" id="amamin6" name="amamin6"value="<?=$amamin6;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction6()" id="amdhr6" name="amdhr6"value="<?=$amdhr6;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction6()" id="amdmin6" name="amdmin6"value="<?=$amdmin6;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction6()" id="pmahr6" name="pmahr6"value="<?=$pmahr6;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction6()" id="pmamin6" name="pmamin6"value="<?=$pmamin6;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction6()" id="pmdhr6" name="pmdhr6"value="<?=$pmdhr6;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction6()" id="pmdmin6" name="pmdmin6"value="<?=$pmdmin6;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours6" name="hours6"value="<?=$hours6;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min6" name="min6"value="<?=$min6;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin6" name="tmin6"value="<?=$tmin6;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction6(){

                var amahr = document.getElementById("amahr6").value;
                var amamin = document.getElementById("amamin6").value;
                var amdhr = document.getElementById("amdhr6").value;
                var amdmin = document.getElementById("amdmin6").value;
                var pmahr = document.getElementById("pmahr6").value;
                var pmamin = document.getElementById("pmamin6").value;
                var pmdhr = document.getElementById("pmdhr6").value;
                var pmdmin = document.getElementById("pmdmin6").value;
                var hours = document.getElementById("hours6").value;
                var min = document.getElementById("min6").value;
                var tmin = document.getElementById("tmin6").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min6.value = finalmin;
                hours6.value = fullhour;
            }

            tmin6.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>7</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction7()" id="amahr7" name="amahr7"value="<?=$amahr7;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction7()" id="amamin7" name="amamin7"value="<?=$amamin7;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction7()" id="amdhr7" name="amdhr7"value="<?=$amdhr7;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction7()" id="amdmin7" name="amdmin7"value="<?=$amdmin7;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction7()" id="pmahr7" name="pmahr7"value="<?=$pmahr7;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction7()" id="pmamin7" name="pmamin7"value="<?=$pmamin7;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction7()" id="pmdhr7" name="pmdhr7"value="<?=$pmdhr7;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction7()" id="pmdmin7" name="pmdmin7"value="<?=$pmdmin7;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours7" name="hours7"value="<?=$hours7;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min7" name="min7"value="<?=$min7;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin7" name="tmin7"value="<?=$tmin7;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction7(){

                var amahr = document.getElementById("amahr7").value;
                var amamin = document.getElementById("amamin7").value;
                var amdhr = document.getElementById("amdhr7").value;
                var amdmin = document.getElementById("amdmin7").value;
                var pmahr = document.getElementById("pmahr7").value;
                var pmamin = document.getElementById("pmamin7").value;
                var pmdhr = document.getElementById("pmdhr7").value;
                var pmdmin = document.getElementById("pmdmin7").value;
                var hours = document.getElementById("hours7").value;
                var min = document.getElementById("min7").value;
                var tmin = document.getElementById("tmin7").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min7.value = finalmin;
                hours7.value = fullhour;
            }

            tmin7.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>8</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction8()" id="amahr8" name="amahr8"value="<?=$amahr8;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction8()" id="amamin8" name="amamin8"value="<?=$amamin8;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction8()" id="amdhr8" name="amdhr8"value="<?=$amdhr8;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction8()" id="amdmin8" name="amdmin8"value="<?=$amdmin8;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction8()" id="pmahr8" name="pmahr8"value="<?=$pmahr8;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction8()" id="pmamin8" name="pmamin8"value="<?=$pmamin8;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction8()" id="pmdhr8" name="pmdhr8"value="<?=$pmdhr8;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction8()" id="pmdmin8" name="pmdmin8"value="<?=$pmdmin8;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours8" name="hours8"value="<?=$hours8;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min8" name="min8"value="<?=$min8;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin8" name="tmin8"value="<?=$tmin8;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction8(){

                var amahr = document.getElementById("amahr8").value;
                var amamin = document.getElementById("amamin8").value;
                var amdhr = document.getElementById("amdhr8").value;
                var amdmin = document.getElementById("amdmin8").value;
                var pmahr = document.getElementById("pmahr8").value;
                var pmamin = document.getElementById("pmamin8").value;
                var pmdhr = document.getElementById("pmdhr8").value;
                var pmdmin = document.getElementById("pmdmin8").value;
                var hours = document.getElementById("hours8").value;
                var min = document.getElementById("min8").value;
                var tmin = document.getElementById("tmin8").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min8.value = finalmin;
                hours8.value = fullhour;
            }

            tmin8.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>9</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction9()" id="amahr9" name="amahr9"value="<?=$amahr9;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction9()" id="amamin9" name="amamin9"value="<?=$amamin9;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction9()" id="amdhr9" name="amdhr9"value="<?=$amdhr9;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction9()" id="amdmin9" name="amdmin9"value="<?=$amdmin9;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction9()" id="pmahr9" name="pmahr9"value="<?=$pmahr9;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction9()" id="pmamin9" name="pmamin9"value="<?=$pmamin9;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction9()" id="pmdhr9" name="pmdhr9"value="<?=$pmdhr9;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction9()" id="pmdmin9" name="pmdmin9"value="<?=$pmdmin9;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours9" name="hours9" value="<?=$hours9;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min9" name="min9"value="<?=$min9;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin9" name="tmin9"value="<?=$tmin9;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction9(){

                var amahr = document.getElementById("amahr9").value;
                var amamin = document.getElementById("amamin9").value;
                var amdhr = document.getElementById("amdhr9").value;
                var amdmin = document.getElementById("amdmin9").value;
                var pmahr = document.getElementById("pmahr9").value;
                var pmamin = document.getElementById("pmamin9").value;
                var pmdhr = document.getElementById("pmdhr9").value;
                var pmdmin = document.getElementById("pmdmin9").value;
                var hours = document.getElementById("hours9").value;
                var min = document.getElementById("min9").value;
                var tmin = document.getElementById("tmin9").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min9.value = finalmin;
                hours9.value = fullhour;
            }

            tmin9.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>10</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction10()" id="amahr10" name="amahr10"value="<?=$amahr10;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction10()" id="amamin10" name="amamin10"value="<?=$amamin10;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction10()" id="amdhr10" name="amdhr10"value="<?=$amdhr10;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction10()" id="amdmin10" name="amdmin10"value="<?=$amdmin10;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction10()" id="pmahr10" name="pmahr10"value="<?=$pmahr10;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction10()" id="pmamin10" name="pmamin10"value="<?=$pmamin10;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction10()" id="pmdhr10" name="pmdhr10"value="<?=$pmdhr10;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction10()" id="pmdmin10" name="pmdmin10"value="<?=$pmdmin10;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours10" name="hours10"value="<?=$hours10;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min10" name="min10"value="<?=$min10;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin10" name="tmin10"value="<?=$tmin10;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction10(){

                var amahr = document.getElementById("amahr10").value;
                var amamin = document.getElementById("amamin10").value;
                var amdhr = document.getElementById("amdhr10").value;
                var amdmin = document.getElementById("amdmin10").value;
                var pmahr = document.getElementById("pmahr10").value;
                var pmamin = document.getElementById("pmamin10").value;
                var pmdhr = document.getElementById("pmdhr10").value;
                var pmdmin = document.getElementById("pmdmin10").value;
                var hours = document.getElementById("hours10").value;
                var min = document.getElementById("min10").value;
                var tmin = document.getElementById("tmin10").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min10.value = finalmin;
                hours10.value = fullhour;
            }

            tmin10.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>11</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction11()" id="amahr11" name="amahr11"value="<?=$amahr11;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction11()" id="amamin11" name="amamin11"value="<?=$amamin11;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction11()" id="amdhr11" name="amdhr11"value="<?=$amdhr11;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction11()" id="amdmin11" name="amdmin11"value="<?=$amdmin11;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction11()" id="pmahr11" name="pmahr11"value="<?=$pmahr11;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction11()" id="pmamin11" name="pmamin11"value="<?=$pmamin11;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction11()" id="pmdhr11" name="pmdhr11"value="<?=$pmdhr11;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction11()" id="pmdmin11" name="pmdmin11"value="<?=$pmdmin11;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours11" name="hours11"value="<?=$hours11;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min11" name="min11"value="<?=$min11;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin11" name="tmin11"value="<?=$tmin11;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction11(){

                var amahr = document.getElementById("amahr11").value;
                var amamin = document.getElementById("amamin11").value;
                var amdhr = document.getElementById("amdhr11").value;
                var amdmin = document.getElementById("amdmin11").value;
                var pmahr = document.getElementById("pmahr11").value;
                var pmamin = document.getElementById("pmamin11").value;
                var pmdhr = document.getElementById("pmdhr11").value;
                var pmdmin = document.getElementById("pmdmin11").value;
                var hours = document.getElementById("hours11").value;
                var min = document.getElementById("min11").value;
                var tmin = document.getElementById("tmin11").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min11.value = finalmin;
                hours11.value = fullhour;
            }

            tmin11.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>12</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction12()" id="amahr12" name="amahr12"value="<?=$amahr12;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction12()" id="amamin12" name="amamin12"value="<?=$amamin12;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction12()" id="amdhr12" name="amdhr12"value="<?=$amdhr12;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction12()" id="amdmin12" name="amdmin12"value="<?=$amdmin12;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction12()" id="pmahr12" name="pmahr12"value="<?=$pmahr12;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction12()" id="pmamin12" name="pmamin12"value="<?=$pmamin12;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction12()" id="pmdhr12" name="pmdhr12"value="<?=$pmdhr12;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction12()" id="pmdmin12" name="pmdmin12"value="<?=$pmdmin12;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours12" name="hours12" value="<?=$hours12;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min12" name="min12"value="<?=$min12;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin12" name="tmin12"value="<?=$tmin12;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction12(){

                var amahr = document.getElementById("amahr12").value;
                var amamin = document.getElementById("amamin12").value;
                var amdhr = document.getElementById("amdhr12").value;
                var amdmin = document.getElementById("amdmin12").value;
                var pmahr = document.getElementById("pmahr12").value;
                var pmamin = document.getElementById("pmamin12").value;
                var pmdhr = document.getElementById("pmdhr12").value;
                var pmdmin = document.getElementById("pmdmin12").value;
                var hours = document.getElementById("hours12").value;
                var min = document.getElementById("min12").value;
                var tmin = document.getElementById("tmin12").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min12.value = finalmin;
                hours12.value = fullhour;
            }

            tmin12.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>13</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction13()" id="amahr13" name="amahr13"value="<?=$amahr13;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction13()" id="amamin13" name="amamin13"value="<?=$amamin13;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction13()" id="amdhr13" name="amdhr13"value="<?=$amdhr13;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction13()" id="amdmin13" name="amdmin13"value="<?=$amdmin13;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction13()" id="pmahr13" name="pmahr13"value="<?=$pmahr13;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction13()" id="pmamin13" name="pmamin13"value="<?=$pmamin13;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction13()" id="pmdhr13" name="pmdhr13"value="<?=$pmdhr13;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction13()" id="pmdmin13" name="pmdmin13"value="<?=$pmdmin13;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours13" name="hours13" value="<?=$hours13;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min13" name="min13"value="<?=$min13;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin13" name="tmin13"value="<?=$tmin13;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction13(){

                var amahr = document.getElementById("amahr13").value;
                var amamin = document.getElementById("amamin13").value;
                var amdhr = document.getElementById("amdhr13").value;
                var amdmin = document.getElementById("amdmin13").value;
                var pmahr = document.getElementById("pmahr13").value;
                var pmamin = document.getElementById("pmamin13").value;
                var pmdhr = document.getElementById("pmdhr13").value;
                var pmdmin = document.getElementById("pmdmin13").value;
                var hours = document.getElementById("hours13").value;
                var min = document.getElementById("min13").value;
                var tmin = document.getElementById("tmin13").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min13.value = finalmin;
                hours13.value = fullhour;
            }

            tmin13.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>14</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction14()" id="amahr14" name="amahr14"value="<?=$amahr14;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction14()" id="amamin14" name="amamin14"value="<?=$amamin14;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction14()" id="amdhr14" name="amdhr14"value="<?=$amdhr14;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction14()" id="amdmin14" name="amdmin14"value="<?=$amdmin14;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction14()" id="pmahr14" name="pmahr14"value="<?=$pmahr14;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction14()" id="pmamin14" name="pmamin14"value="<?=$pmamin14;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction14()" id="pmdhr14" name="pmdhr14"value="<?=$pmdhr14;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction14()" id="pmdmin14" name="pmdmin14"value="<?=$pmdmin14;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours14" name="hours14" value="<?=$hours14;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min14" name="min14"value="<?=$min14;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin14" name="tmin14"value="<?=$tmin14;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction14(){

                var amahr = document.getElementById("amahr14").value;
                var amamin = document.getElementById("amamin14").value;
                var amdhr = document.getElementById("amdhr14").value;
                var amdmin = document.getElementById("amdmin14").value;
                var pmahr = document.getElementById("pmahr14").value;
                var pmamin = document.getElementById("pmamin14").value;
                var pmdhr = document.getElementById("pmdhr14").value;
                var pmdmin = document.getElementById("pmdmin14").value;
                var hours = document.getElementById("hours14").value;
                var min = document.getElementById("min14").value;
                var tmin = document.getElementById("tmin14").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min14.value = finalmin;
                hours14.value = fullhour;
            }

            tmin14.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>15</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction15()" id="amahr15" name="amahr15"value="<?=$amahr15;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction15()" id="amamin15" name="amamin15"value="<?=$amamin15;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction15()" id="amdhr15" name="amdhr15"value="<?=$amdhr15;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction15()" id="amdmin15" name="amdmin15"value="<?=$amdmin15;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction15()" id="pmahr15" name="pmahr15"value="<?=$pmahr15;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction15()" id="pmamin15" name="pmamin15"value="<?=$pmamin15;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction15()" id="pmdhr15" name="pmdhr15"value="<?=$pmdhr15;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction15()" id="pmdmin15" name="pmdmin15"value="<?=$pmdmin15;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours15" name="hours15" value="<?=$hours15;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min15" name="min15"value="<?=$min15;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin15" name="tmin15"value="<?=$tmin15;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction15(){

                var amahr = document.getElementById("amahr15").value;
                var amamin = document.getElementById("amamin15").value;
                var amdhr = document.getElementById("amdhr15").value;
                var amdmin = document.getElementById("amdmin15").value;
                var pmahr = document.getElementById("pmahr15").value;
                var pmamin = document.getElementById("pmamin15").value;
                var pmdhr = document.getElementById("pmdhr15").value;
                var pmdmin = document.getElementById("pmdmin15").value;
                var hours = document.getElementById("hours15").value;
                var min = document.getElementById("min15").value;
                var tmin = document.getElementById("tmin15").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min15.value = finalmin;
                hours15.value = fullhour;
            }

            tmin15.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>16</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction16()" id="amahr16" name="amahr16"value="<?=$amahr16;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction16()" id="amamin16" name="amamin16"value="<?=$amamin16;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction16()" id="amdhr16" name="amdhr16"value="<?=$amdhr16;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction16()" id="amdmin16" name="amdmin16"value="<?=$amdmin16;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction16()" id="pmahr16" name="pmahr16"value="<?=$pmahr16;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction16()" id="pmamin16" name="pmamin16"value="<?=$pmamin16;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction16()" id="pmdhr16" name="pmdhr16"value="<?=$pmdhr16;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction16()" id="pmdmin16" name="pmdmin16"value="<?=$pmdmin16;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours16" name="hours16"value="<?=$hours16;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min16" name="min16"value="<?=$min16;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin16" name="tmin16"value="<?=$tmin16;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction16(){

                var amahr = document.getElementById("amahr16").value;
                var amamin = document.getElementById("amamin16").value;
                var amdhr = document.getElementById("amdhr16").value;
                var amdmin = document.getElementById("amdmin16").value;
                var pmahr = document.getElementById("pmahr16").value;
                var pmamin = document.getElementById("pmamin16").value;
                var pmdhr = document.getElementById("pmdhr16").value;
                var pmdmin = document.getElementById("pmdmin16").value;
                var hours = document.getElementById("hours16").value;
                var min = document.getElementById("min16").value;
                var tmin = document.getElementById("tmin16").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min16.value = finalmin;
                hours16.value = fullhour;
            }

            tmin16.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>17</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction17()" id="amahr17" name="amahr17"value="<?=$amahr17;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction17()" id="amamin17" name="amamin17"value="<?=$amamin17;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction17()" id="amdhr17" name="amdhr17"value="<?=$amdhr17;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction17()" id="amdmin17" name="amdmin17"value="<?=$amdmin17;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction17()" id="pmahr17" name="pmahr17"value="<?=$pmahr17;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction17()" id="pmamin17" name="pmamin17"value="<?=$pmamin17;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction17()" id="pmdhr17" name="pmdhr17"value="<?=$pmdhr17;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction17()" id="pmdmin17" name="pmdmin17"value="<?=$pmdmin17;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours17" name="hours17"value="<?=$hours17;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min17" name="min17"value="<?=$min17;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin17" name="tmin17"value="<?=$tmin17;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction17(){

                var amahr = document.getElementById("amahr17").value;
                var amamin = document.getElementById("amamin17").value;
                var amdhr = document.getElementById("amdhr17").value;
                var amdmin = document.getElementById("amdmin17").value;
                var pmahr = document.getElementById("pmahr17").value;
                var pmamin = document.getElementById("pmamin17").value;
                var pmdhr = document.getElementById("pmdhr17").value;
                var pmdmin = document.getElementById("pmdmin17").value;
                var hours = document.getElementById("hours17").value;
                var min = document.getElementById("min17").value;
                var tmin = document.getElementById("tmin17").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min17.value = finalmin;
                hours17.value = fullhour;
            }

            tmin17.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>18</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction18()" id="amahr18" name="amahr18"value="<?=$amahr18;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction18()" id="amamin18" name="amamin18"value="<?=$amamin18;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction18()" id="amdhr18" name="amdhr18"value="<?=$amdhr18;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction18()" id="amdmin18" name="amdmin18"value="<?=$amdmin18;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction18()" id="pmahr18" name="pmahr18"value="<?=$pmahr18;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction18()" id="pmamin18" name="pmamin18"value="<?=$pmamin18;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction18()" id="pmdhr18" name="pmdhr18"value="<?=$pmdhr18;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction18()" id="pmdmin18" name="pmdmin18"value="<?=$pmdmin18;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours18" name="hours18" value="<?=$hours18;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min18" name="min18"value="<?=$min18;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin18" name="tmin18"value="<?=$tmin18;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction18(){

                var amahr = document.getElementById("amahr18").value;
                var amamin = document.getElementById("amamin18").value;
                var amdhr = document.getElementById("amdhr18").value;
                var amdmin = document.getElementById("amdmin18").value;
                var pmahr = document.getElementById("pmahr18").value;
                var pmamin = document.getElementById("pmamin18").value;
                var pmdhr = document.getElementById("pmdhr18").value;
                var pmdmin = document.getElementById("pmdmin18").value;
                var hours = document.getElementById("hours18").value;
                var min = document.getElementById("min18").value;
                var tmin = document.getElementById("tmin18").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min18.value = finalmin;
                hours18.value = fullhour;
            }

            tmin18.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>19</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction19()" id="amahr19" name="amahr19"value="<?=$amahr19;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction19()" id="amamin19" name="amamin19"value="<?=$amamin19;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction19()" id="amdhr19" name="amdhr19"value="<?=$amdhr19;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction19()" id="amdmin19" name="amdmin19"value="<?=$amdmin19;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction19()" id="pmahr19" name="pmahr19"value="<?=$pmahr19;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction19()" id="pmamin19" name="pmamin19"value="<?=$pmamin19;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction19()" id="pmdhr19" name="pmdhr19"value="<?=$pmdhr19;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction19()" id="pmdmin19" name="pmdmin19"value="<?=$pmdmin19;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours19" name="hours19"value="<?=$hours19;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min19" name="min19"value="<?=$min19;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin19" name="tmin19"value="<?=$tmin19;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction19(){

                var amahr = document.getElementById("amahr19").value;
                var amamin = document.getElementById("amamin19").value;
                var amdhr = document.getElementById("amdhr19").value;
                var amdmin = document.getElementById("amdmin19").value;
                var pmahr = document.getElementById("pmahr19").value;
                var pmamin = document.getElementById("pmamin19").value;
                var pmdhr = document.getElementById("pmdhr19").value;
                var pmdmin = document.getElementById("pmdmin19").value;
                var hours = document.getElementById("hours19").value;
                var min = document.getElementById("min19").value;
                var tmin = document.getElementById("tmin19").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min19.value = finalmin;
                hours19.value = fullhour;
            }

            tmin19.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>20</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction20()" id="amahr20" name="amahr20"value="<?=$amahr20;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction20()" id="amamin20" name="amamin20"value="<?=$amamin20;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction20()" id="amdhr20" name="amdhr20"value="<?=$amdhr20;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction20()" id="amdmin20" name="amdmin20"value="<?=$amdmin20;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction20()" id="pmahr20" name="pmahr20"value="<?=$pmahr20;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction20()" id="pmamin20" name="pmamin20"value="<?=$pmamin20;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction20()" id="pmdhr20" name="pmdhr20"value="<?=$pmdhr20;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction20()" id="pmdmin20" name="pmdmin20"value="<?=$pmdmin20;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours20" name="hours20"value="<?=$hours20;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min20" name="min20"value="<?=$min20;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin20" name="tmin20"value="<?=$tmin20;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction20(){

                var amahr = document.getElementById("amahr20").value;
                var amamin = document.getElementById("amamin20").value;
                var amdhr = document.getElementById("amdhr20").value;
                var amdmin = document.getElementById("amdmin20").value;
                var pmahr = document.getElementById("pmahr20").value;
                var pmamin = document.getElementById("pmamin20").value;
                var pmdhr = document.getElementById("pmdhr20").value;
                var pmdmin = document.getElementById("pmdmin20").value;
                var hours = document.getElementById("hours20").value;
                var min = document.getElementById("min20").value;
                var tmin = document.getElementById("tmin20").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min20.value = finalmin;
                hours20.value = fullhour;
            }

            tmin20.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>21</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction21()" id="amahr21" name="amahr21"value="<?=$amahr21;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction21()" id="amamin21" name="amamin21"value="<?=$amamin21;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction21()" id="amdhr21" name="amdhr21"value="<?=$amdhr21;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction21()" id="amdmin21" name="amdmin21"value="<?=$amdmin21;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction21()" id="pmahr21" name="pmahr21"value="<?=$pmahr21;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction21()" id="pmamin21" name="pmamin21"value="<?=$pmamin21;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction21()" id="pmdhr21" name="pmdhr21"value="<?=$pmdhr21;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction21()" id="pmdmin21" name="pmdmin21"value="<?=$pmdmin21;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours21" name="hours21" value="<?=$hours21;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min21" name="min21"value="<?=$tmin21;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin21" name="tmin21"value="<?=$tmin21;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction21(){

                var amahr = document.getElementById("amahr21").value;
                var amamin = document.getElementById("amamin21").value;
                var amdhr = document.getElementById("amdhr21").value;
                var amdmin = document.getElementById("amdmin21").value;
                var pmahr = document.getElementById("pmahr21").value;
                var pmamin = document.getElementById("pmamin21").value;
                var pmdhr = document.getElementById("pmdhr21").value;
                var pmdmin = document.getElementById("pmdmin21").value;
                var hours = document.getElementById("hours21").value;
                var min = document.getElementById("min21").value;
                var tmin = document.getElementById("tmin21").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min21.value = finalmin;
                hours21.value = fullhour;
            }

            tmin21.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>22</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction22()" id="amahr22" name="amahr22"value="<?=$amahr22;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction22()" id="amamin22" name="amamin22"value="<?=$amamin22;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction22()" id="amdhr22" name="amdhr22"value="<?=$amdhr22;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction22()" id="amdmin22" name="amdmin22"value="<?=$amdmin22;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction22()" id="pmahr22" name="pmahr22"value="<?=$pmahr22;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction22()" id="pmamin22" name="pmamin22"value="<?=$pmamin22;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction22()" id="pmdhr22" name="pmdhr22"value="<?=$pmdhr22;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction22()" id="pmdmin22" name="pmdmin22"value="<?=$pmdmin22;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours22" name="hours22" value="<?=$hours22;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min22" name="min22"value="<?=$min22;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin22" name="tmin22"value="<?=$tmin22;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction22(){

                var amahr = document.getElementById("amahr22").value;
                var amamin = document.getElementById("amamin22").value;
                var amdhr = document.getElementById("amdhr22").value;
                var amdmin = document.getElementById("amdmin22").value;
                var pmahr = document.getElementById("pmahr22").value;
                var pmamin = document.getElementById("pmamin22").value;
                var pmdhr = document.getElementById("pmdhr22").value;
                var pmdmin = document.getElementById("pmdmin22").value;
                var hours = document.getElementById("hours22").value;
                var min = document.getElementById("min22").value;
                var tmin = document.getElementById("tmin22").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min22.value = finalmin;
                hours22.value = fullhour;
            }

            tmin22.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>23</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction23()" id="amahr23" name="amahr23"value="<?=$amahr23;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction23()" id="amamin23" name="amamin23"value="<?=$amamin23;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction23()" id="amdhr23" name="amdhr23"value="<?=$amdhr23;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction23()" id="amdmin23" name="amdmin23"value="<?=$amdmin23;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction23()" id="pmahr23" name="pmahr23"value="<?=$pmahr23;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction23()" id="pmamin23" name="pmamin23"value="<?=$pmamin23;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction23()" id="pmdhr23" name="pmdhr23"value="<?=$pmdhr23;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction23()" id="pmdmin23" name="pmdmin23"value="<?=$pmdmin23;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours23" name="hours23"value="<?=$hours23;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min23" name="min23"value="<?=$min23;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin23" name="tmin23"value="<?=$tmin23;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction23(){

                var amahr = document.getElementById("amahr23").value;
                var amamin = document.getElementById("amamin23").value;
                var amdhr = document.getElementById("amdhr23").value;
                var amdmin = document.getElementById("amdmin23").value;
                var pmahr = document.getElementById("pmahr23").value;
                var pmamin = document.getElementById("pmamin23").value;
                var pmdhr = document.getElementById("pmdhr23").value;
                var pmdmin = document.getElementById("pmdmin23").value;
                var hours = document.getElementById("hours23").value;
                var min = document.getElementById("min23").value;
                var tmin = document.getElementById("tmin23").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min23.value = finalmin;
                hours23.value = fullhour;
            }

            tmin23.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>24</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction24()" id="amahr24" name="amahr24"value="<?=$amahr24;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction24()" id="amamin24" name="amamin24"value="<?=$amamin24;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction24()" id="amdhr24" name="amdhr24"value="<?=$amdhr24;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction24()" id="amdmin24" name="amdmin24"value="<?=$amdmin24;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction24()" id="pmahr24" name="pmahr24"value="<?=$pmahr24;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction24()" id="pmamin24" name="pmamin24"value="<?=$pmamin24;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction24()" id="pmdhr24" name="pmdhr24"value="<?=$pmdhr24;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction24()" id="pmdmin24" name="pmdmin24"value="<?=$pmdmin24;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours24" name="hours24"value="<?=$hours24;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min24" name="min24"value="<?=$min24;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin24" name="tmin24"value="<?=$tmin24;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction24(){

                var amahr = document.getElementById("amahr24").value;
                var amamin = document.getElementById("amamin24").value;
                var amdhr = document.getElementById("amdhr24").value;
                var amdmin = document.getElementById("amdmin24").value;
                var pmahr = document.getElementById("pmahr24").value;
                var pmamin = document.getElementById("pmamin24").value;
                var pmdhr = document.getElementById("pmdhr24").value;
                var pmdmin = document.getElementById("pmdmin24").value;
                var hours = document.getElementById("hours24").value;
                var min = document.getElementById("min24").value;
                var tmin = document.getElementById("tmin24").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min24.value = finalmin;
                hours24.value = fullhour;
            }

            tmin24.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>25</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction25()" id="amahr25" name="amahr25"value="<?=$amahr25;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction25()" id="amamin25" name="amamin25"value="<?=$amamin25;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction25()" id="amdhr25" name="amdhr25"value="<?=$amdhr25;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction25()" id="amdmin25" name="amdmin25"value="<?=$amdmin25;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction25()" id="pmahr25" name="pmahr25"value="<?=$pmahr25;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction25()" id="pmamin25" name="pmamin25"value="<?=$pmamin25;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction25()" id="pmdhr25" name="pmdhr25"value="<?=$pmdhr25;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction25()" id="pmdmin25" name="pmdmin25"value="<?=$pmdmin25;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours25" name="hours25" value="<?=$hours25;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min25" name="min25"value="<?=$min25;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin25" name="tmin25"value="<?=$tmin25;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction25(){

                var amahr = document.getElementById("amahr25").value;
                var amamin = document.getElementById("amamin25").value;
                var amdhr = document.getElementById("amdhr25").value;
                var amdmin = document.getElementById("amdmin25").value;
                var pmahr = document.getElementById("pmahr25").value;
                var pmamin = document.getElementById("pmamin25").value;
                var pmdhr = document.getElementById("pmdhr25").value;
                var pmdmin = document.getElementById("pmdmin25").value;
                var hours = document.getElementById("hours25").value;
                var min = document.getElementById("min25").value;
                var tmin = document.getElementById("tmin25").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min25.value = finalmin;
                hours25.value = fullhour;
            }

            tmin25.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>26</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction26()" id="amahr26" name="amahr26"value="<?=$amahr26;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction26()" id="amamin26" name="amamin26"value="<?=$amamin26;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction26()" id="amdhr26" name="amdhr26"value="<?=$amdhr26;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction26()" id="amdmin26" name="amdmin26"value="<?=$amdmin26;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction26()" id="pmahr26" name="pmahr26"value="<?=$pmahr26;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction26()" id="pmamin26" name="pmamin26"value="<?=$pmamin26;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction26()" id="pmdhr26" name="pmdhr26"value="<?=$pmdhr26;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction26()" id="pmdmin26" name="pmdmin26"value="<?=$pmdmin26;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours26" name="hours26" value="<?=$hours26;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min26" name="min26"value="<?=$min26;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin26" name="tmin26"value="<?=$tmin26;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction26(){

                var amahr = document.getElementById("amahr26").value;
                var amamin = document.getElementById("amamin26").value;
                var amdhr = document.getElementById("amdhr26").value;
                var amdmin = document.getElementById("amdmin26").value;
                var pmahr = document.getElementById("pmahr26").value;
                var pmamin = document.getElementById("pmamin26").value;
                var pmdhr = document.getElementById("pmdhr26").value;
                var pmdmin = document.getElementById("pmdmin26").value;
                var hours = document.getElementById("hours26").value;
                var min = document.getElementById("min26").value;
                var tmin = document.getElementById("tmin26").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min26.value = finalmin;
                hours26.value = fullhour;
            }

            tmin26.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>27</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction27()" id="amahr27" name="amahr27"value="<?=$amahr27;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction27()" id="amamin27" name="amamin27"value="<?=$amamin27;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction27()" id="amdhr27" name="amdhr27"value="<?=$amdhr27;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction27()" id="amdmin27" name="amdmin27"value="<?=$amdmin27;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction27()" id="pmahr27" name="pmahr27"value="<?=$pmahr27;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction27()" id="pmamin27" name="pmamin27"value="<?=$pmamin27;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction27()" id="pmdhr27" name="pmdhr27"value="<?=$pmdhr27;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction27()" id="pmdmin27" name="pmdmin27"value="<?=$pmdmin27;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="hours27" name="hours27"value="<?=$hours27;?>" ></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="min27" name="min27"value="<?=$min27;?>"></td>
            <td><input type="text" style="font-weight:bold" onkeyup="functionTotal()" readonly="readonly" id="tmin27" name="tmin27"value="<?=$tmin27;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction27(){

                var amahr = document.getElementById("amahr27").value;
                var amamin = document.getElementById("amamin27").value;
                var amdhr = document.getElementById("amdhr27").value;
                var amdmin = document.getElementById("amdmin27").value;
                var pmahr = document.getElementById("pmahr27").value;
                var pmamin = document.getElementById("pmamin27").value;
                var pmdhr = document.getElementById("pmdhr27").value;
                var pmdmin = document.getElementById("pmdmin27").value;
                var hours = document.getElementById("hours27").value;
                var min = document.getElementById("min27").value;
                var tmin = document.getElementById("tmin27").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min27.value = finalmin;
                hours27.value = fullhour;
            }

            tmin27.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>28</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction28()" id="amahr28" name="amahr28"value="<?=$amahr28;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction28()" id="amamin28" name="amamin28"value="<?=$amamin28;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction28()" id="amdhr28" name="amdhr28"value="<?=$amdhr28;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction28()" id="amdmin28" name="amdmin28"value="<?=$amdmin28;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction28()" id="pmahr28" name="pmahr28"value="<?=$pmahr28;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction28()" id="pmamin28" name="pmamin28"value="<?=$pmamin28;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction28()" id="pmdhr28" name="pmdhr28"value="<?=$pmdhr28;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction28()" id="pmdmin28" name="pmdmin28"value="<?=$pmdmin28;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="hours28" name="hours28" value="<?=$hours28;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="min28" name="min28"value="<?=$min28;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="tmin28" name="tmin28"value="<?=$tmin28;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction28(){

                var amahr = document.getElementById("amahr28").value;
                var amamin = document.getElementById("amamin28").value;
                var amdhr = document.getElementById("amdhr28").value;
                var amdmin = document.getElementById("amdmin28").value;
                var pmahr = document.getElementById("pmahr28").value;
                var pmamin = document.getElementById("pmamin28").value;
                var pmdhr = document.getElementById("pmdhr28").value;
                var pmdmin = document.getElementById("pmdmin28").value;
                var hours = document.getElementById("hours28").value;
                var min = document.getElementById("min28").value;
                var tmin = document.getElementById("tmin28").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min28.value = finalmin;
                hours28.value = fullhour;
            }

            tmin28.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>29</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction29()" id="amahr29" name="amahr29"value="<?=$amahr29;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction29()" id="amamin29" name="amamin29"value="<?=$amamin29;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction29()" id="amdhr29" name="amdhr29"value="<?=$amdhr29;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction29()" id="amdmin29" name="amdmin29"value="<?=$amdmin29;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction29()" id="pmahr29" name="pmahr29"value="<?=$pmahr29;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction29()" id="pmamin29" name="pmamin29"value="<?=$pmamin29;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction29()" id="pmdhr29" name="pmdhr29"value="<?=$pmdhr29;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction29()" id="pmdmin29" name="pmdmin29"value="<?=$pmdmin29;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="hours29" name="hours29"value="<?=$hours29;?>" ></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="min29" name="min29"value="<?=$min29;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="tmin29" name="tmin29"value="<?=$tmin29;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction29(){

                var amahr = document.getElementById("amahr29").value;
                var amamin = document.getElementById("amamin29").value;
                var amdhr = document.getElementById("amdhr29").value;
                var amdmin = document.getElementById("amdmin29").value;
                var pmahr = document.getElementById("pmahr29").value;
                var pmamin = document.getElementById("pmamin29").value;
                var pmdhr = document.getElementById("pmdhr29").value;
                var pmdmin = document.getElementById("pmdmin29").value;
                var hours = document.getElementById("hours29").value;
                var min = document.getElementById("min29").value;
                var tmin = document.getElementById("tmin29").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min29.value = finalmin;
                hours29.value = fullhour;
            }

            tmin29.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>30</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction30()" id="amahr30" name="amahr30"value="<?=$amahr30;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction30()" id="amamin30" name="amamin30"value="<?=$amamin30;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction30()" id="amdhr30" name="amdhr30"value="<?=$amdhr30;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction30()" id="amdmin30" name="amdmin30"value="<?=$amdmin30;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction30()" id="pmahr30" name="pmahr30"value="<?=$pmahr30;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction30()" id="pmamin30" name="pmamin30"value="<?=$pmamin30;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction30()" id="pmdhr30" name="pmdhr30"value="<?=$pmdhr30;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction30()" id="pmdmin30" name="pmdmin30"value="<?=$pmdmin30;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="hours30" name="hours30"value="<?=$hours30;?>" ></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="min30" name="min30"value="<?=$min30;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="tmin30" name="tmin30"value="<?=$tmin30;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction30(){

                var amahr = document.getElementById("amahr30").value;
                var amamin = document.getElementById("amamin30").value;
                var amdhr = document.getElementById("amdhr30").value;
                var amdmin = document.getElementById("amdmin30").value;
                var pmahr = document.getElementById("pmahr30").value;
                var pmamin = document.getElementById("pmamin30").value;
                var pmdhr = document.getElementById("pmdhr30").value;
                var pmdmin = document.getElementById("pmdmin30").value;
                var hours = document.getElementById("hours30").value;
                var min = document.getElementById("min30").value;
                var tmin = document.getElementById("tmin30").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min30.value = finalmin;
                hours30.value = fullhour;
            }

            tmin30.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <td>31</td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction31()" id="amahr31" name="amahr31"value="<?=$amahr31;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction31()" id="amamin31" name="amamin31"value="<?=$amamin31;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction31()" id="amdhr31" name="amdhr31"value="<?=$amdhr31;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction31()" id="amdmin31" name="amdmin31"value="<?=$amdmin31;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction31()" id="pmahr31" name="pmahr31"value="<?=$pmahr31;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction31()" id="pmamin31" name="pmamin31"value="<?=$pmamin31;?>"></td>
            <td><input style="text-align:right" type="text" onkeyup="myFunction31()" id="pmdhr31" name="pmdhr31"value="<?=$pmdhr31;?>"></td>
            <td><input style="text-align:left" type="text" onkeyup="myFunction()31" id="pmdmin31" name="pmdmin31"value="<?=$pmdmin31;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="hours31" name="hours31"value="<?=$hours31;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="min31" name="min31"value="<?=$min31;?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly" id="tmin31" name="tmin31"value="<?=$tmin31;?>"></td>
            <script lang="javascript" type="text/javascript">

              function myFunction31(){

                var amahr = document.getElementById("amahr31").value;
                var amamin = document.getElementById("amamin31").value;
                var amdhr = document.getElementById("amdhr31").value;
                var amdmin = document.getElementById("amdmin31").value;
                var pmahr = document.getElementById("pmahr31").value;
                var pmamin = document.getElementById("pmamin31").value;
                var pmdhr = document.getElementById("pmdhr31").value;
                var pmdmin = document.getElementById("pmdmin31").value;
                var hours = document.getElementById("hours31").value;
                var min = document.getElementById("min31").value;
                var tmin = document.getElementById("tmin31").value;

            var ama = ((amahr * 100) + ((100/60)*(amamin)));
            var amd = ((amdhr * 100) + ((100/60)*(amdmin)));
            var pma = ((pmahr * 100) + ((100/60)*(pmamin)));
            var pmd = ((pmdhr * 100) + ((100/60)*(pmdmin)));
                
            // case 1
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = 0;
                var totalmin = 0;
                var fullhour = 0;
                var finalmin = 0;
            } 
            // case 2
            if (((ama <= 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = (1700 - pmd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 3
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = (pma - 1300);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 4
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (1200 - amd);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 5
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = (ama - 800);
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 6
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 7
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 8
            if (((ama <= 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 9
            if (((ama > 800) && (amd >= 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 10
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 11
            if (((ama <= 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 12
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd >= 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (pma - 1300));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 13
            if (((ama > 800) && (amd >= 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 14
            if (((ama > 800) && (amd < 1200)) && ((pma <= 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 15
            if (((ama <= 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((1200 - amd) + (pma - 1300) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            // case 16
            if (((ama > 800) && (amd < 1200)) && ((pma > 1300) && (pmd < 1700))) {
                var hour1 = ((ama - 800) + (pma - 1300) + (1200 - amd) + (1700 - pmd));
                var roundmin = (hour1/100)*(60);
                var totalmin = Math.round(roundmin);
                var hours = (roundmin/60);
                var fullhour = parseInt(hours);
                var finalmin  = (Math.round((hours - fullhour)*(60)));
            }

            if (finalmin >= 60){
                var fmin = 0;
                var fhour = fullhour + 1 ;
                min1.value = fmin;
                hours1.value = fhour;
            } else {
                min31.value = finalmin;
                hours31.value = fullhour;
            }

            tmin31.value = totalmin;
          } 
          </script>
        </tr>
        <tr>
          <script lang="javascript" type="text/javascript">

    function functionTotalall(dtr) {

        
      var tm1 = document.getElementById("tmin1").value;
      var tm2 = document.getElementById("tmin2").value;
      var tm3 = document.getElementById("tmin3").value;
      var tm4 = document.getElementById("tmin4").value;
      var tm5 = document.getElementById("tmin5").value;
      var tm6 = document.getElementById("tmin6").value;
      var tm7 = document.getElementById("tmin7").value;
      var tm8 = document.getElementById("tmin8").value;
      var tm9 = document.getElementById("tmin9").value;
      var tm10 = document.getElementById("tmin10").value;
      var tm11 = document.getElementById("tmin11").value;
      var tm12 = document.getElementById("tmin12").value;
      var tm13 = document.getElementById("tmin13").value;
      var tm14 = document.getElementById("tmin14").value;
      var tm15 = document.getElementById("tmin15").value;
      var tm16 = document.getElementById("tmin16").value;
      var tm17 = document.getElementById("tmin17").value;
      var tm18 = document.getElementById("tmin18").value;
      var tm19 = document.getElementById("tmin19").value;
      var tm20 = document.getElementById("tmin20").value;
      var tm21 = document.getElementById("tmin21").value;
      var tm22 = document.getElementById("tmin22").value;
      var tm23 = document.getElementById("tmin23").value;
      var tm24 = document.getElementById("tmin24").value;
      var tm25 = document.getElementById("tmin25").value;
      var tm26 = document.getElementById("tmin26").value;
      var tm27 = document.getElementById("tmin27").value;
      var tm28 = document.getElementById("tmin28").value;
      var tm29 = document.getElementById("tmin29").value;
      var tm30 = document.getElementById("tmin30").value;
      var tm31 = document.getElementById("tmin31").value;

        var tm = ((Number(tm1)) + (Number(tm2)) + (Number(tm3)) + (Number(tm4)) + (Number(tm5)) + (Number(tm6)) + (Number(tm7)) + (Number(tm8)) + (Number(tm9)) +  
        (Number(tm10)) + (Number(tm11)) + (Number(tm12)) + (Number(tm13)) + (Number(tm14)) + (Number(tm15)) + (Number(tm16)) + (Number(tm17)) + (Number(tm18)) + (Number(tm19)) + (Number(tm20)) + 
        (Number(tm21)) + (Number(tm22)) + (Number(tm23)) + (Number(tm24)) + (Number(tm25)) + (Number(tm26)) + (Number(tm27)) + (Number(tm28)) + (Number(tm29)) + (Number(tm30)) + (Number(tm31)));

        var hr = (parseInt(tm/60));

        var m = (Math.round(((tm/60) - hr)*(60)));

      total_hours.value = hr;
      total_min.value = m;
      total_under_min.value = tm;
    }


</script>
          <th id="total" colspan="9" scope="colgroup" style="width:160px; text-align:right"><input type="button" style="width:50px" value="Total" onclick="functionTotalall(dtr)" id="total" name="total"></th>
          <th style="width:40px"><input type="text" readonly="readonly" style="width:50px" id="total_hours" name="total_hours"value="<?=$total_hours;?>"></th>
          <th style="width:40px"><input type="text" readonly="readonly" style="width:50px" id="total_min" name="total_min"value="<?=$total_min;?>"></th>
          <th style="width:40px"><input type="text" style="width:50px"  id="total_under_min" name="total_under_min"value="<?=$total_under_min;?>"></th>
        </tr>
      </table>
    </form>
  </div>
  </div>
    <div class="rsidebar_dtr"></div>
    </section>
</div>
</body>
</html>