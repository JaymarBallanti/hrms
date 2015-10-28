<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="content_dtr" style="text-align:center">
      <div class="form_title"><p></p>
      <form name="dtr" action=" " method="post">
      <table id="timesheet_print" style="width:200px">
        <tr>
          <td colspan="12" style="font-size:12px"><center>Daily Time Record</center></td>
        </tr>
        <tr>
          <td colspan="2">Employee ID: </td>
          <td colspan="3"><input type="text" style="width:50px" readonly="true" name="employee_id" value="<?=$employee_id;?>"></td>
          <td colspan="8">Name: &nbsp&nbsp<?php echo "$last_name, $first_name $middle_name";?></td>
        </tr>
        <tr>
          <td colspan="2">Month: </td>
          <td colspan="2"><?php echo $month;?></td>
          <td colspan="8">Regular Days: <?php echo $regular_days;?> &nbsp
             Saturdays: <?php echo $saturdays;?></td>
        </tr>
        <tr>
          <th rowspan="2" scope="colgroup" style="width:30px; text-align:center">Day</th>
          <th colspan="4" scope="colgroup" style="width:60px; text-align:center">AM</th>
          <th colspan="4" scope="colgroup" style="width:80px; text-align:center">PM</th>
          <th colspan="3" scope="colgroup" style="width:70px; text-align:center">Total Under Time</th>
        </tr>
        <tr>
          <th colspan="2" scope="col" style="width:30px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:20px; text-align:center">Departure</th>
          <th colspan="2" scope="col" style="width:30px; text-align:center">Arrival</th>
          <th colspan="2" scope="col" style="width:30px; text-align:center">Departure</th>
          <th rowspan="1" scope="col" style="width:20px; text-align:center">Hours</th>
          <th rowspan="1" scope="col" style="width:20px; text-align:center">Min</th>
          <th rowspan="1" scope="col" style="width:50px; text-align:center">Total in<br/>Minutes</th>
        </tr>
        <tr>
          <td>1</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr1);?>:<?php echo sprintf("%02d",$amamin1);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr1);?>:<?php echo sprintf("%02d",$amdmin1);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr1);?>:<?php echo sprintf("%02d",$pmamin1);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr1);?>:<?php echo sprintf("%02d",$pmdmin1);?></td>
            <td><?php echo sprintf("%02d",$hours1);?></td>
            <td><?php echo sprintf("%02d",$min1);?></td>
            <td><?php echo sprintf("%03d",$tmin1);?></td>
        </tr>
        <tr>
          <td>2</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr2);?>:<?php echo sprintf("%02d",$amamin2);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr2);?>:<?php echo sprintf("%02d",$amdmin2);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr2);?>:<?php echo sprintf("%02d",$pmamin2);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr2);?>:<?php echo sprintf("%02d",$pmdmin2);?></td>
            <td><?php echo sprintf("%02d",$hours2);?></td>
            <td><?php echo sprintf("%02d",$min2);?></td>
            <td><?php echo sprintf("%03d",$tmin2);?></td>
        </tr>
        <tr>
          <td>3</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr3);?>:<?php echo sprintf("%02d",$amamin3);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr3);?>:<?php echo sprintf("%02d",$amdmin3);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr3);?>:<?php echo sprintf("%02d",$pmamin3);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr3);?>:<?php echo sprintf("%02d",$pmdmin3);?></td>
            <td><?php echo sprintf("%02d",$hours3);?></td>
            <td><?php echo sprintf("%02d",$min3);?></td>
            <td><?php echo sprintf("%03d",$tmin3);?></td>
        </tr>
        <tr>
          <td>4</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr4);?>:<?php echo sprintf("%02d",$amamin4);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr4);?>:<?php echo sprintf("%02d",$amdmin4);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr4);?>:<?php echo sprintf("%02d",$pmamin4);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr4);?>:<?php echo sprintf("%02d",$pmdmin4);?></td>
            <td><?php echo sprintf("%02d",$hours4);?></td>
            <td><?php echo sprintf("%02d",$min4);?></td>
            <td><?php echo sprintf("%03d",$tmin4);?></td>
        </tr>
        <tr>
          <td>5</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr5);?>:<?php echo sprintf("%02d",$amamin5);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr5);?>:<?php echo sprintf("%02d",$amdmin5);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr5);?>:<?php echo sprintf("%02d",$pmamin5);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr5);?>:<?php echo sprintf("%02d",$pmdmin5);?></td>
            <td><?php echo sprintf("%02d",$hours5);?></td>
            <td><?php echo sprintf("%02d",$min5);?></td>
            <td><?php echo sprintf("%03d",$tmin5);?></td>
        </tr>
        <tr>
          <td>6</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr6);?>:<?php echo sprintf("%02d",$amamin6);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr6);?>:<?php echo sprintf("%02d",$amdmin6);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr6);?>:<?php echo sprintf("%02d",$pmamin6);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr6);?>:<?php echo sprintf("%02d",$pmdmin6);?></td>
            <td><?php echo sprintf("%02d",$hours6);?></td>
            <td><?php echo sprintf("%02d",$min6);?></td>
            <td><?php echo sprintf("%03d",$tmin6);?></td>
        </tr>
        <tr>
          <td>7</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr7);?>:<?php echo sprintf("%02d",$amamin7);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr7);?>:<?php echo sprintf("%02d",$amdmin7);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr7);?>:<?php echo sprintf("%02d",$pmamin7);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr7);?>:<?php echo sprintf("%02d",$pmdmin7);?></td>
            <td><?php echo sprintf("%02d",$hours7);?></td>
            <td><?php echo sprintf("%02d",$min7);?></td>
            <td><?php echo sprintf("%03d",$tmin7);?></td>
        </tr>
        <tr>
          <td>8</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr8);?>:<?php echo sprintf("%02d",$amamin8);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr8);?>:<?php echo sprintf("%02d",$amdmin8);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr8);?>:<?php echo sprintf("%02d",$pmamin8);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr8);?>:<?php echo sprintf("%02d",$pmdmin8);?></td>
            <td><?php echo sprintf("%02d",$hours8);?></td>
            <td><?php echo sprintf("%02d",$min8);?></td>
            <td><?php echo sprintf("%03d",$tmin8);?></td>
        </tr>
        <tr>
          <td>9</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr9);?>:<?php echo sprintf("%02d",$amamin9);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr9);?>:<?php echo sprintf("%02d",$amdmin9);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr9);?>:<?php echo sprintf("%02d",$pmamin9);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr9);?>:<?php echo sprintf("%02d",$pmdmin9);?></td>
            <td><?php echo sprintf("%02d",$hours9);?></td>
            <td><?php echo sprintf("%02d",$min9);?></td>
            <td><?php echo sprintf("%03d",$tmin9);?></td>
        </tr>
        <tr>
          <td>10</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr10);?>:<?php echo sprintf("%02d",$amamin10);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr10);?>:<?php echo sprintf("%02d",$amdmin10);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr10);?>:<?php echo sprintf("%02d",$pmamin10);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr10);?>:<?php echo sprintf("%02d",$pmdmin10);?></td>
            <td><?php echo sprintf("%02d",$hours10);?></td>
            <td><?php echo sprintf("%02d",$min10);?></td>
            <td><?php echo sprintf("%03d",$tmin10);?></td>
        </tr>
        <tr>
          <td>11</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr11);?>:<?php echo sprintf("%02d",$amamin11);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr11);?>:<?php echo sprintf("%02d",$amdmin11);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr11);?>:<?php echo sprintf("%02d",$pmamin11);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr11);?>:<?php echo sprintf("%02d",$pmdmin11);?></td>
            <td><?php echo sprintf("%02d",$hours11);?></td>
            <td><?php echo sprintf("%02d",$min11);?></td>
            <td><?php echo sprintf("%03d",$tmin11);?></td>
        </tr>
        <tr>
          <td>12</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr12);?>:<?php echo sprintf("%02d",$amamin12);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr12);?>:<?php echo sprintf("%02d",$amdmin12);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr12);?>:<?php echo sprintf("%02d",$pmamin12);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr12);?>:<?php echo sprintf("%02d",$pmdmin12);?></td>
            <td><?php echo sprintf("%02d",$hours12);?></td>
            <td><?php echo sprintf("%02d",$min12);?></td>
            <td><?php echo sprintf("%03d",$tmin12);?></td>
        </tr>
        <tr>
          <td>13</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr13);?>:<?php echo sprintf("%02d",$amamin13);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr13);?>:<?php echo sprintf("%02d",$amdmin13);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr13);?>:<?php echo sprintf("%02d",$pmamin13);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr13);?>:<?php echo sprintf("%02d",$pmdmin13);?></td>
            <td><?php echo sprintf("%02d",$hours13);?></td>
            <td><?php echo sprintf("%02d",$min13);?></td>
            <td><?php echo sprintf("%03d",$tmin13);?></td>
        </tr>
        <tr>
          <td>14</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr14);?>:<?php echo sprintf("%02d",$amamin14);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr14);?>:<?php echo sprintf("%02d",$amdmin14);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr14);?>:<?php echo sprintf("%02d",$pmamin14);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr14);?>:<?php echo sprintf("%02d",$pmdmin14);?></td>
            <td><?php echo sprintf("%02d",$hours14);?></td>
            <td><?php echo sprintf("%02d",$min14);?></td>
            <td><?php echo sprintf("%03d",$tmin14);?></td>
        </tr>
        <tr>
          <td>15</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr15);?>:<?php echo sprintf("%02d",$amamin15);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr15);?>:<?php echo sprintf("%02d",$amdmin15);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr15);?>:<?php echo sprintf("%02d",$pmamin15);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr15);?>:<?php echo sprintf("%02d",$pmdmin15);?></td>
            <td><?php echo sprintf("%02d",$hours15);?></td>
            <td><?php echo sprintf("%02d",$min15);?></td>
            <td><?php echo sprintf("%03d",$tmin15);?></td>
        </tr>
        <tr>
          <td>16</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr16);?>:<?php echo sprintf("%02d",$amamin16);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr16);?>:<?php echo sprintf("%02d",$amdmin16);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr16);?>:<?php echo sprintf("%02d",$pmamin16);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr16);?>:<?php echo sprintf("%02d",$pmdmin16);?></td>
            <td><?php echo sprintf("%02d",$hours16);?></td>
            <td><?php echo sprintf("%02d",$min16);?></td>
            <td><?php echo sprintf("%03d",$tmin16);?></td>
        </tr>
        <tr>
          <td>17</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr17);?>:<?php echo sprintf("%02d",$amamin17);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr17);?>:<?php echo sprintf("%02d",$amdmin17);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr17);?>:<?php echo sprintf("%02d",$pmamin17);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr17);?>:<?php echo sprintf("%02d",$pmdmin17);?></td>
            <td><?php echo sprintf("%02d",$hours17);?></td>
            <td><?php echo sprintf("%02d",$min17);?></td>
            <td><?php echo sprintf("%03d",$tmin17);?></td>
        </tr>
        <tr>
          <td>18</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr18);?>:<?php echo sprintf("%02d",$amamin18);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr18);?>:<?php echo sprintf("%02d",$amdmin18);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr18);?>:<?php echo sprintf("%02d",$pmamin18);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr18);?>:<?php echo sprintf("%02d",$pmdmin18);?></td>
            <td><?php echo sprintf("%02d",$hours18);?></td>
            <td><?php echo sprintf("%02d",$min18);?></td>
            <td><?php echo sprintf("%03d",$tmin18);?></td>
        </tr>
        <tr>
          <td>19</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr19);?>:<?php echo sprintf("%02d",$amamin19);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr19);?>:<?php echo sprintf("%02d",$amdmin19);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr19);?>:<?php echo sprintf("%02d",$pmamin19);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr19);?>:<?php echo sprintf("%02d",$pmdmin19);?></td>
            <td><?php echo sprintf("%02d",$hours19);?></td>
            <td><?php echo sprintf("%02d",$min19);?></td>
            <td><?php echo sprintf("%03d",$tmin19);?></td>
        </tr>
        <tr>
          <td>20</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr20);?>:<?php echo sprintf("%02d",$amamin20);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr20);?>:<?php echo sprintf("%02d",$amdmin20);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr20);?>:<?php echo sprintf("%02d",$pmamin20);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr20);?>:<?php echo sprintf("%02d",$pmdmin20);?></td>
            <td><?php echo sprintf("%02d",$hours20);?></td>
            <td><?php echo sprintf("%02d",$min20);?></td>
            <td><?php echo sprintf("%03d",$tmin20);?></td>
        </tr>
        <tr>
          <td>21</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr21);?>:<?php echo sprintf("%02d",$amamin21);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr21);?>:<?php echo sprintf("%02d",$amdmin21);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr21);?>:<?php echo sprintf("%02d",$pmamin21);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr21);?>:<?php echo sprintf("%02d",$pmdmin21);?></td>
            <td><?php echo sprintf("%02d",$hours21);?></td>
            <td><?php echo sprintf("%02d",$min21);?></td>
            <td><?php echo sprintf("%03d",$tmin21);?></td>
        </tr>
        <tr>
          <td>22</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr22);?>:<?php echo sprintf("%02d",$amamin22);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr22);?>:<?php echo sprintf("%02d",$amdmin22);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr22);?>:<?php echo sprintf("%02d",$pmamin22);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr22);?>:<?php echo sprintf("%02d",$pmdmin22);?></td>
            <td><?php echo sprintf("%02d",$hours22);?></td>
            <td><?php echo sprintf("%02d",$min22);?></td>
            <td><?php echo sprintf("%03d",$tmin22);?></td>
        </tr>
        <tr>
          <td>23</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr23);?>:<?php echo sprintf("%02d",$amamin23);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr23);?>:<?php echo sprintf("%02d",$amdmin23);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr23);?>:<?php echo sprintf("%02d",$pmamin23);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr23);?>:<?php echo sprintf("%02d",$pmdmin23);?></td>
            <td><?php echo sprintf("%02d",$hours23);?></td>
            <td><?php echo sprintf("%02d",$min23);?></td>
            <td><?php echo sprintf("%03d",$tmin23);?></td>
        </tr>
        <tr>
          <td>24</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr24);?>:<?php echo sprintf("%02d",$amamin24);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr24);?>:<?php echo sprintf("%02d",$amdmin24);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr24);?>:<?php echo sprintf("%02d",$pmamin24);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr24);?>:<?php echo sprintf("%02d",$pmdmin24);?></td>
            <td><?php echo sprintf("%02d",$hours24);?></td>
            <td><?php echo sprintf("%02d",$min24);?></td>
            <td><?php echo sprintf("%03d",$tmin24);?></td>
        </tr>
        <tr>
          <td>25</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr25);?>:<?php echo sprintf("%02d",$amamin25);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr25);?>:<?php echo sprintf("%02d",$amdmin25);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr25);?>:<?php echo sprintf("%02d",$pmamin25);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr25);?>:<?php echo sprintf("%02d",$pmdmin25);?></td>
            <td><?php echo sprintf("%02d",$hours25);?></td>
            <td><?php echo sprintf("%02d",$min25);?></td>
            <td><?php echo sprintf("%03d",$tmin25);?></td>
        </tr>
        <tr>
          <td>26</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr26);?>:<?php echo sprintf("%02d",$amamin26);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr26);?>:<?php echo sprintf("%02d",$amdmin26);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr26);?>:<?php echo sprintf("%02d",$pmamin26);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr26);?>:<?php echo sprintf("%02d",$pmdmin26);?></td>
            <td><?php echo sprintf("%02d",$hours26);?></td>
            <td><?php echo sprintf("%02d",$min26);?></td>
            <td><?php echo sprintf("%03d",$tmin26);?></td>
        </tr>
        <tr>
          <td>27</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr27);?>:<?php echo sprintf("%02d",$amamin27);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr27);?>:<?php echo sprintf("%02d",$amdmin27);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr27);?>:<?php echo sprintf("%02d",$pmamin27);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr27);?>:<?php echo sprintf("%02d",$pmdmin27);?></td>
            <td><?php echo sprintf("%02d",$hours27);?></td>
            <td><?php echo sprintf("%02d",$min27);?></td>
            <td><?php echo sprintf("%03d",$tmin27);?></td>
        </tr>
        <tr>
          <td>28</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr28);?>:<?php echo sprintf("%02d",$amamin28);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr28);?>:<?php echo sprintf("%02d",$amdmin28);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr28);?>:<?php echo sprintf("%02d",$pmamin28);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr28);?>:<?php echo sprintf("%02d",$pmdmin28);?></td>
            <td><?php echo sprintf("%02d",$hours28);?></td>
            <td><?php echo sprintf("%02d",$min28);?></td>
            <td><?php echo sprintf("%03d",$tmin28);?></td>
        </tr>
        <tr>
          <td>29</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr29);?>:<?php echo sprintf("%02d",$amamin29);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr29);?>:<?php echo sprintf("%02d",$amdmin29);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr29);?>:<?php echo sprintf("%02d",$pmamin29);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr29);?>:<?php echo sprintf("%02d",$pmdmin29);?></td>
            <td><?php echo sprintf("%02d",$hours29);?></td>
            <td><?php echo sprintf("%02d",$min29);?></td>
            <td><?php echo sprintf("%03d",$tmin29);?></td>
        </tr>
        <tr>
          <td>30</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr30);?>:<?php echo sprintf("%02d",$amamin30);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr30);?>:<?php echo sprintf("%02d",$amdmin30);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr30);?>:<?php echo sprintf("%02d",$pmamin30);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr30);?>:<?php echo sprintf("%02d",$pmdmin30);?></td>
            <td><?php echo sprintf("%02d",$hours30);?></td>
            <td><?php echo sprintf("%02d",$min30);?></td>
            <td><?php echo sprintf("%03d",$tmin30);?></td>
        </tr>
        <tr>
          <td>31</td>
            <td colspan="2"><?php echo sprintf("%02d",$amahr31);?>:<?php echo sprintf("%02d",$amamin31);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$amdhr31);?>:<?php echo sprintf("%02d",$amdmin31);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmahr31);?>:<?php echo sprintf("%02d",$pmamin31);?></td>
            <td colspan="2"><?php echo sprintf("%02d",$pmdhr31);?>:<?php echo sprintf("%02d",$pmdmin31);?></td>
            <td><?php echo sprintf("%02d",$hours31);?></td>
            <td><?php echo sprintf("%02d",$min31);?></td>
            <td><?php echo sprintf("%03d",$tmin31);?></td>
        </tr>
        <tr>
          <th id="total" colspan="9" scope="colgroup" style="width:160px; text-align:right"><input type="hidden" style="width:50px" value="Total" onclick="functionTotalall(dtr)" id="total" name="total"></th>
          <th style="width:20px"><?php echo  sprintf("%02d",$total_hours);?></th>
          <th style="width:20px"><?php echo  sprintf("%02d",$total_min);?></th>
          <th style="width:30px"><?php echo  sprintf("%03d",$total_under_min);?></th>
        </tr>
        <tr>
          <th colspan="12">
            <br/>
            <br/>
            <center><hr noshade="#000000" style="width:150px"></hr></center>
            <center><i>Signature</i><center>
              <br/>
              <br/>
            <center><hr noshade="#000000" style="width:150px"></hr></center>
            <center><i>In-Charge</i><center>
              <br/>
          </th>
        </tr>
      </table>
    </form>
  </div>
  </div>
</body>
</html>