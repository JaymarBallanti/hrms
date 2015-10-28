<!DOCTYPE HTML>
<html>
<head></head>
<body>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction1()" placeholder="08" id="amahr1" name="amahr1" value="<?=sprintf("%02d",$amahr1);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction1()" placeholder="00" id="amamin1" name="amamin1" value="<?=sprintf("%02d",$amamin1);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction1()" placeholder="12" id="amdhr1" name="amdhr1" value="<?=sprintf("%02d",$amdhr1);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction1()" placeholder="00" id="amdmin1" name="amdmin1" value="<?=sprintf("%02d",$amdmin1);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction1()" placeholder="13" id="pmahr1" name="pmahr1" value="<?=sprintf("%02d",$pmahr1);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction1()" placeholder="00" id="pmamin1" name="pmamin1" value="<?=sprintf("%02d",$pmamin1);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction1()" placeholder="17" id="pmdhr1" name="pmdhr1" value="<?=sprintf("%02d",$pmdhr1);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction1()" placeholder="00" id="pmdmin1" name="pmdmin1" value="<?=sprintf("%02d",$pmdmin1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="hours1" name="hours1" value="<?=sprintf("%02d",$hours1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="min1" name="min1"value="<?=sprintf("%02d",$min1);?>"></td>
            <td><input type="text" style="font-weight:bold" readonly="readonly"  id="tmin1" name="tmin1"value="<?=sprintf("%03d",$tmin1);?>"></td>

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
            <td><input style="text-align:right" type="text" onkeypress="myFunction2()" id="amahr2" name="amahr2" value="<?=sprintf("%02d",$amahr2);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction2()" id="amamin2" name="amamin2" value="<?=sprintf("%02d",$amamin2);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction2()" id="amdhr2" name="amdhr2" value="<?=sprintf("%02d",$amdhr2);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction2()" id="amdmin2" name="amdmin2" value="<?=sprintf("%02d",$amdmin2);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction2()" id="pmahr2" name="pmahr2" value="<?=sprintf("%02d",$pmahr2);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction2()" id="pmamin2" name="pmamin2" value="<?=sprintf("%02d",$pmamin2);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction2()" id="pmdhr2" name="pmdhr2" value="<?=sprintf("%02d",$pmdhr2);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction2()" id="pmdmin2" name="pmdmin2" value="<?=sprintf("%02d",$pmdmin2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours2" name="hours2" value="<?=sprintf("%02d",$hours2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min2" name="min2" value="<?=sprintf("%02d",$min2);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin2" name="tmin2" value="<?=sprintf("%03d",$tmin2);?>"></td>
            
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction3()" id="amahr3" name="amahr3" value="<?=sprintf("%02d",$amahr3);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction3()" id="amamin3" name="amamin3" value="<?=sprintf("%02d",$amamin3);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction3()" id="amdhr3" name="amdhr3" value="<?=sprintf("%02d",$amdhr3);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction3()" id="amdmin3" name="amdmin3" value="<?=sprintf("%02d",$amdmin3);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction3()" id="pmahr3" name="pmahr3" value="<?=sprintf("%02d",$pmahr3);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction3()" id="pmamin3" name="pmamin3" value="<?=sprintf("%02d",$pmamin3);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction3()" id="pmdhr3" name="pmdhr3" value="<?=sprintf("%02d",$pmdhr3);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction3()" id="pmdmin3" name="pmdmin3" value="<?=sprintf("%02d",$pmdmin3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours3" name="hours3" value="<?=sprintf("%02d",$hours3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min3" name="min3" value="<?=sprintf("%02d",$min3);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin3" name="tmin3" value="<?=sprintf("%03d",$tmin3);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction4()" id="amahr4" name="amahr4" value="<?=sprintf("%02d",$amahr4);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction4()" id="amamin4" name="amamin4" value="<?=sprintf("%02d",$amamin4);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction4()" id="amdhr4" name="amdhr4" value="<?=sprintf("%02d",$amdhr4);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction4()" id="amdmin4" name="amdmin4" value="<?=sprintf("%02d",$amdmin4);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction4()" id="pmahr4" name="pmahr4" value="<?=sprintf("%02d",$pmahr4);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction4()" id="pmamin4" name="pmamin4" value="<?=sprintf("%02d",$pmamin4);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction4()" id="pmdhr4" name="pmdhr4" value="<?=sprintf("%02d",$pmdhr4);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction4()" id="pmdmin4" name="pmdmin4" value="<?=sprintf("%02d",$pmdmin4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours4" name="hours4" value="<?=sprintf("%02d",$hours4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min4" name="min4" value="<?=sprintf("%02d",$min4);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin4" name="tmin4" value="<?=sprintf("%03d",$tmin4);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction5()" id="amahr5" name="amahr5" value="<?=sprintf("%02d",$amahr5);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction5()" id="amamin5" name="amamin5" value="<?=sprintf("%02d",$amamin5);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction5()" id="amdhr5" name="amdhr5" value="<?=sprintf("%02d",$amdhr5);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction5()" id="amdmin5" name="amdmin5" value="<?=sprintf("%02d",$amdmin5);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction5()" id="pmahr5" name="pmahr5" value="<?=sprintf("%02d",$pmahr5);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction5()" id="pmamin5" name="pmamin5" value="<?=sprintf("%02d",$pmamin5);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction5()" id="pmdhr5" name="pmdhr5" value="<?=sprintf("%02d",$pmdhr5);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction5()" id="pmdmin5" name="pmdmin5" value="<?=sprintf("%02d",$pmdmin5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours5" name="hours5" value="<?=sprintf("%02d",$hours5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min5" name="min5" value="<?=sprintf("%02d",$min5);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin5" name="tmin5" value="<?=sprintf("%03d",$tmin5);?>"></td>
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
           <td><input style="text-align:right" type="text" onkeypress="myFunction6()" id="amahr6" name="amahr6" value="<?=sprintf("%02d",$amahr6);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction6()" id="amamin6" name="amamin6" value="<?=sprintf("%02d",$amamin6);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction6()" id="amdhr6" name="amdhr6" value="<?=sprintf("%02d",$amdhr6);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction6()" id="amdmin6" name="amdmin6" value="<?=sprintf("%02d",$amdmin6);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction6()" id="pmahr6" name="pmahr6" value="<?=sprintf("%02d",$pmahr6);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction6()" id="pmamin6" name="pmamin6" value="<?=sprintf("%02d",$pmamin6);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction6()" id="pmdhr6" name="pmdhr6" value="<?=sprintf("%02d",$pmdhr6);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction6()" id="pmdmin6" name="pmdmin6" value="<?=sprintf("%02d",$pmdmin6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours6" name="hours6" value="<?=sprintf("%02d",$hours6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min6" name="min6" value="<?=sprintf("%02d",$min6);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin6" name="tmin6" value="<?=sprintf("%03d",$tmin6);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction7()" id="amahr7" name="amahr7" value="<?=sprintf("%02d",$amahr7);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction7()" id="amamin7" name="amamin7" value="<?=sprintf("%02d",$amamin7);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction7()" id="amdhr7" name="amdhr7" value="<?=sprintf("%02d",$amdhr7);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction7()" id="amdmin7" name="amdmin7" value="<?=sprintf("%02d",$amdmin7);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction7()" id="pmahr7" name="pmahr7" value="<?=sprintf("%02d",$pmahr7);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction7()" id="pmamin7" name="pmamin7" value="<?=sprintf("%02d",$pmamin7);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction7()" id="pmdhr7" name="pmdhr7" value="<?=sprintf("%02d",$pmdhr7);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction7()" id="pmdmin7" name="pmdmin7" value="<?=sprintf("%02d",$pmdmin7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours7" name="hours7" value="<?=sprintf("%02d",$hours7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min7" name="min7" value="<?=sprintf("%02d",$min7);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin7" name="tmin7" value="<?=sprintf("%03d",$tmin7);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction8()" id="amahr8" name="amahr8" value="<?=sprintf("%02d",$amahr8);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction8()" id="amamin8" name="amamin8" value="<?=sprintf("%02d",$amamin8);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction8()" id="amdhr8" name="amdhr8" value="<?=sprintf("%02d",$amdhr8);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction8()" id="amdmin8" name="amdmin8" value="<?=sprintf("%02d",$amdmin8);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction8()" id="pmahr8" name="pmahr8" value="<?=sprintf("%02d",$pmahr8);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction8()" id="pmamin8" name="pmamin8" value="<?=sprintf("%02d",$pmamin8);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction8()" id="pmdhr8" name="pmdhr8" value="<?=sprintf("%02d",$pmdhr8);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction8()" id="pmdmin8" name="pmdmin8" value="<?=sprintf("%02d",$pmdmin8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours8" name="hours8" value="<?=sprintf("%02d",$hours8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min8" name="min8" value="<?=sprintf("%02d",$min8);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin8" name="tmin8" value="<?=sprintf("%03d",$tmin8);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction9()" id="amahr9" name="amahr9" value="<?=sprintf("%02d",$amahr9);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction9()" id="amamin9" name="amamin9" value="<?=sprintf("%02d",$amamin9);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction9()" id="amdhr9" name="amdhr9" value="<?=sprintf("%02d",$amdhr9);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction9()" id="amdmin9" name="amdmin9" value="<?=sprintf("%02d",$amdmin9);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction9()" id="pmahr9" name="pmahr9" value="<?=sprintf("%02d",$pmahr9);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction9()" id="pmamin9" name="pmamin9" value="<?=sprintf("%02d",$pmamin9);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction9()" id="pmdhr9" name="pmdhr9" value="<?=sprintf("%02d",$pmdhr9);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction9()" id="pmdmin9" name="pmdmin9" value="<?=sprintf("%02d",$pmdmin9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours9" name="hours9" value="<?=sprintf("%02d",$hours9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min9" name="min9" value="<?=sprintf("%02d",$min9);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin9" name="tmin9" value="<?=sprintf("%03d",$tmin9);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction10()" id="amahr10" name="amahr10" value="<?=sprintf("%02d",$amahr10);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction10()" id="amamin10" name="amamin10" value="<?=sprintf("%02d",$amamin10);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction10()" id="amdhr10" name="amdhr10" value="<?=sprintf("%02d",$amdhr10);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction10()" id="amdmin10" name="amdmin10" value="<?=sprintf("%02d",$amdmin10);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction10()" id="pmahr10" name="pmahr10" value="<?=sprintf("%02d",$pmahr10);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction10()" id="pmamin10" name="pmamin10" value="<?=sprintf("%02d",$pmamin10);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction10()" id="pmdhr10" name="pmdhr10" value="<?=sprintf("%02d",$pmdhr10);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction10()" id="pmdmin10" name="pmdmin10" value="<?=sprintf("%02d",$pmdmin10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours10" name="hours10" value="<?=sprintf("%02d",$hours10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min10" name="min10" value="<?=sprintf("%02d",$min10);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin10" name="tmin10" value="<?=sprintf("%03d",$tmin10);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction11()" id="amahr11" name="amahr11" value="<?=sprintf("%02d",$amahr11);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction11()" id="amamin11" name="amamin11" value="<?=sprintf("%02d",$amamin11);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction11()" id="amdhr11" name="amdhr11" value="<?=sprintf("%02d",$amdhr11);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction11()" id="amdmin11" name="amdmin11" value="<?=sprintf("%02d",$amdmin11);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction11()" id="pmahr11" name="pmahr11" value="<?=sprintf("%02d",$pmahr11);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction11()" id="pmamin11" name="pmamin11" value="<?=sprintf("%02d",$pmamin11);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction11()" id="pmdhr11" name="pmdhr11" value="<?=sprintf("%02d",$pmdhr11);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction11()" id="pmdmin11" name="pmdmin11" value="<?=sprintf("%02d",$pmdmin11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours11" name="hours11" value="<?=sprintf("%02d",$hours11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min11" name="min11" value="<?=sprintf("%02d",$min11);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin11" name="tmin11" value="<?=sprintf("%03d",$tmin11);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction12()" id="amahr12" name="amahr12" value="<?=sprintf("%02d",$amahr12);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction12()" id="amamin12" name="amamin12" value="<?=sprintf("%02d",$amamin12);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction12()" id="amdhr12" name="amdhr12" value="<?=sprintf("%02d",$amdhr12);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction12()" id="amdmin12" name="amdmin12" value="<?=sprintf("%02d",$amdmin12);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction12()" id="pmahr12" name="pmahr12" value="<?=sprintf("%02d",$pmahr12);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction12()" id="pmamin12" name="pmamin12" value="<?=sprintf("%02d",$pmamin12);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction12()" id="pmdhr12" name="pmdhr12" value="<?=sprintf("%02d",$pmdhr12);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction12()" id="pmdmin12" name="pmdmin12" value="<?=sprintf("%02d",$pmdmin12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours12" name="hours12" value="<?=sprintf("%02d",$hours12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min12" name="min12" value="<?=sprintf("%02d",$min12);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin12" name="tmin12" value="<?=sprintf("%03d",$tmin12);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction13()" id="amahr13" name="amahr13" value="<?=sprintf("%02d",$amahr13);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction13()" id="amamin13" name="amamin13" value="<?=sprintf("%02d",$amamin13);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction13()" id="amdhr13" name="amdhr13" value="<?=sprintf("%02d",$amdhr13);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction13()" id="amdmin13" name="amdmin13" value="<?=sprintf("%02d",$amdmin13);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction13()" id="pmahr13" name="pmahr13" value="<?=sprintf("%02d",$pmahr13);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction13()" id="pmamin13" name="pmamin13" value="<?=sprintf("%02d",$pmamin13);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction13()" id="pmdhr13" name="pmdhr13" value="<?=sprintf("%02d",$pmdhr13);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction13()" id="pmdmin13" name="pmdmin13" value="<?=sprintf("%02d",$pmdmin13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours13" name="hours13" value="<?=sprintf("%02d",$hours13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min13" name="min13" value="<?=sprintf("%02d",$min13);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin13" name="tmin13" value="<?=sprintf("%03d",$tmin13);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction14()" id="amahr14" name="amahr14" value="<?=sprintf("%02d",$amahr14);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction14()" id="amamin14" name="amamin14" value="<?=sprintf("%02d",$amamin14);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction14()" id="amdhr14" name="amdhr14" value="<?=sprintf("%02d",$amdhr14);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction14()" id="amdmin14" name="amdmin14" value="<?=sprintf("%02d",$amdmin14);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction14()" id="pmahr14" name="pmahr14" value="<?=sprintf("%02d",$pmahr14);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction14()" id="pmamin14" name="pmamin14" value="<?=sprintf("%02d",$pmamin14);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction14()" id="pmdhr14" name="pmdhr14" value="<?=sprintf("%02d",$pmdhr14);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction14()" id="pmdmin14" name="pmdmin14" value="<?=sprintf("%02d",$pmdmin14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours14" name="hours14" value="<?=sprintf("%02d",$hours14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min14" name="min14" value="<?=sprintf("%02d",$min14);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin14" name="tmin14" value="<?=sprintf("%03d",$tmin14);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction15()" id="amahr15" name="amahr15" value="<?=sprintf("%02d",$amahr15);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction15()" id="amamin15" name="amamin15" value="<?=sprintf("%02d",$amamin15);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction15()" id="amdhr15" name="amdhr15" value="<?=sprintf("%02d",$amdhr15);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction15()" id="amdmin15" name="amdmin15" value="<?=sprintf("%02d",$amdmin15);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction15()" id="pmahr15" name="pmahr15" value="<?=sprintf("%02d",$pmahr15);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction15()" id="pmamin15" name="pmamin15" value="<?=sprintf("%02d",$pmamin15);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction15()" id="pmdhr15" name="pmdhr15" value="<?=sprintf("%02d",$pmdhr15);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction15()" id="pmdmin15" name="pmdmin15" value="<?=sprintf("%02d",$pmdmin15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours15" name="hours15" value="<?=sprintf("%02d",$hours15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min15" name="min15" value="<?=sprintf("%02d",$min15);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin15" name="tmin15" value="<?=sprintf("%03d",$tmin15);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction16()" id="amahr16" name="amahr16" value="<?=sprintf("%02d",$amahr16);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction16()" id="amamin16" name="amamin16" value="<?=sprintf("%02d",$amamin16);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction16()" id="amdhr16" name="amdhr16" value="<?=sprintf("%02d",$amdhr16);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction16()" id="amdmin16" name="amdmin16" value="<?=sprintf("%02d",$amdmin16);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction16()" id="pmahr16" name="pmahr16" value="<?=sprintf("%02d",$pmahr16);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction16()" id="pmamin16" name="pmamin16" value="<?=sprintf("%02d",$pmamin16);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction16()" id="pmdhr16" name="pmdhr16" value="<?=sprintf("%02d",$pmdhr16);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction16()" id="pmdmin16" name="pmdmin16" value="<?=sprintf("%02d",$pmdmin16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours16" name="hours16" value="<?=sprintf("%02d",$hours16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min16" name="min16" value="<?=sprintf("%02d",$min16);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin16" name="tmin16" value="<?=sprintf("%03d",$tmin16);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction17()" id="amahr17" name="amahr17" value="<?=sprintf("%02d",$amahr17);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction17()" id="amamin17" name="amamin17" value="<?=sprintf("%02d",$amamin17);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction17()" id="amdhr17" name="amdhr17" value="<?=sprintf("%02d",$amdhr17);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction17()" id="amdmin17" name="amdmin17" value="<?=sprintf("%02d",$amdmin17);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction17()" id="pmahr17" name="pmahr17" value="<?=sprintf("%02d",$pmahr17);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction17()" id="pmamin17" name="pmamin17" value="<?=sprintf("%02d",$pmamin17);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction17()" id="pmdhr17" name="pmdhr17" value="<?=sprintf("%02d",$pmdhr17);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction17()" id="pmdmin17" name="pmdmin17" value="<?=sprintf("%02d",$pmdmin17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours17" name="hours17" value="<?=sprintf("%02d",$hours17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min17" name="min17" value="<?=sprintf("%02d",$min17);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin17" name="tmin17" value="<?=sprintf("%03d",$tmin17);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction18()" id="amahr18" name="amahr18" value="<?=sprintf("%02d",$amahr18);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction18()" id="amamin18" name="amamin18" value="<?=sprintf("%02d",$amamin18);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction18()" id="amdhr18" name="amdhr18" value="<?=sprintf("%02d",$amdhr18);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction18()" id="amdmin18" name="amdmin18" value="<?=sprintf("%02d",$amdmin18);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction18()" id="pmahr18" name="pmahr18" value="<?=sprintf("%02d",$pmahr18);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction18()" id="pmamin18" name="pmamin18" value="<?=sprintf("%02d",$pmamin18);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction18()" id="pmdhr18" name="pmdhr18" value="<?=sprintf("%02d",$pmdhr18);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction18()" id="pmdmin18" name="pmdmin18" value="<?=sprintf("%02d",$pmdmin18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours18" name="hours18" value="<?=sprintf("%02d",$hours18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min18" name="min18" value="<?=sprintf("%02d",$min18);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin18" name="tmin18" value="<?=sprintf("%03d",$tmin18);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction19()" id="amahr19" name="amahr19" value="<?=sprintf("%02d",$amahr19);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction19()" id="amamin19" name="amamin19" value="<?=sprintf("%02d",$amamin19);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction19()" id="amdhr19" name="amdhr19" value="<?=sprintf("%02d",$amdhr19);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction19()" id="amdmin19" name="amdmin19" value="<?=sprintf("%02d",$amdmin19);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction19()" id="pmahr19" name="pmahr19" value="<?=sprintf("%02d",$pmahr19);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction19()" id="pmamin19" name="pmamin19" value="<?=sprintf("%02d",$pmamin19);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction19()" id="pmdhr19" name="pmdhr19" value="<?=sprintf("%02d",$pmdhr19);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction19()" id="pmdmin19" name="pmdmin19" value="<?=sprintf("%02d",$pmdmin19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours19" name="hours19" value="<?=sprintf("%02d",$hours19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min19" name="min19" value="<?=sprintf("%02d",$min19);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin19" name="tmin19" value="<?=sprintf("%03d",$tmin19);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction20()" id="amahr20" name="amahr20" value="<?=sprintf("%02d",$amahr20);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction20()" id="amamin20" name="amamin20" value="<?=sprintf("%02d",$amamin20);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction20()" id="amdhr20" name="amdhr20" value="<?=sprintf("%02d",$amdhr20);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction20()" id="amdmin20" name="amdmin20" value="<?=sprintf("%02d",$amdmin20);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction20()" id="pmahr20" name="pmahr20" value="<?=sprintf("%02d",$pmahr20);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction20()" id="pmamin20" name="pmamin20" value="<?=sprintf("%02d",$pmamin20);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction20()" id="pmdhr20" name="pmdhr20" value="<?=sprintf("%02d",$pmdhr20);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction20()" id="pmdmin20" name="pmdmin20" value="<?=sprintf("%02d",$pmdmin20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours20" name="hours20" value="<?=sprintf("%02d",$hours20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min20" name="min20" value="<?=sprintf("%02d",$min20);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin20" name="tmin20" value="<?=sprintf("%03d",$tmin20);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction21()" id="amahr21" name="amahr21" value="<?=sprintf("%02d",$amahr21);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction21()" id="amamin21" name="amamin21" value="<?=sprintf("%02d",$amamin21);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction21()" id="amdhr21" name="amdhr21" value="<?=sprintf("%02d",$amdhr21);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction21()" id="amdmin21" name="amdmin21" value="<?=sprintf("%02d",$amdmin21);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction21()" id="pmahr21" name="pmahr21" value="<?=sprintf("%02d",$pmahr21);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction21()" id="pmamin21" name="pmamin21" value="<?=sprintf("%02d",$pmamin21);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction21()" id="pmdhr21" name="pmdhr21" value="<?=sprintf("%02d",$pmdhr21);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction21()" id="pmdmin21" name="pmdmin21" value="<?=sprintf("%02d",$pmdmin21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours21" name="hours21" value="<?=sprintf("%02d",$hours21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min21" name="min21" value="<?=sprintf("%02d",$min21);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin21" name="tmin21" value="<?=sprintf("%03d",$tmin21);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction22()" id="amahr22" name="amahr22" value="<?=sprintf("%02d",$amahr22);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction22()" id="amamin22" name="amamin22" value="<?=sprintf("%02d",$amamin22);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction22()" id="amdhr22" name="amdhr22" value="<?=sprintf("%02d",$amdhr22);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction22()" id="amdmin22" name="amdmin22" value="<?=sprintf("%02d",$amdmin22);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction22()" id="pmahr22" name="pmahr22" value="<?=sprintf("%02d",$pmahr22);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction22()" id="pmamin22" name="pmamin22" value="<?=sprintf("%02d",$pmamin22);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction22()" id="pmdhr22" name="pmdhr22" value="<?=sprintf("%02d",$pmdhr22);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction22()" id="pmdmin22" name="pmdmin22" value="<?=sprintf("%02d",$pmdmin22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours22" name="hours22" value="<?=sprintf("%02d",$hours22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min22" name="min22" value="<?=sprintf("%02d",$min22);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin22" name="tmin22" value="<?=sprintf("%03d",$tmin22);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction23()" id="amahr23" name="amahr23" value="<?=sprintf("%02d",$amahr23);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction23()" id="amamin23" name="amamin23" value="<?=sprintf("%02d",$amamin23);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction23()" id="amdhr23" name="amdhr23" value="<?=sprintf("%02d",$amdhr23);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction23()" id="amdmin23" name="amdmin23" value="<?=sprintf("%02d",$amdmin23);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction23()" id="pmahr23" name="pmahr23" value="<?=sprintf("%02d",$pmahr23);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction23()" id="pmamin23" name="pmamin23" value="<?=sprintf("%02d",$pmamin23);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction23()" id="pmdhr23" name="pmdhr23" value="<?=sprintf("%02d",$pmdhr23);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction23()" id="pmdmin23" name="pmdmin23" value="<?=sprintf("%02d",$pmdmin23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours23" name="hours23" value="<?=sprintf("%02d",$hours23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min23" name="min23" value="<?=sprintf("%02d",$min23);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin23" name="tmin23" value="<?=sprintf("%03d",$tmin23);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction24()" id="amahr24" name="amahr24" value="<?=sprintf("%02d",$amahr24);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction24()" id="amamin24" name="amamin24" value="<?=sprintf("%02d",$amamin24);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction24()" id="amdhr24" name="amdhr24" value="<?=sprintf("%02d",$amdhr24);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction24()" id="amdmin24" name="amdmin24" value="<?=sprintf("%02d",$amdmin24);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction24()" id="pmahr24" name="pmahr24" value="<?=sprintf("%02d",$pmahr24);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction24()" id="pmamin24" name="pmamin24" value="<?=sprintf("%02d",$pmamin24);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction24()" id="pmdhr24" name="pmdhr24" value="<?=sprintf("%02d",$pmdhr24);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction24()" id="pmdmin24" name="pmdmin24" value="<?=sprintf("%02d",$pmdmin24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours24" name="hours24" value="<?=sprintf("%02d",$hours24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min24" name="min24" value="<?=sprintf("%02d",$min24);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin24" name="tmin24" value="<?=sprintf("%03d",$tmin24);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction25()" id="amahr25" name="amahr25" value="<?=sprintf("%02d",$amahr25);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction25()" id="amamin25" name="amamin25" value="<?=sprintf("%02d",$amamin25);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction25()" id="amdhr25" name="amdhr25" value="<?=sprintf("%02d",$amdhr25);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction25()" id="amdmin25" name="amdmin25" value="<?=sprintf("%02d",$amdmin25);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction25()" id="pmahr25" name="pmahr25" value="<?=sprintf("%02d",$pmahr25);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction25()" id="pmamin25" name="pmamin25" value="<?=sprintf("%02d",$pmamin25);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction25()" id="pmdhr25" name="pmdhr25" value="<?=sprintf("%02d",$pmdhr25);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction25()" id="pmdmin25" name="pmdmin25" value="<?=sprintf("%02d",$pmdmin25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours25" name="hours25" value="<?=sprintf("%02d",$hours25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min25" name="min25" value="<?=sprintf("%02d",$min25);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin25" name="tmin25" value="<?=sprintf("%03d",$tmin25);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction26()" id="amahr26" name="amahr26" value="<?=sprintf("%02d",$amahr26);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction26()" id="amamin26" name="amamin26" value="<?=sprintf("%02d",$amamin26);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction26()" id="amdhr26" name="amdhr26" value="<?=sprintf("%02d",$amdhr26);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction26()" id="amdmin26" name="amdmin26" value="<?=sprintf("%02d",$amdmin26);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction26()" id="pmahr26" name="pmahr26" value="<?=sprintf("%02d",$pmahr26);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction26()" id="pmamin26" name="pmamin26" value="<?=sprintf("%02d",$pmamin26);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction26()" id="pmdhr26" name="pmdhr26" value="<?=sprintf("%02d",$pmdhr26);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction26()" id="pmdmin26" name="pmdmin26" value="<?=sprintf("%02d",$pmdmin26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours26" name="hours26" value="<?=sprintf("%02d",$hours26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min26" name="min26" value="<?=sprintf("%02d",$min26);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin26" name="tmin26" value="<?=sprintf("%03d",$tmin26);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction27()" id="amahr27" name="amahr27" value="<?=sprintf("%02d",$amahr27);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction27()" id="amamin27" name="amamin27" value="<?=sprintf("%02d",$amamin27);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction27()" id="amdhr27" name="amdhr27" value="<?=sprintf("%02d",$amdhr27);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction27()" id="amdmin27" name="amdmin27" value="<?=sprintf("%02d",$amdmin27);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction27()" id="pmahr27" name="pmahr27" value="<?=sprintf("%02d",$pmahr27);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction27()" id="pmamin27" name="pmamin27" value="<?=sprintf("%02d",$pmamin27);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction27()" id="pmdhr27" name="pmdhr27" value="<?=sprintf("%02d",$pmdhr27);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction27()" id="pmdmin27" name="pmdmin27" value="<?=sprintf("%02d",$pmdmin27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours27" name="hours27" value="<?=sprintf("%02d",$hours27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min27" name="min27" value="<?=sprintf("%02d",$min27);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin27" name="tmin27" value="<?=sprintf("%03d",$tmin27);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction28()" id="amahr28" name="amahr28" value="<?=sprintf("%02d",$amahr28);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction28()" id="amamin28" name="amamin28" value="<?=sprintf("%02d",$amamin28);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction28()" id="amdhr28" name="amdhr28" value="<?=sprintf("%02d",$amdhr28);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction28()" id="amdmin28" name="amdmin28" value="<?=sprintf("%02d",$amdmin28);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction28()" id="pmahr28" name="pmahr28" value="<?=sprintf("%02d",$pmahr28);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction28()" id="pmamin28" name="pmamin28" value="<?=sprintf("%02d",$pmamin28);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction28()" id="pmdhr28" name="pmdhr28" value="<?=sprintf("%02d",$pmdhr28);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction28()" id="pmdmin28" name="pmdmin28" value="<?=sprintf("%02d",$pmdmin28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours28" name="hours28" value="<?=sprintf("%02d",$hours28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min28" name="min28" value="<?=sprintf("%02d",$min28);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin28" name="tmin28" value="<?=sprintf("%03d",$tmin28);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction29()" id="amahr29" name="amahr29" value="<?=sprintf("%02d",$amahr29);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction29()" id="amamin29" name="amamin29" value="<?=sprintf("%02d",$amamin29);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction29()" id="amdhr29" name="amdhr29" value="<?=sprintf("%02d",$amdhr29);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction29()" id="amdmin29" name="amdmin29" value="<?=sprintf("%02d",$amdmin29);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction29()" id="pmahr29" name="pmahr29" value="<?=sprintf("%02d",$pmahr29);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction29()" id="pmamin29" name="pmamin29" value="<?=sprintf("%02d",$pmamin29);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction29()" id="pmdhr29" name="pmdhr29" value="<?=sprintf("%02d",$pmdhr29);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction29()" id="pmdmin29" name="pmdmin29" value="<?=sprintf("%02d",$pmdmin29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours29" name="hours29" value="<?=sprintf("%02d",$hours29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min29" name="min29" value="<?=sprintf("%02d",$min29);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin29" name="tmin29" value="<?=sprintf("%03d",$tmin29);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction30()" id="amahr30" name="amahr30" value="<?=sprintf("%02d",$amahr30);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction30()" id="amamin30" name="amamin30" value="<?=sprintf("%02d",$amamin30);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction30()" id="amdhr30" name="amdhr30" value="<?=sprintf("%02d",$amdhr30);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction30()" id="amdmin30" name="amdmin30" value="<?=sprintf("%02d",$amdmin30);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction30()" id="pmahr30" name="pmahr30" value="<?=sprintf("%02d",$pmahr30);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction30()" id="pmamin30" name="pmamin30" value="<?=sprintf("%02d",$pmamin30);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction30()" id="pmdhr30" name="pmdhr30" value="<?=sprintf("%02d",$pmdhr30);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction30()" id="pmdmin30" name="pmdmin30" value="<?=sprintf("%02d",$pmdmin30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours30" name="hours30" value="<?=sprintf("%02d",$hours30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min30" name="min30" value="<?=sprintf("%02d",$min30);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin30" name="tmin30" value="<?=sprintf("%03d",$tmin30);?>"></td>
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
            <td><input style="text-align:right" type="text" onkeypress="myFunction31()" id="amahr31" name="amahr31" value="<?=sprintf("%02d",$amahr31);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction31()" id="amamin31" name="amamin31" value="<?=sprintf("%02d",$amamin31);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction31()" id="amdhr31" name="amdhr31" value="<?=sprintf("%02d",$amdhr31);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction31()" id="amdmin31" name="amdmin31" value="<?=sprintf("%02d",$amdmin31);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction31()" id="pmahr31" name="pmahr31" value="<?=sprintf("%02d",$pmahr31);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction31()" id="pmamin31" name="pmamin31" value="<?=sprintf("%02d",$pmamin31);?>"></td>
            <td><input style="text-align:right" type="text" onkeypress="myFunction31()" id="pmdhr31" name="pmdhr31" value="<?=sprintf("%02d",$pmdhr31);?>"></td>
            <td><input style="text-align:left" type="text" onkeypress="myFunction31()" id="pmdmin31" name="pmdmin31" value="<?=sprintf("%02d",$pmdmin31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="hours31" name="hours31" value="<?=sprintf("%02d",$hours31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="min31" name="min31" value="<?=sprintf("%02d",$min31);?>"></td>
            <td><input type="text" style="font-weight:bold"  readonly="readonly" id="tmin31" name="tmin31" value="<?=sprintf("%03d",$tmin31);?>"></td>
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
          <th style="width:40px"><input type="text" readonly="readonly" style="width:50px" id="total_hours" name="total_hours"value="<?=sprintf("%02d",$total_hours);?>"></th>
          <th style="width:40px"><input type="text" readonly="readonly" style="width:50px" id="total_min" name="total_min"value="<?=sprintf("%02d",$total_min);?>"></th>
          <th style="width:40px"><input type="text" style="width:50px"  id="total_under_min" name="total_under_min"value="<?=sprintf("%03d",$total_under_min);?>"></th>
        </tr>
      </table>
</body>
</html>