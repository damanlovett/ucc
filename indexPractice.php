<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>University Career Center</title>
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
<script>
$(document).ready(function(){

	// Slide divs	
	
		//Hide (Collapse) the toggle containers on load
		$("div.slideLogin").hide();
	  
		//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
		$("a#student_epack.trigger").click(function(){
			$("div.toggle_container_students").slideToggle("fast");
		});
		
		$("a#employer_epack.trigger").click(function(){
			$("div.toggle_container_employers").slideToggle("fast");
		});
		
})		
</script>
<?php require_once('includefiles/initHome.php'); ?>
<style>
.slideLogin {height:80px;
  margin-bottom:0;
  margin-left:15;
  margin-right:0;
  margin-top:15px;
  width:180px;}
div#navMedia, ul#navePack {
	margin: 15px 0 0 30px;
}
#featuredVideo .youtube-player {
	margin-right: 15px;
}
ul.contactInfo {
	margin:30px 0 0 0;
}
ul.contactInfo li {
	margin:0px;
	list-style-type: none;
	color:#666;
}
</style>
</head>
<body>

<!-- NCSTATE Bar -->
<link rel="stylesheet" type="text/css" href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" media="screen" />
<iframe name="ncsu_branding_bar" id="ncsu_branding_bar" frameborder="0" src="http://www.ncsu.edu/brand/utility-bar/iframe/index.php?color=red&amp;inurl=ncsu.edu/career&amp;center=yes" scrolling="no"> Your browser does not support inline frames or  
				is currently configured  not to display inline frames.<br />
Visit <a href="http://ncsu.edu/">http://www.ncsu.edu</a>. </iframe>
<!-- End of NCSTATE Bar -->

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
          <p>Figuring out what to do after college can be  intimidating, but planning early and getting help can make all the difference.  Take a  look at our 4 Year Career Plan. We'll get you moving and keep you going in the right direction! <br>
            [ <a href="major/plan.php"> more info</a> ]</p>
        </div>
        <div class="yui-g announcements">
          <h1 class="center">UCC Announcements</h1>
          <div class="yui-u first a1">
            <h2>Career ready!</h2>
            <p><a href="http://students.engr.ncsu.edu/careerfair/"></a>NC State ranked #19 in the nation for job recruits according to Wall Street Journal survey!<br>
              [ <a href="http://online.wsj.com/article/SB10001424052748704554104575435563989873060.html">more info</a> ]</p>
            
          </div>
          <div class="yui-u a2">
            <h2>December grads -- <em>what's next?</em></h2>
            <p>Let us know your plans!   Job? Grad school? Still deciding? The 5 min. survey is now open!<br>
              [ <a href="http://www2.acs.ncsu.edu/UPA/survey/future_plans.htm">more info</a> ]</p>
          </div>
        </div>
        
        
        <div id="featuredVideo" class="yui-g announcements">
            <h1 class="major">Featured Videos</h1>
            <iframe title="YouTube video player" class="youtube-player" type="text/html" width="200" height="180" src="http://www.youtube.com/embed/Gjv0fOuzTMQ" frameborder="0"></iframe>
            <iframe title="YouTube video player" class="youtube-player" type="text/html" width="200" height="180" src="http://www.youtube.com/embed/T1WwkOVaUxU" frameborder="0"></iframe>
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
                    <ul id="navePack" class="login1"> 
<li class="first"><a href="#" id="student_epack" class="trigger">Student</a></li> 
<li class="second"><a href="#" id="employer_epack" class="trigger">Employer</a></li> 
</ul>
          <div class="toggle_container_students slideLogin">
          
<form method="post" action="https://ncsu-csm.symplicity.com/js_warning.php" name="loginfom">
<input type="hidden" name="skip_cookie_check" value="1"/>
<div class="label">Username</div>
<input type="text" name="username" class="formtext" value="">
<div class="label">Password</div>

<input type="password" name="password" password class="formtext">
<input name="submit2" type="submit" class="button" onClick='this.form.action="https://ncsu-csm.symplicity.com/students/index.php"' value=" go ">
</form>
</div>

<div class="toggle_container_employers slideLogin">
<form method="post" action="https://ncsu-csm.symplicity.com/js_warning.php" name="loginfom">
<input type="hidden" name="skip_cookie_check" value="1"/>
<div class="label">Username</div>

<input type="text" name="username" class="formtext" value="">
<div class="label">Password</div>

<input type="password" name="password" password class="formtext">
<input name="submit2" type="submit" class="button" onClick='this.form.action="https://ncsu-csm.symplicity.com/employers/index.php"' value=" go ">
</form>
</div>
          <div id="navMedia" class="sMedia">
            <?php require_once('includefiles/socialmedia.php');?>
          </div>
          <!-- <div id="datepicker"><a href="http://ncsu.edu">calendar</a></div> -->
          <div id="datepicker"></div>
          <a href="https://ncsu-csm.symplicity.com/calendar/" title="Events List" target="_blank" id="datepickerLink">&raquo; Click Here For Events List</a> </div>
      </div>
    </div>
  </div>
  <div id="ft" role="contentinfo">
    <?php require_once('includefiles/footer.php');?>
  </div>
</div>
</body>
</html>