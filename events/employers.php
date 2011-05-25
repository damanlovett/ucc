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
<link href="../css/customJquery.css" rel="stylesheet" type="text/css">

<?php require_once('../includefiles/init.php'); ?>

<style type="text/css">
<!--
.style1 {
	color: #333333;
	font-style: italic;
	font-size: 0.8em;
}
-->
</style>
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
          <h1>EMPLOYER SUCCESS</h1>
          <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
                <ul>
                <li class="first"> <a href="/career/">Home</a> </li>
                <li><a href="./">Events and Career Fairs</a></li>
                <li><a href="fairs.php">Career Fairs</a></li>
                <li  class="last">Employer Success</li>
              </ul>
            </div>
          </div>
          <p><strong>Register  early</strong> <br>
          Secure your spot at career fairs of high interest! </p>
          <p><strong>Use <a href="../employers/epack.php">ePACK</a></strong><a href="../employers/epack.php"></a></p>
          <ul>
            <li><em><strong>Post internships &amp; entry-level jobs</strong></em> <br>
            Advertise your opportunities before the  fair. Include a statement in your posting  that you are attending the fair and encourage students to stop by  your booth.  </li>
          </ul>
          <ul>
            <li><em><strong>Schedule on-campus interviews</strong><br>
            </em>Reserve rooms at the UCC to interview  students you meet at the fair.  Choose a  date immediately following the fair or a few weeks later. Students can sign up for interviews  electronically through ePACK – or you can  sign up students  at the fair.  </li>
          </ul>
          <ul>
            <li><em><strong>Search for candidates to invite</strong></em> <br>
            Search the database of student resumes  before the fair. Identify students of  interest and invite them to stop by your booth. Provide information about your opportunities to help them make a  decision.     </li>
          </ul>
          <p><strong>Advertise  your visit</strong> <br>
          Let students know about your visit by sending announcements to academic  departments, student organizations and media.    </p>
          <ul type="square">
            <li><a href="http://www.ncsu.edu/academics/departments-a-z/index.php">Academic       departments</a></li>
            <li><a href="http://ncsu.orgsync.com/">Student       organizations</a> -- [Refine your search by college:  <a href="http://harvest.cals.ncsu.edu/academic/index.cfm?pageID=395">Agriculture &amp; Life Sciences</a>, <a href="http://design.ncsu.edu/student-organizations">Design</a>, <a href="http://ced.ncsu.edu/student_services/student_orgs.php">Education</a>, <a href="http://students.engr.ncsu.edu/">Engineering</a>, <a href="http://www.chass.ncsu.edu/students/student_orgs.php">Humanities &amp; Social Sciences</a>, <a href="http://poole.ncsu.edu/undergraduate/students/student-organizations/">Management</a>, <a href="http://cnr.ncsu.edu/future/student_orgs.php">Natural Resources</a>, <a href="http://www.pams.ncsu.edu/students/studorgs.php">Physical &amp; Mathematical Sciences</a>, <a href="http://www.tx.ncsu.edu/community/student-life/student-organizations.cfm">Textiles</a>.]  </li>
            <li><a href="http://ncsu.edu/sma/">Student media</a></li>
          </ul>
          <p><strong>Bring  an NC State intern or graduate </strong><br>
            When possible, bring a representative with ties to NC State.  You’ll be amazed at the connections they make with students, alumni and faculty.</p>
          <p><strong>Provide  handouts </strong><br>
            Students appreciate information to take with them -- descriptions of  internships and entry-level jobs – or a business card with a website providing  this information. </p>
          <p><strong>Consider  freshman &amp; sophomore level students</strong><br>
            These students have lots of questions about majors and careers and are  eager to test their choice with an internship or co-op.   Cultivate a future hire!</p>
          <p><strong>Consult  the UCC staff</strong><br>
            We’re here to help you experience success at NC State career fairs.  <br>
            919.515.2396, <a href="mailto:career_center@ncsu.edu">career_center@ncsu.edu</a>. </p>
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
