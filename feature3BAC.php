<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="contentslider.css" />

<script type="text/javascript" src="contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
</head>

<body>
<h2>Example 1</h2>

<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider1" class="sliderwrapper">

<div class="contentdiv">
<img src="/img/homeheader/ambassadorprogram.jpg" alt="img" width="977" height="202" border="0" usemap="#Map2">
<map name="map1">
  <area shape="rect" coords="643,114,737,139" href="#" alt="Ambassador helping student">
</map>
<p></p><a href="javascript:featuredcontentslider.jumpTo('slider1', 3)">Go to 3rd slide</a></p>
</div>

<div class="contentdiv">
<img src="img/homeheader/careerfair.jpg" width="977" height="202" alt="img"> </div>

<div class="contentdiv">
<img src="img/homeheader/connected.jpg" width="977" height="202" alt="img">
<map name="Map">
  <area shape="rect" coords="584,101,689,122" href="major/index.php">
</map>
</div>

</div>

<div id="paginate-slider1" class="pagination">

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: ["<img src='img/homeheader/ambassadorprogramTHUMB.jpg' alt='img'>","<img src='img/homeheader/careerfairTHUMB.jpg' alt='img'>","<img src='img/homeheader/connectedTHUMB.jpg' alt='img'>"],  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>




<br />
<h2>Example 2, Pagination links from markup</h2>

<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider2" class="sliderwrapper">

<div class="contentdiv">
Content 1 Here.
</div>

<div class="contentdiv">
Content 2 Here. <br />
<p></p><a href="javascript:featuredcontentslider.jumpTo('slider2', 1)">Go back to 1st slide</a></p>
</div>

<div class="contentdiv">
Content 3 Here.
</div>

</div>

<div id="paginate-slider2" class="pagination">

<a href="#" class="toc">First Page</a> <a href="#" class="toc anotherclass">Second Page</a> <a href="#" class="toc">Third Page</a> <a href="#" class="prev" style="margin-left: 10px"><</a> <a href="#" class="next">></a>

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider2",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [false, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>
</body>
</html>