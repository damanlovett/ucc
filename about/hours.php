<!DOCTYPE HTML>

<head>
<meta charset="UTF-8">
<title>University Career Center</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/base/base-min.css">
<link rel="stylesheet" href="../css/uccdefaultNAV.css" type="text/css">
<script src="../jquery/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../jquery/js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<link href="../jquery/css/ucc/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css">
<?php require_once('../includefiles/init.php'); ?>
</head>
<body id="ucc">

<!-- NCSTATE Bar -->
<link rel="stylesheet" type="text/css" href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" media="screen" />
<iframe name="ncsu_branding_bar" id="ncsu_branding_bar" frameborder="0" src="http://www.ncsu.edu/brand/utility-bar/iframe/index.php?color=red&amp;inurl=ncsu.edu/career&amp;center=yes" scrolling="no"> Your browser does not support inline frames or  
				is currently configured  not to display inline frames.<br />
Visit <a href="http://ncsu.edu/">http://www.ncsu.edu</a>. </iframe>
<!-- End of NCSTATE Bar -->

<div id="doc4" class="yui-t2">
  <div id="hd" role="navigation">
    <?php require_once('../includefiles/topMenu.php');?>
  </div>
  <div id="bd" role="main">
    <div id="yui-main">
      <div class="yui-b">
        <div class="yui-g">
          <div id="fadeshow1"></div>
        </div>
        <div id="secContent" class="yui-g">
          <h1>HOURS &amp;
            APPOINTMENTS</h1>
            <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
                <ul>
                <li class="first"><a href="/career/">Home</a></li>
                <li> <a href="/career/about">About The Career Center</a> </li>
                <li class="last">Hours & Appointments</li>
              </ul>
              </div>
          </div>
          <p><b>Hours</b><br>
            Monday-Friday, 8:00am-5:00pm<br>
          </p>
          <p><b>Appointments</b><br>
            For conversations about choosing a major or conducting an effective job search (including writing a resume) -- call 919.515.2396 to make an appointment with your  <a
href="/career/about/staff.php">career counselor</a>. 
             Appointments are typically 30 minutes in
          length.   [Available throughout the year.]</p>
          <p><b>Walk-ins</b>  <br>
            For quick career-related questions, stop by during walk-in hours,
            11:00am-2:00pm daily. 
            Walk-ins are typically
            10-15 minutes in length with the career counselor on duty. [Available during the  semester when classes are
          in session.] <strong><em><br>
          </em></strong></p>
          <p>Monday -- Woody Catoe<br>
Tuesday -- Leslie Rand-Pickett <br>
Wednesday -- D.R. Ingram <br>
Thursday -- Leslie Bowman<br>
Friday -- Beverly Marchi</p>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <div id="navTop" class="sideTop">
        <?php require_once('../includefiles/nav/aboutNav.php');?>
      </div>
      <?php require_once('../includefiles/epacklogin.php'); ?>
      <div id="navMedia" class="sMedia">
        <?php require_once('../includefiles/socialmedia.php');?>
      </div>
    </div>
  </div>
  <!-- End of bd -->
  <div id="ft" role="contentinfo">
    <?php require_once('../includefiles/footer.php');?>
  </div>
</div>
</body>
</html>