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
<link href="../css/iFrameCalendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

$(document).ready(function(){
	
	('div#uccLogoHeader').hide();
	
});
</script>
</head>

<body>

<!-- NCSTATE Bar -->
<link rel="stylesheet" type="text/css" href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" media="screen" />
<iframe name="ncsu_branding_bar" id="ncsu_branding_bar" frameborder="0" src="http://www.ncsu.edu/brand/utility-bar/iframe/index.php?color=red&amp;inurl=ucc.lovettcreations.org&amp;center=yes" scrolling="no"> Your browser does not support inline frames or  
				is currently configured  not to display inline frames.<br />
Visit <a href="http://ncsu.edu/">http://www.ncsu.edu</a>. </iframe>
<!-- End of NCSTATE Bar -->

<div id="doc4">
  <div id="hd" role="navigation">
    <?php require_once('../includefiles/topMenu.php');?>
  </div>
  <div id="bd" role="main">
    <div id="yui-main">
      <div class="yui-b">
        <div class="yui-g"> <div id="fadeshow1"></div> </div>
        <div id="secContent" class="yui-g">
          <h1>Event Calendar</h1>
                        <div class="centerCalendar">
                          <p>
                          
<iframe src="https://ncsu-csm.symplicity.com/calendar/index.php" name="ePack" width="720" marginwidth="0" height="600" marginheight="0" align="left" scrolling="auto"></iframe>                          
                          </p>

  </div>
  <!-- End of bd -->
  <div id="ft" role="contentinfo">
    <?php require_once('../includefiles/footer.php');?>
  </div>
</div>
</body>
</html>