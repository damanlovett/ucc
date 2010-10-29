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
<iframe name="ncsu_branding_bar" id="ncsu_branding_bar" frameborder="0" src="http://www.ncsu.edu/brand/utility-bar/iframe/index.php?color=red&amp;inurl=ucc.lovettcreations.org&amp;center=yes" scrolling="no"> Your browser does not support inline frames or  
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
          <h1>Choose a Major</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium tellus id purus tempor in lobortis mi faucibus. Morbi in interdum augue. Proin aliquam ipsum id massa gravida at facilisis nulla mattis. Curabitur porttitor egestas erat, ut sagittis eros posuere vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla placerat fringilla est, non adipiscing nisi 
            <script type="text/javascript">
// BeginOAWidget_Instance_2142022: #dialog

				$(document).ready(function() {
    				$("#dialog").dialog({ 	draggable: 'true',
											resizable: 'true',
											title: 'Dialog Title',
											buttons: { "OK": function() { $(this).dialog("close"); }, "Cancel" : function() { $(this).dialog("close"); }} } );
  				});
		
// EndOAWidget_Instance_2142022
              </script> 
          </p>
          <div id="dialog" title="Dialog Title">Dialog Message Text</div>
          <ul>
            <li>Lorem ipsum dolor sit amet,</li>
            <li>Morbi in interdum augue</li>
            <li>Nulla placerat fringilla est</li>
            <li>Sed pretium tellus id purus tempor</li>
            <li>Etiam pulvinar metus in lorem</li>
            <li>Class aptent taciti sociosqu ad</li>
          </ul>
          <p>Etiam pulvinar metus in lorem posuere tristique. Ut pellentesque, dolor vel dictum pretium, tellus arcu luctus tellus, vel posuere mauris leo quis nisl. Nulla iaculis auctor porta. Vivamus sit amet mi sit amet .</p>
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