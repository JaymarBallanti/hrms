<html>
<head></head>
<body>
<div class="content_dtr" style="text-align:center">
      <div class="form_title"><p></p>
      <form name="dtr" action=" " method="post">
      <table id="timesheet" style="border:2px solid #8DC3E9">
        <tr><td colspan="12"><center><b style="font-size:18px">Daily Time Record</center></b></td></tr>
        <tr>
          <td colspan="2">Employee ID: </td>
          <td colspan="2"><input type="text" style="width:70px" readonly="true" name="employee_id" value="<?=$employee_id;?>"></td>
          <td colspan="8">Name: &nbsp&nbsp
            <input type="text"  style="width:180px" name="last_name" readonly="true" value="<?="$last_name, $first_name $middle_name";?>">
          </td>
        </tr>
        <tr>
          <td colspan="2">Month: </td>
          <td colspan="2"><input type="text" style="width:70px" readonly="true" name="month" value="<?=$month;?>"></td>
          <td colspan="8">Regular Days: <input type="text" readonly="true" style="width:70px" id="regular_days" name="regular_days" value="<?=$regular_days;?>">
             Saturdays: <input type="text" style="width:70px" readonly="true" id="saturdays" name="saturdays" value="<?=$saturdays;?>"></td>
        </tr>
        <tr>
          <th rowspan="2" scope="colgroup" style="width:30px; text-align:center">Day</th>
          <th colspan="4" scope="colgroup" style="width:60px; text-align:center">AM</th>
          <th colspan="4" scope="colgroup" style="width:80px; text-align:center">PM</th>
          <th colspan="3" scope="colgroup" style="width:80px; text-align:center">Total Under Time</th>
        </tr>
        <tr>
          <th colspan="2" scope="col" style="width:40px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:40px; text-align:center">Departure</th>
          <th colspan="2" scope="col" style="width:40px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:40px; text-align:center">Departure</th>
          <th rowspan="1" scope="col" style="width:20px; text-align:center">Hours</th>
          <th rowspan="1" scope="col" style="width:20px; text-align:center">Min</th>
          <th rowspan="1" scope="col" style="width:60px; text-align:center">Total in<br/>Minutes</th>
        </tr>
       
        <tr>
          <td>1</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr1" name="amahr1" value="<?=sprintf("%02d",$amahr1);?>:<?=sprintf("%02d",$amamin1);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr1" name="amdhr1" value="<?=sprintf("%02d",$amdhr1);?>:<?=sprintf("%02d",$amdmin1);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr1" name="pmahr1" value="<?=sprintf("%02d",$pmahr1);?>:<?=sprintf("%02d",$pmamin1);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr1" name="pmdhr1" value="<?=sprintf("%02d",$pmdhr1);?>:<?=sprintf("%02d",$pmdmin1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="true" id="hours1" name="hours1" value="<?=sprintf("%02d",$hours1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="true" id="min1" name="min1"value="<?=sprintf("%02d",$min1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="true" id="tmin1" name="tmin1"value="<?=sprintf("%03d",$tmin1);?>"></td>
        </tr>
        <tr>
          <td>2</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr2" name="amahr2" value="<?=sprintf("%02d",$amahr2);?>:<?=sprintf("%02d",$amamin2);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr2" name="amdhr2" value="<?=sprintf("%02d",$amdhr2);?>:<?=sprintf("%02d",$amdmin2);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr2" name="pmahr2" value="<?=sprintf("%02d",$pmahr2);?>:<?=sprintf("%02d",$pmamin2);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr2" name="pmdhr2" value="<?=sprintf("%02d",$pmdhr2);?>:<?=sprintf("%02d",$pmdmin2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours2" name="hours2" value="<?=sprintf("%02d",$hours2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min2" name="min2" value="<?=sprintf("%02d",$min2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin2" name="tmin2" value="<?=sprintf("%03d",$tmin2);?>"></td>
        </tr>
        <tr>
          <td>3</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr3" name="amahr3" value="<?=sprintf("%02d",$amahr3);?>:<?=sprintf("%02d",$amamin3);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr3" name="amdhr3" value="<?=sprintf("%02d",$amdhr3);?>:<?=sprintf("%02d",$amdmin3);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr3" name="pmahr3" value="<?=sprintf("%02d",$pmahr3);?>:<?=sprintf("%02d",$pmamin3);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr3" name="pmdhr3" value="<?=sprintf("%02d",$pmdhr3);?>:<?=sprintf("%02d",$pmdmin3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours3" name="hours3" value="<?=sprintf("%02d",$hours3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min3" name="min3" value="<?=sprintf("%02d",$min3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin3" name="tmin3" value="<?=sprintf("%03d",$tmin3);?>"></td>
        </tr>
        <tr>
          <td>4</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr4" name="amahr4" value="<?=sprintf("%02d",$amahr4);?>:<?=sprintf("%02d",$amamin4);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr4" name="amdhr4" value="<?=sprintf("%02d",$amdhr4);?>:<?=sprintf("%02d",$amdmin4);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr4" name="pmahr4" value="<?=sprintf("%02d",$pmahr4);?>:<?=sprintf("%02d",$pmamin4);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr4" name="pmdhr4" value="<?=sprintf("%02d",$pmdhr4);?>:<?=sprintf("%02d",$pmdmin4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours4" name="hours4" value="<?=sprintf("%02d",$hours4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min4" name="min4" value="<?=sprintf("%02d",$min4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin4" name="tmin4" value="<?=sprintf("%03d",$tmin4);?>"></td>
            
        </tr>
        <tr>
          <td>5</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr5" name="amahr5" value="<?=sprintf("%02d",$amahr5);?>:<?=sprintf("%02d",$amamin5);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr5" name="amdhr5" value="<?=sprintf("%02d",$amdhr5);?>:<?=sprintf("%02d",$amdmin5);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr5" name="pmahr5" value="<?=sprintf("%02d",$pmahr5);?>:<?=sprintf("%02d",$pmamin5);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr5" name="pmdhr5" value="<?=sprintf("%02d",$pmdhr5);?>:<?=sprintf("%02d",$pmdmin5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours5" name="hours5" value="<?=sprintf("%02d",$hours5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min5" name="min5" value="<?=sprintf("%02d",$min5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin5" name="tmin5" value="<?=sprintf("%03d",$tmin5);?>"></td>
        </tr>
        <tr>
          <td>6</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr6" name="amahr6" value="<?=sprintf("%02d",$amahr6);?>:<?=sprintf("%02d",$amamin6);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr6" name="amdhr6" value="<?=sprintf("%02d",$amdhr6);?>:<?=sprintf("%02d",$amdmin6);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr6" name="pmahr6" value="<?=sprintf("%02d",$pmahr6);?>:<?=sprintf("%02d",$pmamin6);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr6" name="pmdhr6" value="<?=sprintf("%02d",$pmdhr6);?>:<?=sprintf("%02d",$pmdmin6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours6" name="hours6" value="<?=sprintf("%02d",$hours6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min6" name="min6" value="<?=sprintf("%02d",$min6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin6" name="tmin6" value="<?=sprintf("%03d",$tmin6);?>"></td>
        </tr>
        <tr>
          <td>7</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr7" name="amahr7" value="<?=sprintf("%02d",$amahr7);?>:<?=sprintf("%02d",$amamin7);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr7" name="amdhr7" value="<?=sprintf("%02d",$amdhr7);?>:<?=sprintf("%02d",$amdmin7);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr7" name="pmahr7" value="<?=sprintf("%02d",$pmahr7);?>:<?=sprintf("%02d",$pmamin7);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr7" name="pmdhr7" value="<?=sprintf("%02d",$pmdhr7);?>:<?=sprintf("%02d",$pmdmin7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours7" name="hours7" value="<?=sprintf("%02d",$hours7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min7" name="min7" value="<?=sprintf("%02d",$min7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin7" name="tmin7" value="<?=sprintf("%03d",$tmin7);?>"></td>  
        </tr>
        <tr>
          <td>8</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr8" name="amahr8" value="<?=sprintf("%02d",$amahr8);?>:<?=sprintf("%02d",$amamin8);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr8" name="amdhr8" value="<?=sprintf("%02d",$amdhr8);?>:<?=sprintf("%02d",$amdmin8);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr8" name="pmahr8" value="<?=sprintf("%02d",$pmahr8);?>:<?=sprintf("%02d",$pmamin8);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr8" name="pmdhr8" value="<?=sprintf("%02d",$pmdhr8);?>:<?=sprintf("%02d",$pmdmin8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours8" name="hours8" value="<?=sprintf("%02d",$hours8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min8" name="min8" value="<?=sprintf("%02d",$min8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin8" name="tmin8" value="<?=sprintf("%03d",$tmin8);?>"></td>
        </tr>
        <tr>
          <td>9</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr9" name="amahr9" value="<?=sprintf("%02d",$amahr9);?>:<?=sprintf("%02d",$amamin9);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr9" name="amdhr9" value="<?=sprintf("%02d",$amdhr9);?>:<?=sprintf("%02d",$amdmin9);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr9" name="pmahr9" value="<?=sprintf("%02d",$pmahr9);?>:<?=sprintf("%02d",$pmamin9);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr9" name="pmdhr9" value="<?=sprintf("%02d",$pmdhr9);?>:<?=sprintf("%02d",$pmdmin9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours9" name="hours9" value="<?=sprintf("%02d",$hours9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min9" name="min9" value="<?=sprintf("%02d",$min9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin9" name="tmin9" value="<?=sprintf("%03d",$tmin9);?>"></td> 
        </tr>
        <tr>
          <td>10</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr10" name="amahr10" value="<?=sprintf("%02d",$amahr10);?>:<?=sprintf("%02d",$amamin10);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr10" name="amdhr10" value="<?=sprintf("%02d",$amdhr10);?>:<?=sprintf("%02d",$amdmin10);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr10" name="pmahr10" value="<?=sprintf("%02d",$pmahr10);?>:<?=sprintf("%02d",$pmamin10);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr10" name="pmdhr10" value="<?=sprintf("%02d",$pmdhr10);?>:<?=sprintf("%02d",$pmdmin10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours10" name="hours10" value="<?=sprintf("%02d",$hours10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min10" name="min10" value="<?=sprintf("%02d",$min10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin10" name="tmin10" value="<?=sprintf("%03d",$tmin10);?>"></td>
            
        </tr>
        <tr>
          <td>11</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr11" name="amahr11" value="<?=sprintf("%02d",$amahr11);?>:<?=sprintf("%02d",$amamin11);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr11" name="amdhr11" value="<?=sprintf("%02d",$amdhr11);?>:<?=sprintf("%02d",$amdmin11);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr11" name="pmahr11" value="<?=sprintf("%02d",$pmahr11);?>:<?=sprintf("%02d",$pmamin11);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr11" name="pmdhr11" value="<?=sprintf("%02d",$pmdhr11);?>:<?=sprintf("%02d",$pmdmin11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours11" name="hours11" value="<?=sprintf("%02d",$hours11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min11" name="min11" value="<?=sprintf("%02d",$min11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin11" name="tmin11" value="<?=sprintf("%03d",$tmin11);?>"></td>
            
        </tr>
        <tr>
          <td>12</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr12" name="amahr12" value="<?=sprintf("%02d",$amahr12);?>:<?=sprintf("%02d",$amamin12);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr12" name="amdhr12" value="<?=sprintf("%02d",$amdhr12);?>:<?=sprintf("%02d",$amdmin12);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr12" name="pmahr12" value="<?=sprintf("%02d",$pmahr12);?>:<?=sprintf("%02d",$pmamin12);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr12" name="pmdhr12" value="<?=sprintf("%02d",$pmdhr12);?>:<?=sprintf("%02d",$pmdmin12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours12" name="hours12" value="<?=sprintf("%02d",$hours12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min12" name="min12" value="<?=sprintf("%02d",$min12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin12" name="tmin12" value="<?=sprintf("%03d",$tmin12);?>"></td>
            
        </tr>
        <tr>
          <td>13</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr13" name="amahr13" value="<?=sprintf("%02d",$amahr13);?>:<?=sprintf("%02d",$amamin13);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr13" name="amdhr13" value="<?=sprintf("%02d",$amdhr13);?>:<?=sprintf("%02d",$amdmin13);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr13" name="pmahr13" value="<?=sprintf("%02d",$pmahr13);?>:<?=sprintf("%02d",$pmamin13);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr13" name="pmdhr13" value="<?=sprintf("%02d",$pmdhr13);?>:<?=sprintf("%02d",$pmdmin13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours13" name="hours13" value="<?=sprintf("%02d",$hours13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min13" name="min13" value="<?=sprintf("%02d",$min13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin13" name="tmin13" value="<?=sprintf("%03d",$tmin13);?>"></td>
            
        </tr>
        <tr>
          <td>14</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr14" name="amahr14" value="<?=sprintf("%02d",$amahr14);?>:<?=sprintf("%02d",$amamin14);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr14" name="amdhr14" value="<?=sprintf("%02d",$amdhr14);?>:<?=sprintf("%02d",$amdmin14);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr14" name="pmahr14" value="<?=sprintf("%02d",$pmahr14);?>:<?=sprintf("%02d",$pmamin14);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr14" name="pmdhr14" value="<?=sprintf("%02d",$pmdhr14);?>:<?=sprintf("%02d",$pmdmin14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours14" name="hours14" value="<?=sprintf("%02d",$hours14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min14" name="min14" value="<?=sprintf("%02d",$min14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin14" name="tmin14" value="<?=sprintf("%03d",$tmin14);?>"></td>
            
        </tr>
        <tr>
          <td>15</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr15" name="amahr15" value="<?=sprintf("%02d",$amahr15);?>:<?=sprintf("%02d",$amamin15);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr15" name="amdhr15" value="<?=sprintf("%02d",$amdhr15);?>:<?=sprintf("%02d",$amdmin15);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr15" name="pmahr15" value="<?=sprintf("%02d",$pmahr15);?>:<?=sprintf("%02d",$pmamin15);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr15" name="pmdhr15" value="<?=sprintf("%02d",$pmdhr15);?>:<?=sprintf("%02d",$pmdmin15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours15" name="hours15" value="<?=sprintf("%02d",$hours15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min15" name="min15" value="<?=sprintf("%02d",$min15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin15" name="tmin15" value="<?=sprintf("%03d",$tmin15);?>"></td>
            
        </tr>
        <tr>
          <td>16</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr16" name="amahr16" value="<?=sprintf("%02d",$amahr16);?>:<?=sprintf("%02d",$amamin16);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr16" name="amdhr16" value="<?=sprintf("%02d",$amdhr16);?>:<?=sprintf("%02d",$amdmin16);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr16" name="pmahr16" value="<?=sprintf("%02d",$pmahr16);?>:<?=sprintf("%02d",$pmamin16);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr16" name="pmdhr16" value="<?=sprintf("%02d",$pmdhr16);?>:<?=sprintf("%02d",$pmdmin16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours16" name="hours16" value="<?=sprintf("%02d",$hours16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min16" name="min16" value="<?=sprintf("%02d",$min16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin16" name="tmin16" value="<?=sprintf("%03d",$tmin16);?>"></td>
            
        </tr>
        <tr>
          <td>17</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr17" name="amahr17" value="<?=sprintf("%02d",$amahr17);?>:<?=sprintf("%02d",$amamin17);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr17" name="amdhr17" value="<?=sprintf("%02d",$amdhr17);?>:<?=sprintf("%02d",$amdmin17);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr17" name="pmahr17" value="<?=sprintf("%02d",$pmahr17);?>:<?=sprintf("%02d",$pmamin17);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr17" name="pmdhr17" value="<?=sprintf("%02d",$pmdhr17);?>:<?=sprintf("%02d",$pmdmin17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours17" name="hours17" value="<?=sprintf("%02d",$hours17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min17" name="min17" value="<?=sprintf("%02d",$min17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin17" name="tmin17" value="<?=sprintf("%03d",$tmin17);?>"></td>
           
        </tr>
        <tr>
          <td>18</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr18" name="amahr18" value="<?=sprintf("%02d",$amahr18);?>:<?=sprintf("%02d",$amamin18);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr18" name="amdhr18" value="<?=sprintf("%02d",$amdhr18);?>:<?=sprintf("%02d",$amdmin18);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr18" name="pmahr18" value="<?=sprintf("%02d",$pmahr18);?>:<?=sprintf("%02d",$pmamin18);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr18" name="pmdhr18" value="<?=sprintf("%02d",$pmdhr18);?>:<?=sprintf("%02d",$pmdmin18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours18" name="hours18" value="<?=sprintf("%02d",$hours18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min18" name="min18" value="<?=sprintf("%02d",$min18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin18" name="tmin18" value="<?=sprintf("%03d",$tmin18);?>"></td>
            
        </tr>
        <tr>
          <td>19</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr19" name="amahr19" value="<?=sprintf("%02d",$amahr19);?>:<?=sprintf("%02d",$amamin19);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr19" name="amdhr19" value="<?=sprintf("%02d",$amdhr19);?>:<?=sprintf("%02d",$amdmin19);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr19" name="pmahr19" value="<?=sprintf("%02d",$pmahr19);?>:<?=sprintf("%02d",$pmamin19);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr19" name="pmdhr19" value="<?=sprintf("%02d",$pmdhr19);?>:<?=sprintf("%02d",$pmdmin19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours19" name="hours19" value="<?=sprintf("%02d",$hours19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min19" name="min19" value="<?=sprintf("%02d",$min19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin19" name="tmin19" value="<?=sprintf("%03d",$tmin19);?>"></td>
            
        </tr>
        <tr>
          <td>20</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr20" name="amahr20" value="<?=sprintf("%02d",$amahr20);?>:<?=sprintf("%02d",$amamin20);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr20" name="amdhr20" value="<?=sprintf("%02d",$amdhr20);?>:<?=sprintf("%02d",$amdmin20);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr20" name="pmahr20" value="<?=sprintf("%02d",$pmahr20);?>:<?=sprintf("%02d",$pmamin20);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr20" name="pmdhr20" value="<?=sprintf("%02d",$pmdhr20);?>:<?=sprintf("%02d",$pmdmin20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours20" name="hours20" value="<?=sprintf("%02d",$hours20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min20" name="min20" value="<?=sprintf("%02d",$min20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin20" name="tmin20" value="<?=sprintf("%03d",$tmin20);?>"></td>
            
        </tr>
        <tr>
          <td>21</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr21" name="amahr21" value="<?=sprintf("%02d",$amahr21);?>:<?=sprintf("%02d",$amamin21);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr21" name="amdhr21" value="<?=sprintf("%02d",$amdhr21);?>:<?=sprintf("%02d",$amdmin21);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr21" name="pmahr21" value="<?=sprintf("%02d",$pmahr21);?>:<?=sprintf("%02d",$pmamin21);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr21" name="pmdhr21" value="<?=sprintf("%02d",$pmdhr21);?>:<?=sprintf("%02d",$pmdmin21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours21" name="hours21" value="<?=sprintf("%02d",$hours21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min21" name="min21" value="<?=sprintf("%02d",$min21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin21" name="tmin21" value="<?=sprintf("%03d",$tmin21);?>"></td>
            
        </tr>
        <tr>
          <td>22</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr22" name="amahr22" value="<?=sprintf("%02d",$amahr22);?>:<?=sprintf("%02d",$amamin22);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr22" name="amdhr22" value="<?=sprintf("%02d",$amdhr22);?>:<?=sprintf("%02d",$amdmin22);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr22" name="pmahr22" value="<?=sprintf("%02d",$pmahr22);?>:<?=sprintf("%02d",$pmamin22);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr22" name="pmdhr22" value="<?=sprintf("%02d",$pmdhr22);?>:<?=sprintf("%02d",$pmdmin22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours22" name="hours22" value="<?=sprintf("%02d",$hours22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min22" name="min22" value="<?=sprintf("%02d",$min22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin22" name="tmin22" value="<?=sprintf("%03d",$tmin22);?>"></td>
            
        </tr>
        <tr>
          <td>23</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr23" name="amahr23" value="<?=sprintf("%02d",$amahr23);?>:<?=sprintf("%02d",$amamin23);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr23" name="amdhr23" value="<?=sprintf("%02d",$amdhr23);?>:<?=sprintf("%02d",$amdmin23);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr23" name="pmahr23" value="<?=sprintf("%02d",$pmahr23);?>:<?=sprintf("%02d",$pmamin23);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr23" name="pmdhr23" value="<?=sprintf("%02d",$pmdhr23);?>:<?=sprintf("%02d",$pmdmin23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours23" name="hours23" value="<?=sprintf("%02d",$hours23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min23" name="min23" value="<?=sprintf("%02d",$min23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin23" name="tmin23" value="<?=sprintf("%03d",$tmin23);?>"></td>
            
        </tr>
        <tr>
          <td>24</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr24" name="amahr24" value="<?=sprintf("%02d",$amahr24);?>:<?=sprintf("%02d",$amamin24);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr24" name="amdhr24" value="<?=sprintf("%02d",$amdhr24);?>:<?=sprintf("%02d",$amdmin24);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr24" name="pmahr24" value="<?=sprintf("%02d",$pmahr24);?>:<?=sprintf("%02d",$pmamin24);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr24" name="pmdhr24" value="<?=sprintf("%02d",$pmdhr24);?>:<?=sprintf("%02d",$pmdmin24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours24" name="hours24" value="<?=sprintf("%02d",$hours24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min24" name="min24" value="<?=sprintf("%02d",$min24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin24" name="tmin24" value="<?=sprintf("%03d",$tmin24);?>"></td>
            
        </tr>
        <tr>
          <td>25</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr25" name="amahr25" value="<?=sprintf("%02d",$amahr25);?>:<?=sprintf("%02d",$amamin25);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr25" name="amdhr25" value="<?=sprintf("%02d",$amdhr25);?>:<?=sprintf("%02d",$amdmin25);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr25" name="pmahr25" value="<?=sprintf("%02d",$pmahr25);?>:<?=sprintf("%02d",$pmamin25);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr25" name="pmdhr25" value="<?=sprintf("%02d",$pmdhr25);?>:<?=sprintf("%02d",$pmdmin25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours25" name="hours25" value="<?=sprintf("%02d",$hours25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min25" name="min25" value="<?=sprintf("%02d",$min25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin25" name="tmin25" value="<?=sprintf("%03d",$tmin25);?>"></td>
            
        </tr>
        <tr>
          <td>26</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr26" name="amahr26" value="<?=sprintf("%02d",$amahr26);?>:<?=sprintf("%02d",$amamin26);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr26" name="amdhr26" value="<?=sprintf("%02d",$amdhr26);?>:<?=sprintf("%02d",$amdmin26);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr26" name="pmahr26" value="<?=sprintf("%02d",$pmahr26);?>:<?=sprintf("%02d",$pmamin26);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr26" name="pmdhr26" value="<?=sprintf("%02d",$pmdhr26);?>:<?=sprintf("%02d",$pmdmin26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours26" name="hours26" value="<?=sprintf("%02d",$hours26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min26" name="min26" value="<?=sprintf("%02d",$min26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin26" name="tmin26" value="<?=sprintf("%03d",$tmin26);?>"></td>
           
        </tr>
        <tr>
          <td>27</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr27" name="amahr27" value="<?=sprintf("%02d",$amahr27);?>:<?=sprintf("%02d",$amamin27);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr27" name="amdhr27" value="<?=sprintf("%02d",$amdhr27);?>:<?=sprintf("%02d",$amdmin27);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr27" name="pmahr27" value="<?=sprintf("%02d",$pmahr27);?>:<?=sprintf("%02d",$pmamin27);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr27" name="pmdhr27" value="<?=sprintf("%02d",$pmdhr27);?>:<?=sprintf("%02d",$pmdmin27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours27" name="hours27" value="<?=sprintf("%02d",$hours27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min27" name="min27" value="<?=sprintf("%02d",$min27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin27" name="tmin27" value="<?=sprintf("%03d",$tmin27);?>"></td>
            
        </tr>
        <tr>
          <td>28</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr28" name="amahr28" value="<?=sprintf("%02d",$amahr28);?>:<?=sprintf("%02d",$amamin28);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr28" name="amdhr28" value="<?=sprintf("%02d",$amdhr28);?>:<?=sprintf("%02d",$amdmin28);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr28" name="pmahr28" value="<?=sprintf("%02d",$pmahr28);?>:<?=sprintf("%02d",$pmamin28);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr28" name="pmdhr28" value="<?=sprintf("%02d",$pmdhr28);?>:<?=sprintf("%02d",$pmdmin28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours28" name="hours28" value="<?=sprintf("%02d",$hours28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min28" name="min28" value="<?=sprintf("%02d",$min28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin28" name="tmin28" value="<?=sprintf("%03d",$tmin28);?>"></td>
            
        </tr>
        <tr>
          <td>29</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr29" name="amahr29" value="<?=sprintf("%02d",$amahr29);?>:<?=sprintf("%02d",$amamin29);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr29" name="amdhr29" value="<?=sprintf("%02d",$amdhr29);?>:<?=sprintf("%02d",$amdmin29);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr29" name="pmahr29" value="<?=sprintf("%02d",$pmahr29);?>:<?=sprintf("%02d",$pmamin29);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr29" name="pmdhr29" value="<?=sprintf("%02d",$pmdhr29);?>:<?=sprintf("%02d",$pmdmin29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours29" name="hours29" value="<?=sprintf("%02d",$hours29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min29" name="min29" value="<?=sprintf("%02d",$min29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin29" name="tmin29" value="<?=sprintf("%03d",$tmin29);?>"></td>
            
        </tr>
        <tr>
          <td>30</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr30" name="amahr30" value="<?=sprintf("%02d",$amahr30);?>:<?=sprintf("%02d",$amamin30);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr30" name="amdhr30" value="<?=sprintf("%02d",$amdhr30);?>:<?=sprintf("%02d",$amdmin30);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr30" name="pmahr30" value="<?=sprintf("%02d",$pmahr30);?>:<?=sprintf("%02d",$pmamin30);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr30" name="pmdhr30" value="<?=sprintf("%02d",$pmdhr30);?>:<?=sprintf("%02d",$pmdmin30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours30" name="hours30" value="<?=sprintf("%02d",$hours30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min30" name="min30" value="<?=sprintf("%02d",$min30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin30" name="tmin30" value="<?=sprintf("%03d",$tmin30);?>"></td>
            
        </tr>
        <tr>
          <td>31</td>
            <td colspan="2"><input type="text" readonly="true" id="amahr31" name="amahr31" value="<?=sprintf("%02d",$amahr31);?>:<?=sprintf("%02d",$amamin31);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="amdhr31" name="amdhr31" value="<?=sprintf("%02d",$amdhr31);?>:<?=sprintf("%02d",$amdmin31);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmahr31" name="pmahr31" value="<?=sprintf("%02d",$pmahr31);?>:<?=sprintf("%02d",$pmamin31);?>"></td>
            <td colspan="2"><input type="text" readonly="true" id="pmdhr31" name="pmdhr31" value="<?=sprintf("%02d",$pmdhr31);?>:<?=sprintf("%02d",$pmdmin31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="hours31" name="hours31" value="<?=sprintf("%02d",$hours31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="min31" name="min31" value="<?=sprintf("%02d",$min31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="true" id="tmin31" name="tmin31" value="<?=sprintf("%03d",$tmin31);?>"></td>
        </tr>
        <tr>
          <th id="total" colspan="9" scope="colgroup" style="width:160px; text-align:right"><input type="hidden" style="width:50px" value="Total" onclick="functionTotalall(dtr)" id="total" name="total"></th>
          <th style="width:40px"><input type="text" readonly="true" style="width:50px" id="total_hours" name="total_hours"value="<?=sprintf("%02d",$total_hours);?>"></th>
          <th style="width:40px"><input type="text" readonly="true" style="width:50px" id="total_min" name="total_min"value="<?=sprintf("%02d",$total_min);?>"></th>
          <th style="width:40px"><input type="text" style="width:50px"  readonly="true" id="total_under_min" name="total_under_min"value="<?=sprintf("%03d",$total_under_min);?>"></th>
        </tr>
      </table>
    </form>
  </div>
  </div>
</body>
</html>