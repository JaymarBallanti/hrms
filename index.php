<?php
include('login.php');
if (isset($_SESSION['login_user'])) {
header("location: pages/home.php");
}
?>
<html>
<head>
<link rel="shortcut icon" href="Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="css/user.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<title>HRIS-IFSU LAGAWE</title>
</head>
<body>
  <div id="container_user">
    <div class="content">
        <div class="content_left">
            <div class="hris"><img src="Icons/logo.png" style="height:190px; width:280px"></div>
            <?php
            include('login_form.php');
            ?>
        </div>
        <div class="content_center">
            <marquee behavior="scroll" direction="up" style="color:#002E0F;" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
            <h3>VMGO</h3>
            <p><h4>Our Vision</h4></p>
            <p style="text-align:justify;">IFSU for ACE-Academic Centers of Exellence</p>
            <p><h4>Our Mission</h4></p>
            <p style="text-indent:40px; text-align:justify;">To provide quality education, research 
                morally upright induviduals endowed with professionals 
                and entrepreneurial skills who will take the lead in 
                enhancing sustainable development towards improved 
                quality of life.</p>
            <p><h4>Our Goals</h4></p>
            <ul>
                <li>Pursue Excellence in Instruction Services</li>
                <li>Pursue Excellence in Research Services</li>
                <li>Pursue Excellence in Extension Services</li>
                <li>Pursue Excellence in Training Services</li>
                <li>Pursue Excellence in Resource Generation</li>
                <li>Pursue Excellence in Administration and Management</li>
            </ul>
            <p><h4>Strategic Objectives</h4></p>
            <ul>
                <li>Intensify enhancement in instruction;</li>
                <li>Broaden access to higher education;</li>
                <li>Promote student Welfare</li>
                <li>Improve student performance in licensure exams and
                    employment;</li>
                <li>Intensify conduct of research;</li>
                <li>Increase presentation and publications of research 
                    result papers in national and international journals;</li>
                <li>Generate, package and patent relevant technologies;</li>
                <li>Improve extension and training services;</li>
                <li>Intensify conduct of existing extension and training <br/>
                    programs and activities;</li>
                <li>Undertake new extension and training programs focused 
                    on technology and sharing applications;</li>
                <li>Enhance existing income generating projects;</li>
                <li>Maximize the utilization of assets (lands).</li>
            </ul>
        </marquee>
        </div>

        <div class="content_right">
        <div class="logo_user"><marquee direction="down" width="150" height="500" behavior="alternate" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" >
          <marquee behavior="alternate"><a href="http://www.ifsu.edu.ph">
          <img src="Images/ifsu.png" style="height:120px; width:120x"></a>
      </marquee></marquee> &nbsp
      </div></div>
    </div>
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