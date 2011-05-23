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

<body id="events">
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
          <h1>EMPLOYER INFORMATION SESSIONS</h1>
          <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
                <ul>
                <li class="first"> <a href="/career/">Home</a> </li>
                <li><a href="./">Events and Career Fairs</a></li>
                <li  class="last">Employer information sessions</li>
              </ul>
            </div>
          </div>
          <p>Information sessions are scheduled by employers during
            the fall and spring semesters – often in advance of  career fairs and
            on-campus interviews.  Employers use these opportunities to increase
            the visibility of their organization  and interact personally with  students interested in internships and entry-level jobs.     </p>
          <p> Information sessions are networking opportunities!  Many representatives are NC State graduates. All
            students in all majors are invited to attend.  Details are
            posted in <a href="http://www.ncsu.edu/epack/">ePACK</a> where you can also RSVP.</p>
          <ul>
            <li>Wear nice casual attire.  </li>
            <li>Take a copy of your resume.</li>
            <li>Research the employer in advance.</li>
            <li>Bring your questions and enthusiasm.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <div id="navTop" class="sideTop">
        <?php require_once('../includefiles/nav/eventsNav.php');?>
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