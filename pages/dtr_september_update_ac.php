<?php
// Connect to server and select database.
$conn=mysql_connect("localhost", "root", "ramyaj")or die("cannot connect"); 
mysql_select_db("time_record", $conn);

// update data in mysql database 

$sql="UPDATE september SET  
amahr1= '".$_POST['amahr1']."',  amamin1= '".$_POST['amamin1']."',  amdhr1= '".$_POST['amdhr1']."', amdmin1= '".$_POST['amdmin1']."', pmahr1= '".$_POST['pmahr1']."', pmamin1= '".$_POST['pmamin1']."', pmdhr1= '".$_POST['pmdhr1']."', pmdmin1= '".$_POST['pmdmin1']."', hours1= '".$_POST['hours1']."', min1= '".$_POST['min1']."', tmin1= '".$_POST['tmin1']."',
amahr2= '".$_POST['amahr2']."',  amamin2= '".$_POST['amamin2']."',  amdhr2= '".$_POST['amdhr2']."', amdmin2= '".$_POST['amdmin2']."', pmahr2= '".$_POST['pmahr2']."', pmamin2= '".$_POST['pmamin2']."', pmdhr2= '".$_POST['pmdhr2']."', pmdmin2= '".$_POST['pmdmin2']."', hours2= '".$_POST['hours2']."', min2= '".$_POST['min2']."', tmin2= '".$_POST['tmin2']."',
amahr3= '".$_POST['amahr3']."',  amamin3= '".$_POST['amamin3']."',  amdhr3= '".$_POST['amdhr3']."', amdmin3= '".$_POST['amdmin3']."', pmahr3= '".$_POST['pmahr3']."', pmamin3= '".$_POST['pmamin3']."', pmdhr3= '".$_POST['pmdhr3']."', pmdmin3= '".$_POST['pmdmin3']."', hours3= '".$_POST['hours3']."', min3= '".$_POST['min3']."', tmin3= '".$_POST['tmin3']."',
amahr4= '".$_POST['amahr4']."',  amamin4= '".$_POST['amamin4']."',  amdhr4= '".$_POST['amdhr4']."', amdmin4= '".$_POST['amdmin4']."', pmahr4= '".$_POST['pmahr4']."', pmamin4= '".$_POST['pmamin4']."', pmdhr4= '".$_POST['pmdhr4']."', pmdmin4= '".$_POST['pmdmin4']."', hours4= '".$_POST['hours4']."', min4= '".$_POST['min4']."', tmin4= '".$_POST['tmin4']."',
amahr5= '".$_POST['amahr5']."',  amamin5= '".$_POST['amamin5']."',  amdhr5= '".$_POST['amdhr5']."', amdmin5= '".$_POST['amdmin5']."', pmahr5= '".$_POST['pmahr5']."', pmamin5= '".$_POST['pmamin5']."', pmdhr5= '".$_POST['pmdhr5']."', pmdmin5= '".$_POST['pmdmin5']."', hours5= '".$_POST['hours5']."', min5= '".$_POST['min5']."', tmin5= '".$_POST['tmin5']."',
amahr6= '".$_POST['amahr6']."',  amamin6= '".$_POST['amamin6']."',  amdhr6= '".$_POST['amdhr6']."', amdmin6= '".$_POST['amdmin6']."', pmahr6= '".$_POST['pmahr6']."', pmamin6= '".$_POST['pmamin6']."', pmdhr6= '".$_POST['pmdhr6']."', pmdmin6= '".$_POST['pmdmin6']."', hours6= '".$_POST['hours6']."', min6= '".$_POST['min6']."', tmin6= '".$_POST['tmin6']."',
amahr7= '".$_POST['amahr7']."',  amamin7= '".$_POST['amamin7']."',  amdhr7= '".$_POST['amdhr7']."', amdmin7= '".$_POST['amdmin7']."', pmahr7= '".$_POST['pmahr7']."', pmamin7= '".$_POST['pmamin7']."', pmdhr7= '".$_POST['pmdhr7']."', pmdmin7= '".$_POST['pmdmin7']."', hours7= '".$_POST['hours7']."', min7= '".$_POST['min7']."', tmin7= '".$_POST['tmin7']."',
amahr8= '".$_POST['amahr8']."',  amamin8= '".$_POST['amamin8']."',  amdhr8= '".$_POST['amdhr8']."', amdmin8= '".$_POST['amdmin8']."', pmahr8= '".$_POST['pmahr8']."', pmamin8= '".$_POST['pmamin8']."', pmdhr8= '".$_POST['pmdhr8']."', pmdmin8= '".$_POST['pmdmin8']."', hours8= '".$_POST['hours8']."', min8= '".$_POST['min8']."', tmin8= '".$_POST['tmin8']."',
amahr9= '".$_POST['amahr9']."',  amamin9= '".$_POST['amamin9']."',  amdhr9= '".$_POST['amdhr9']."', amdmin9= '".$_POST['amdmin9']."', pmahr9= '".$_POST['pmahr9']."', pmamin9= '".$_POST['pmamin9']."', pmdhr9= '".$_POST['pmdhr9']."', pmdmin9= '".$_POST['pmdmin9']."', hours9= '".$_POST['hours9']."', min9= '".$_POST['min9']."', tmin9= '".$_POST['tmin9']."',
amahr10= '".$_POST['amahr10']."',  amamin10= '".$_POST['amamin10']."',  amdhr10= '".$_POST['amdhr10']."', amdmin10= '".$_POST['amdmin10']."', pmahr10= '".$_POST['pmahr10']."', pmamin10= '".$_POST['pmamin10']."', pmdhr10= '".$_POST['pmdhr10']."', pmdmin10= '".$_POST['pmdmin10']."', hours10= '".$_POST['hours10']."', min10= '".$_POST['min10']."', tmin10= '".$_POST['tmin10']."',
amahr11= '".$_POST['amahr11']."',  amamin11= '".$_POST['amamin11']."',  amdhr11= '".$_POST['amdhr11']."', amdmin11= '".$_POST['amdmin11']."', pmahr11= '".$_POST['pmahr11']."', pmamin11= '".$_POST['pmamin11']."', pmdhr11= '".$_POST['pmdhr11']."', pmdmin11= '".$_POST['pmdmin11']."', hours11= '".$_POST['hours11']."', min11= '".$_POST['min11']."', tmin11= '".$_POST['tmin11']."',
amahr12= '".$_POST['amahr12']."',  amamin12= '".$_POST['amamin12']."',  amdhr12= '".$_POST['amdhr12']."', amdmin12= '".$_POST['amdmin12']."', pmahr12= '".$_POST['pmahr12']."', pmamin12= '".$_POST['pmamin12']."', pmdhr12= '".$_POST['pmdhr12']."', pmdmin12= '".$_POST['pmdmin12']."', hours12= '".$_POST['hours12']."', min12= '".$_POST['min12']."', tmin12= '".$_POST['tmin12']."',
amahr13= '".$_POST['amahr13']."',  amamin13= '".$_POST['amamin13']."',  amdhr13= '".$_POST['amdhr13']."', amdmin13= '".$_POST['amdmin13']."', pmahr13= '".$_POST['pmahr13']."', pmamin13= '".$_POST['pmamin13']."', pmdhr13= '".$_POST['pmdhr13']."', pmdmin13= '".$_POST['pmdmin13']."', hours13= '".$_POST['hours13']."', min13= '".$_POST['min13']."', tmin13= '".$_POST['tmin13']."',
amahr14= '".$_POST['amahr14']."',  amamin14= '".$_POST['amamin14']."',  amdhr14= '".$_POST['amdhr14']."', amdmin14= '".$_POST['amdmin14']."', pmahr14= '".$_POST['pmahr14']."', pmamin14= '".$_POST['pmamin14']."', pmdhr14= '".$_POST['pmdhr14']."', pmdmin14= '".$_POST['pmdmin14']."', hours14= '".$_POST['hours14']."', min14= '".$_POST['min14']."', tmin14= '".$_POST['tmin14']."',
amahr15= '".$_POST['amahr15']."',  amamin15= '".$_POST['amamin15']."',  amdhr15= '".$_POST['amdhr15']."', amdmin15= '".$_POST['amdmin15']."', pmahr15= '".$_POST['pmahr15']."', pmamin15= '".$_POST['pmamin15']."', pmdhr15= '".$_POST['pmdhr15']."', pmdmin15= '".$_POST['pmdmin15']."', hours15= '".$_POST['hours15']."', min15= '".$_POST['min15']."', tmin15= '".$_POST['tmin15']."',
amahr16= '".$_POST['amahr16']."',  amamin16= '".$_POST['amamin16']."',  amdhr16= '".$_POST['amdhr16']."', amdmin16= '".$_POST['amdmin16']."', pmahr16= '".$_POST['pmahr16']."', pmamin16= '".$_POST['pmamin16']."', pmdhr16= '".$_POST['pmdhr16']."', pmdmin16= '".$_POST['pmdmin16']."', hours16= '".$_POST['hours16']."', min16= '".$_POST['min16']."', tmin16= '".$_POST['tmin16']."',
amahr17= '".$_POST['amahr17']."',  amamin17= '".$_POST['amamin17']."',  amdhr17= '".$_POST['amdhr17']."', amdmin17= '".$_POST['amdmin17']."', pmahr17= '".$_POST['pmahr17']."', pmamin17= '".$_POST['pmamin17']."', pmdhr17= '".$_POST['pmdhr17']."', pmdmin17= '".$_POST['pmdmin17']."', hours17= '".$_POST['hours17']."', min17= '".$_POST['min17']."', tmin17= '".$_POST['tmin17']."',
amahr18= '".$_POST['amahr18']."',  amamin18= '".$_POST['amamin18']."',  amdhr18= '".$_POST['amdhr18']."', amdmin18= '".$_POST['amdmin18']."', pmahr18= '".$_POST['pmahr18']."', pmamin18= '".$_POST['pmamin18']."', pmdhr18= '".$_POST['pmdhr18']."', pmdmin18= '".$_POST['pmdmin18']."', hours18= '".$_POST['hours18']."', min18= '".$_POST['min18']."', tmin18= '".$_POST['tmin18']."',
amahr19= '".$_POST['amahr19']."',  amamin19= '".$_POST['amamin19']."',  amdhr19= '".$_POST['amdhr19']."', amdmin19= '".$_POST['amdmin19']."', pmahr19= '".$_POST['pmahr19']."', pmamin19= '".$_POST['pmamin19']."', pmdhr19= '".$_POST['pmdhr19']."', pmdmin19= '".$_POST['pmdmin19']."', hours19= '".$_POST['hours19']."', min19= '".$_POST['min19']."', tmin19= '".$_POST['tmin19']."',
amahr20= '".$_POST['amahr20']."',  amamin20= '".$_POST['amamin20']."',  amdhr20= '".$_POST['amdhr20']."', amdmin20= '".$_POST['amdmin20']."', pmahr20= '".$_POST['pmahr20']."', pmamin20= '".$_POST['pmamin20']."', pmdhr20= '".$_POST['pmdhr20']."', pmdmin20= '".$_POST['pmdmin20']."', hours20= '".$_POST['hours20']."', min20= '".$_POST['min20']."', tmin20= '".$_POST['tmin20']."',
amahr21= '".$_POST['amahr21']."',  amamin21= '".$_POST['amamin21']."',  amdhr21= '".$_POST['amdhr21']."', amdmin21= '".$_POST['amdmin21']."', pmahr21= '".$_POST['pmahr21']."', pmamin21= '".$_POST['pmamin21']."', pmdhr21= '".$_POST['pmdhr21']."', pmdmin21= '".$_POST['pmdmin21']."', hours21= '".$_POST['hours21']."', min21= '".$_POST['min21']."', tmin21= '".$_POST['tmin21']."',
amahr22= '".$_POST['amahr22']."',  amamin22= '".$_POST['amamin22']."',  amdhr22= '".$_POST['amdhr22']."', amdmin22= '".$_POST['amdmin22']."', pmahr22= '".$_POST['pmahr22']."', pmamin22= '".$_POST['pmamin22']."', pmdhr22= '".$_POST['pmdhr22']."', pmdmin22= '".$_POST['pmdmin22']."', hours22= '".$_POST['hours22']."', min22= '".$_POST['min22']."', tmin22= '".$_POST['tmin22']."',
amahr23= '".$_POST['amahr23']."',  amamin23= '".$_POST['amamin23']."',  amdhr23= '".$_POST['amdhr23']."', amdmin23= '".$_POST['amdmin23']."', pmahr23= '".$_POST['pmahr23']."', pmamin23= '".$_POST['pmamin23']."', pmdhr23= '".$_POST['pmdhr23']."', pmdmin23= '".$_POST['pmdmin23']."', hours23= '".$_POST['hours23']."', min23= '".$_POST['min23']."', tmin23= '".$_POST['tmin23']."',
amahr24= '".$_POST['amahr24']."',  amamin24= '".$_POST['amamin24']."',  amdhr24= '".$_POST['amdhr24']."', amdmin24= '".$_POST['amdmin24']."', pmahr24= '".$_POST['pmahr24']."', pmamin24= '".$_POST['pmamin24']."', pmdhr24= '".$_POST['pmdhr24']."', pmdmin24= '".$_POST['pmdmin24']."', hours24= '".$_POST['hours24']."', min24= '".$_POST['min24']."', tmin24= '".$_POST['tmin24']."',
amahr25= '".$_POST['amahr25']."',  amamin25= '".$_POST['amamin25']."',  amdhr25= '".$_POST['amdhr25']."', amdmin25= '".$_POST['amdmin25']."', pmahr25= '".$_POST['pmahr25']."', pmamin25= '".$_POST['pmamin25']."', pmdhr25= '".$_POST['pmdhr25']."', pmdmin25= '".$_POST['pmdmin25']."', hours25= '".$_POST['hours25']."', min25= '".$_POST['min25']."', tmin25= '".$_POST['tmin25']."',
amahr26= '".$_POST['amahr26']."',  amamin26= '".$_POST['amamin26']."',  amdhr26= '".$_POST['amdhr26']."', amdmin26= '".$_POST['amdmin26']."', pmahr26= '".$_POST['pmahr26']."', pmamin26= '".$_POST['pmamin26']."', pmdhr26= '".$_POST['pmdhr26']."', pmdmin26= '".$_POST['pmdmin26']."', hours26= '".$_POST['hours26']."', min26= '".$_POST['min26']."', tmin26= '".$_POST['tmin26']."',
amahr27= '".$_POST['amahr27']."',  amamin27= '".$_POST['amamin27']."',  amdhr27= '".$_POST['amdhr27']."', amdmin27= '".$_POST['amdmin27']."', pmahr27= '".$_POST['pmahr27']."', pmamin27= '".$_POST['pmamin27']."', pmdhr27= '".$_POST['pmdhr27']."', pmdmin27= '".$_POST['pmdmin27']."', hours27= '".$_POST['hours27']."', min27= '".$_POST['min27']."', tmin27= '".$_POST['tmin27']."',
amahr28= '".$_POST['amahr28']."',  amamin28= '".$_POST['amamin28']."',  amdhr28= '".$_POST['amdhr28']."', amdmin28= '".$_POST['amdmin28']."', pmahr28= '".$_POST['pmahr28']."', pmamin28= '".$_POST['pmamin28']."', pmdhr28= '".$_POST['pmdhr28']."', pmdmin28= '".$_POST['pmdmin28']."', hours28= '".$_POST['hours28']."', min28= '".$_POST['min28']."', tmin28= '".$_POST['tmin28']."',
amahr29= '".$_POST['amahr29']."',  amamin29= '".$_POST['amamin29']."',  amdhr29= '".$_POST['amdhr29']."', amdmin29= '".$_POST['amdmin29']."', pmahr29= '".$_POST['pmahr29']."', pmamin29= '".$_POST['pmamin29']."', pmdhr29= '".$_POST['pmdhr29']."', pmdmin29= '".$_POST['pmdmin29']."', hours29= '".$_POST['hours29']."', min29= '".$_POST['min29']."', tmin29= '".$_POST['tmin29']."',
amahr30= '".$_POST['amahr30']."',  amamin30= '".$_POST['amamin30']."',  amdhr30= '".$_POST['amdhr30']."', amdmin30= '".$_POST['amdmin30']."', pmahr30= '".$_POST['pmahr30']."', pmamin30= '".$_POST['pmamin30']."', pmdhr30= '".$_POST['pmdhr30']."', pmdmin30= '".$_POST['pmdmin30']."', hours30= '".$_POST['hours30']."', min30= '".$_POST['min30']."', tmin30= '".$_POST['tmin30']."',
amahr31= '".$_POST['amahr31']."',  amamin31= '".$_POST['amamin31']."',  amdhr31= '".$_POST['amdhr31']."', amdmin31= '".$_POST['amdmin31']."', pmahr31= '".$_POST['pmahr31']."', pmamin31= '".$_POST['pmamin31']."', pmdhr31= '".$_POST['pmdhr31']."', pmdmin31= '".$_POST['pmdmin31']."', hours31= '".$_POST['hours31']."', min31= '".$_POST['min31']."', tmin31= '".$_POST['tmin31']."',
total_hours= '".$_POST['total_hours']."',  total_min= '".$_POST['total_min']."',  total_under_min= '".$_POST['total_under_min']."'
WHERE employee_id='".$_POST['employee_id']."'";

$result=mysql_query($sql) or die ('Could not enter data: ' . mysql_error());


// if successfully updated. 
if($result){

echo "<meta http-equiv='refresh' content='1;URL=dtr_september.php'/><center><h1>Na-Update mo!</h1></center></a>";
}

else {
echo "ERROR";
}

?>