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

<body id="major">

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
        <div class="yui-g"> <div id="fadeshow1"></div> </div>
        <div id="secContent" class="yui-g">
          <h1>Career Information</h1>
              <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
                <ul>
                <li class="first"> <a href="#">Home</a> </li>
                <li><a href="./">Choosing A Major</a></li>
                <li class="last">Career Information</li>
              </ul>
              </div>
              </div>
              <p><a href="http://www.cfnc.org/">College Foundation of NC</a> <br>
                Find detailed information about careers, including a list of the fastest  growing careers in NC.</p>
              <p><a href="http://www.acinet.org/acinet/videos.asp?id=27,&nodeid=27">CareerOneStop</a><br>
                Find short video clips of hundreds of careers.  Search videos by career clusters, your  skills/abilities, or industry. </p>
              <p><a href="http://online.onetcenter.org/">O*Net</a> <br>
                Find detailed information about careers by type – green economy sector, in  demand industries, job family, STEM careers, and more.   </p>
              <p><a href="http://www.soicc.state.nc.us/soicc/info/briefs.htm">NC SOICC</a> <br>
                View career briefs including job descriptions, education required, salary  averages, work environment, and employment projections for the future. </p>
              <p><a href="http://www.bls.gov/oco/">Occupational Outlook Handbook</a> <br>
                Discover the nature of work, training required, job outlook for the future, and  salary averages for all careers.</p>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <div id="navTop" class="sideTop">
        <?php require_once('../includefiles/nav/majorNav.php');?>
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