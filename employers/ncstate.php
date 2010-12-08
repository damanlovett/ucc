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

<body>

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
        <div class="yui-g"><div id="fadeshow1"></div></div>
        <div id="secContent" class="yui-g">
          <h1>ABOUT NC STATE          </h1>
          <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
                <ul>
                <li class="first"> <a href="/career/">Home</a> </li>
                <li> <a href="./">Access for Employers</a> </li>
                <li class="last"> About NC State </li>
              </ul>
            </div>
            <ul>
              <li><a
href="http://www.ncsu.edu/about-nc-state/quick-view/index.php">NC State at-a-glance</a> <br>
                NC State is a recognized leader in science, technology, and engineering.
                <br>
              </li>
            </ul>
          </div>
<ul>
            <li><a href="../about/directions.php">Visiting NC State</a><br> 
            Plan your trip in advance with our help.<br>
            <br>
          </li>
            <li><a
href="http://www.ncsu.edu/reg_records/calendars/index.html">Academic calendar</a> / <a href="../pdfs/recruiting-calendar.pdf">recruiting
              calendar</a><br>
              Know important dates before making plans.<br>
              <br>
            </li>
            <li><a
href="http://www.ncsu.edu/colleges_schools.html">Colleges</a> / <a
href="http://www.ncsu.edu/acad_depart.html">departments</a> / <a
href="http://www.ncsu.edu/academics/degrees-programs/index.php">degree programs</a> / <a
href="http://www.ncsu.edu/research/index.php">research</a><br>
              Find links to degree programs, curriculum, faculty, and areas of research.<br>
              <br>
            </li>
            <li><a
href="http://www2.acs.ncsu.edu/upa/enrollmentdata/index.htm">Enrollment statistics by major</a><br>
              Find the profiles of students enrolled in each major.<br>
              <br>
            </li>
            <li><a
href="http://www2.acs.ncsu.edu/upa/degrees/index.htm">Graduation statistics by major</a><br>
              Find the number and profile of students who graduate in each major.  <br>
              <br>
            </li>
            <li><a
href="http://www.ncsu.edu/diversity/index.php">Diversity @ NC State</a><br>
              Connect with diverse student organizations and programs.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <div id="navTop" class="sideTop">
        <?php require_once('../includefiles/nav/employerNav.php');?>
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