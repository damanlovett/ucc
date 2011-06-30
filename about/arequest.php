<!DOCTYPE HTML>

<head>
<meta charset="UTF-8">
<title>University Career Center</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/base/base-min.css">
<link rel="stylesheet" href="../css/uccdefaultNAV.css" type="text/css">
<script src="../jquery/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../jquery/js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script src="../jquery/js/jquery-dateplustimepicker.min.js" type="text/javascript"></script>

<link href="../jquery/css/ucc/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../jquery/css/jquery-dateplustimepicker.min.css">


<?php require_once('../includefiles/init.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
label {
   color: #900;
   display:block;
   margin-right: .5em;
   width:200px;
}
input { display: inline; margin-bottom:1.1em;}
input[type=radio] { display:inline; margin-bottom:.2; margin-top:5px;}
fieldset { margin-top:15px; border: 1px #ccc solid; padding:10px 10px 10px 30px; background-color:#fff;}
legend { font-size: 1.2em; padding: 3px; font-weight:bold; margin-bottom:10px; padding-right:-10px;}
</style></head>
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
        <div class="yui-g"><div id="fadeshow1"></div> </div>
        <div id="secContent" class="yui-g">
          <h1>CAREER AMBASSADORS</h1>
          <div class="breadCrumbHolder module">
            <div id="breadCrumb" class="breadCrumb module">
              <ul>
                <li class="first"><a href="/career/">Home</a></li>
                <li> <a href="/career/about">About The Career Center</a> </li>
                <li> <a href="/career/about/ambassadors.php">Ambassadors</a> </li>
                <li class="last">Request a Program</li>
              </ul>
            </div>
          </div>
         <p>Thank you for your interest in our Career Ambassador programs! We look forward to working with you to make your event fun and informative for students. To ensure that your outreach program is as successful as possible, please advertise your event at least 3-6 days prior. We like an audience! Please ensure that at least 5 students will be in attendance so that it is a good use of our ambassadors time. To request an program or workshop for your organization, please submit the following form. You will receive a response/ confirmation within 2 business days.  </p> 
          
          <form action="" method="get">
            <fieldset>
             <legend>Group / Organization Information</legend>
             <label for="org_name">Organization Name:</label><br />
             <input name="org_name" type="text" id="org_name" size="40"><br />
            </fieldset>
            <fieldset>
             <legend>Contact Information</legend>
             <label for="first_name">First Name:</label><input name="first_name" id="first_name" type="text" size="40"><br />
             <label for="last_name">Last Name:</label><input name="last_name" id="last_name" type="text" size="40"><br />
            <hr />
             <label for="phone">Phone:</label><input name="phone" id="phone" type="text" size="40"><br />
             <label for="email">E-mail:</label><input name="email" id="email" type="text" size="40"><br />
            </fieldset>
            <fieldset>
             <legend>Date of Presentation</legend>
             <label for="location">Location:</label><input name="location" id="location" type="text" size="40"><br />
             <label for="floatLeft withAltTime-dateplustimepicker">Date:</label>
             <input type="text" id="withAltTime-dateplustimepicker" name="withAltTime-dateplustimepicker" />
             <label for="withAltTime-dateplustimepicker-alt">Time:</label>
             <input type="text" id="withAltTime-dateplustimepicker-alt" name="withAltTime-dateplustimepicker-alt" />
            </fieldset>
            <fieldset>
             <legend>Alternate Date of presentation</legend>
             <label for="location2">Location:</label><input name="location2" id="location2" type="text" size="40"><br />
             <label for="floatLeft withAltTime-dateplustimepicker2">Date:</label>
             <input type="text" id="withAltTime-dateplustimepicker2" name="withAltTime-dateplustimepicker2" />
             <label for="withAltTime-dateplustimepicker-alt2">Time:</label>
             <input type="text" id="withAltTime-dateplustimepicker-alt2" name="withAltTime-dateplustimepicker-alt2" />
            </fieldset>
            <fieldset>
             <legend>Presentation Information</legend>
             <label for="av">Is there a laptop &amp; LCD projecter available in the presentation room?</label>
             <input type="radio" name="av" value="Yes">Yes
             <input type="radio" name="av" value="No">No<br />
             <label for="attending">How many are attending?</label>
             <input name="attending" id="attending" type="text" size="5"><br />
             <label for="topic">Which topic do you want covered:</label>
             <select name="topic" id="topic">
               <option value="Intro to UCC Services">Intro to UCC Services</option>
               <option value="Career Fair Prep">Career Fair Prep</option>
               <option value="Resume Writing">Resume Writing</option>
               <option value="Interview Prep">Interview Prep</option>
               <option value="ePACK">ePACK</option>
             </select>
            </fieldset> 
            <fieldset>
             <legend>Addtional Comments</legend>
             <label for="org_address">Provide additional information about the presentation.</label><br />
             <textarea name="org_address" cols="60" rows="10" id="org_address" ></textarea>
            </fieldset>
          </form>
          
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
