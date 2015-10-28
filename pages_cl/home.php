<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Icons/favicon.ico">
<link type="text/css" rel="stylesheet" href="../css/user.css">
<title>Home</title>
    <meta charset="utf-8"> 
    <link href="../css/movingboxes.css" rel="stylesheet">
    <link href="../css/movingboxes-ie.css" rel="stylesheet" media="screen" />
    <script src="../js/jquery-1.8.0.min.js"></script>
    <script src="../js/jquery.movingboxes.js"></script>
    <link href="../css/slide.css" rel="stylesheet">
    <script src="../js/slide.js"></script>
    <style>
    #slider-one { width: 500px; }
    #slider-one li { width: 250px; } 
    #slider-two { width: 300px; }
    #slider-two > div { width: 500px; }
    </style>
</head>
<body>
  <div id="container_user">
    <?php
    include('header_user.php');
    include('menubar.php');
    ?>
    <br/>
    <div class="content">        
        <div class="content_left_home" style="padding-left:30px"><p><h3>IFSU HYMN</h3></p>
            <audio controls>
              <source src="../audio/ifsu_hymn.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>
                    <span><center><h3>Ifugao State University Visual Presentation</h3><center></span>
                    <div id="slider-two">
                    <div>Ifugao State University Part 1<video width="300" height="280" controls>
                          <source src="../videos/ifsu1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                          </video></div>
                    <div>Ifugao State University Part 2<video width="300" height="280" controls>
                          <source src="../videos/ifsu2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video></div>
                    <div>Ifugao State University Part 3<video width="300" height="280" controls>
                          <source src="../videos/ifsu3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video></div>
                    <div>Ifugao State University Part 4<video width="300" height="280" controls>
                          <source src="../videos/ifsu4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video></div>
                    </div>                     
        </div>
        <div class="content_center_home">
           <ul id="slider-one">

            <li>
                <img src="../photos/1.jpg" alt="picture">
                <h2>Human Resources</h2>
                <p>Human Resources Management System (HRMS) or Human Resources Information System (HRIS), refers... <a href="news1.php">more</a></p>
            </li>

            <li>
                <img src="../photos/2.jpg" alt="picture">
                <h2>Log Cabin</h2>
                <p>A log cabin is a house built from logs. It is a fairly... <a href="news2.php">more</a></p>
            </li>

            <li>
                <img src="../photos/3.jpg" alt="picture">
                <h2>Nature</h2>
                <p>Nature, in the broadest sense, is equivalent to the natural,... <a href="news3.php">more</a></p>
            </li>

            <li>
                <img src="../photos/4.jpg" alt="picture">
                <h2>Flower</h2>
                <p>A flower, sometimes known as... <a href="news4.php">more</a></p>
            </li>

            <li>
                <img src="../photos/5.jpg" alt="picture">
                <h2>Nursing Board Exam Result</h2>
                <p>Nursing Board Exam Result...<a href="news5.php">more</a></p>
            </li>

            <li>
                <!--<img src="../photos/6.jpg" alt="picture">-->
                <h2>Ifugao Satoyama Meister Trainees showcase research studies in RP-Japan Forum</h2>
                <p>Empowered through the Ifugao Satoyama Meister Training Program, the trainees showcased their... <a href="news6.php">more</a></p>
            </li>
            <li>
                <img src="../photos/7.jpg" alt="picture">
                <h2>IFSU-Lagawe Campus Admin Building</h2>
                <p>The Admin Building... <a href="news7.php">more</a></p>
            </li>
            <li>
                <img src="../photos/8.jpg" alt="picture">
                <h2>IFUS-Lagawe Campus HR</h2>
                <p>HR, Encoding employee records... <a href="news8.php">more</a></p>
            </li>

        </ul>   
        </div>
        <div class="content_right_home">
            <marquee behavior="scroll" direction="up" height="500px" style="color:#002E0F;" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
            <h3>What is HRIS?</h3>
            <p style="text-indent:40px; text-align:justify;"> A HRIS, which is also known as a human resource 
                information system or human resource management system (HRMS), 
                is basically an intersection of human resources and information 
                technology through HR software. This allows HR activities and 
                processes to occur electronically.</p>

                <p style="text-indent:40px; text-align:justify;">To put it another way, a HRIS may be viewed 
                as a way, through software, for businesses big and small to take care of a 
                number of activities, including those related to human resources, accounting, 
                management, and payroll. A HRIS allows a company to plan its HR costs more effectively, 
                as well as to manage them and control them without needing to allocate 
                too many resources toward them.- <a href="http://www.hrpayrollsystems.net/hris/">HRIS</a></p>
            </marquee>
        </div>
    </div><br/><br/>
    <?php
        include('footer_user.php');
    ?>
  </div>
    
</body>
</html>