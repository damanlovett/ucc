<!DOCTYPE html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>University Career Center  </title>
	
   
<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">

   <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/base/base-min.css">
   <link rel="stylesheet" href="css/fonts.css" type="text/css">
   <link href="jquery/css/ucc/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="contentslider.css" />
   <link rel="stylesheet" href="css/uccdefaultNAV.css" type="text/css">
<script type="text/javascript" src="contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
<script src="jquery/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="jquery/js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script src="jquery/js/homeCalendar.js" type="text/javascript"></script>
<?php require_once('includefiles/initHome.php'); ?>
<style>

	div#navMedia, ul#navePack {margin: 15px 0 0 30px;}
</style>


</head>
<body>
<link rel="stylesheet" type="text/css" href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" media="screen" /> 
<iframe name="ncsu_branding_bar" id="ncsu_branding_bar" frameborder="0" src="http://www.ncsu.edu/brand/utility-bar/iframe/index.php?color=red&amp;inurl=ncsu.edu/career&amp;center=yes" scrolling="no">  
Your browser does not support inline frames or  
is currently configured  not to display inline frames.<br /> 
Visit <a href="http://ncsu.edu/">http://www.ncsu.edu</a>.
</iframe>

<div id="doc4" class="yui-t7">

<div id="hd" role="navigation">
   
	<?php require_once('includefiles/topMenuHeader.php');?>

   
  </div>
   <div id="bd" role="main">
	<div id="headlines" class="yui-g">
		<?php require_once('feature3.php'); ?>
	</div>
<div id="mainContent" class="yui-g">
    <div id="articles" class="yui-u first">
	<div class="articles">
    <!--  major fairs web employers center -->
    
	<h1 class="major">Featured Article</h1>
      <p><img src="img/imFeaturedArticle.jpg" alt="" name="imFeaturedArticle" width="100" height="100" border="0" id="imgFeaturedArticle">
      <h2>YOUR  CAREER STARTS NOW!</h2>
	  <p>Figuring out what to do after college can be  intimidating, but planning early and getting help can make all the difference.  Take a  look at our 4 Year Career Plan. We'll get you moving and keep you going in the right direction! Your career starts now.<br>
	    [ <a href="major/plan.php"> more info</a> ]</p>
   	</div>
	<div class="yui-g announcements">
		<h1 class="center">UCC Announcements</h1>
		<div class="yui-u first a1">
		<h2>NC State graduates ranked 19th</h2>
        <p><a href="http://students.engr.ncsu.edu/careerfair/"></a>Recruiters from the nation's largest employers were surveyed by the Wall  Street Journal.  <br>
          [ <a href="http://online.wsj.com/article/SB10001424052748704554104575435563989873060.html">more info</a> ]</p>
		</div>
		<div class="yui-u a2">
		<h2>Spring recruiting begins</h2>
        <p> Looking for an internship or <br>
          entry-level job? Get started with ePACK.<br>
          [ <a href="experience/ePACK/index.php">more info</a> ]</p>
        </div>
	</div>
	
	</div>
    <div class="yui-g">
        <div class="yui-u first twitterfeed">
			<h2><img src="img/imgHomeTwitter.jpg" alt="Twitter Header"></h2>
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script src="includefiles/js/widgetFBUCC.js"></script>	
			
			
		</div>
        <div class="yui-u rtNav">
        
      <?php require_once('includefiles/epacklogin.php'); ?>
		
		<div id="navMedia" class="sMedia">
		<?php require_once('includefiles/socialmedia.php');?>		
		</div>
		<!-- <div id="datepicker"><a href="http://ncsu.edu">calendar</a></div> -->
		<div id="datepicker"></div>
        <a href="https://ncsu-csm.symplicity.com/calendar/" title="Calendar of Events" target="_blank" id="datepickerLink">Calendar of Events</a>
		</div>
    </div>
</div>

	</div>
	<div id="ft" role="contentinfo">
    <?php require_once('includefiles/footer.php');?>
    </div>
</div>
</body>
</html>
