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
        <div class="yui-g"> <img src="../img/headerStudentExample.jpg" alt="header" width="720" height="164"> </div>
        <div id="secContent" class="yui-g">
          <h1>Unity Access </h1>
          <p>These sites are restricted to NC State students and require unity login. <br>
            Need help?  Contact the UCC at 
          919.515.2396 or <a href="mailto:career_center@ncsu.edu">career_center@ncsu.edu</a>.</p>
          <p><a href="http://www.careerkey.org">Career Key</a> <br>
            Choose: &quot;Take the Career Key Test&quot; -- then -- &quot;Take the Career key Text with my User Code&quot;<br>
          User Code: WPACK </p>
          <p><a href="https://access.bridges.com/portal/client/landingPage.do">Choices</a><br />
            ID: 1212609<br />
            Password: ncstate <br />
            Password (ability profiler): begin</p>
<p><a href="http://careerweb.unc.edu/cgi-bin/odbic.exe/eleads3/searchstu.htm?logschool=NCSU">eLeads</a></p>
          <p><a href="http://v2.careersearch.net/client">Career Search</a><br />
            New users: create an account (username &amp; password) <br />
            Returning users: username, &amp; password<br />
            NOTE: Client referral = wolfpack04 </p>
          <p><a href="http://www.internships-usa.com/">Internships-USA</a><br>
            Choose: &quot;The Internship Series On-line&quot;<br>
            Username:  work<br>
          Password: learn          </p>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <div id="navTop" class="sideTop">
        <?php require_once('jobsearchNav.php');?>
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