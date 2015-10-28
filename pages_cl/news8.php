<!DOCTYPE html
          PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/user.css">
<meta charset="utf-8"> 
<title>News</title>
<?php
    include('header_user.php');
    ?>
</head>
<body style="border-radius: 10px 10px 10px 10px;
    border: 2px solid #8DC3E9;
    background: -webkit-linear-gradient(#DCEBBE, #757116, #B9DC82);
    background: -moz-linear-gradient(#DCEBBE, #757116, #B9DC82);">
    <nav style="height:110px;">
        <?php
        include('menubar.php');
        ?>
    </nav>
    <section style="float:left; margin: 0 1.5%;  width: 63%;">
        <img src="../photos/8.jpg"/>
    
    <article>
        <p style="text-indent:40px; text-align:justify;"> </p>
    </article>
    </section>

    <aside style="float: right;  margin: 0 1.5%;  width: 30%; ">
            <marquee behavior="scroll" direction="up" style="color:#002E0F;" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                <h3>What is HRIS?</h3>
                <justify><p>&nbsp &nbsp&nbsp &nbsp A HRIS, which is also known as a human resource 
                information system or human resource management system (HRMS), 
                is basically an intersection of human resources and information 
                technology through HR software. This allows HR activities and 
                processes to occur electronically.</p></justify>

                <justify><p>&nbsp &nbsp&nbsp &nbspTo put it another way, a HRIS may be viewed 
                as a way, through software, for businesses big and small to take care of a 
                number of activities, including those related to human resources, accounting, 
                management, and payroll. A HRIS allows a company to plan its HR costs more effectively, 
                as well as to manage them and control them without needing to allocate 
                too many resources toward them.- <a href="http://www.hrpayrollsystems.net/hris/">HRIS</a></p></justify>
            </marquee>
    </aside>
  </div> 
    <?php
        include('footer_user.php');
    ?>    
</body>
</html>