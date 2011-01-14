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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 

<script>
$(document).ready(function(){

	// Slide divs	
	
		//Hide (Collapse) the toggle containers on load
		$("div.toggle_container_students").hide();
		$(".toggle_container_employers").hide(); 
	  
		//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
		$("a#student_epack.trigger").click(function(){
			$("div.toggle_container_students").slideToggle("slow");
		});
		
		$("a#employer_epack.trigger").click(function(){
			$("div.toggle_container_employers").slideToggle("slow");
		});
		
})		
</script>
 

</head>

<body>
<a href="#" id="student_epack" class="trigger">Students</a>
<a href="#" id="employer_epack" class="trigger">Employers</a>

<div class="toggle_container_students">
<form method="post" action="https://ncsu-csm.symplicity.com/js_warning.php" name="loginfom">
<input type="hidden" name="skip_cookie_check" value="1"/>
<input type="text" name="username" class="formtext" value="">
<input type="password" name="password" password class="formtext">
<input name="submit2" type="submit" class="button" onClick='this.form.action="https://ncsu-csm.symplicity.com/students/index.php"' value=" go ">
</form>
</div>

<div class="toggle_container_employers">
<form method="post" action="https://ncsu-csm.symplicity.com/js_warning.php" name="loginfom">
<input type="hidden" name="skip_cookie_check" value="1"/>
<input type="text" name="username" class="formtext" value="">
<input type="password" name="password" password class="formtext">
<input name="submit2" type="submit" class="button" onClick='this.form.action="https://ncsu-csm.symplicity.com/employers/index.php"' value=" go ">
</form>
</div>
<p><BR>
</p>
</body>
</html>