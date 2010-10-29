<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
	<title>Slide show</title>
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
Content 1 Here. <br />
<p></p><a href="javascript:featuredcontentslider.jumpTo('slider1', 3)">Go to 3rd slide</a></p>
</div>

<div class="contentdiv">
Content 2 Here.
</div>

<div class="contentdiv">
Content 3 Here.
</div>

</div>

<div id="paginate-slider1" class="pagination">

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>
<style type="text/css"> 
/*Additional CSS for demos*/
 
#slider1, #slider3{
width: 350px;
height: 230px;
}
 
#slider1 .contentdiv, #slider3 .contentdiv{
width: 340px;
}
 
#paginate-slider1, #paginate-slider3{
width: 350px;
}
 
#slider2, #slider4{
border-color: darkred;
margin-left: 15px;
height: 280px
}
 
 
#paginate-slider2, #paginate-slider4{
background-color: darkred;
border-color: darkred;
margin-left: 15px;
}
 
 
#paginate-slider4 a img{
width: 80px;
height: 60px;
border: 2px solid gray;
margin-top: 5px;
}
 
#paginate-slider2 a:hover, #paginate-slider2 a.selected{
background-color: yellow;
}
 
#paginate-slider4 a img:hover, #paginate-slider4 a.selected img{
border: 2px solid red;
}
 
</style> 
 
</head> 
 
<body> 
 
<div id="toprightdiv"> 
 
<div id="toprightdivbox"> 
 
<form id="topform" method="get" action="http://www.dynamicdrive.com/search/search.php"> 
<input type="text" name="zoom_query" id="zoom_query" size="20" class="zoom_searchbox topsearchbox" /> 
<input type="submit" value="Submit" class="zoom_button topformbutton" /> 
<input name="zoom_per_page" id="zoom_per_page" type="hidden" value="10" /> 
<input name="zoom_and" id="zoom_and" type="hidden" value="1" /> 
<input type="hidden" name="zoom_sort" value="0" /> 
</form> 
 
<div style="margin-top: 3px"><a href="http://www.dynamicdrive.com/submitscript.htm">Submit</a> <a href="http://www.dynamicdrive.com/faqs.htm">FAQs</a> <a href="http://www.dynamicdrive.com/award/">Awards</a> <a href="http://www.dynamicdrive.com/notice.htm">Usage Terms</a> <a href="http://www.dynamicdrive.com/contact.htm">Contact</a></div> 
 
</div> 
 
</div> 
 
<a href="http://www.dynamicdrive.com" title="Dynamic Drive- Award winning DHTML and JavaScript"><img src="http://www.dynamicdrive.com/ddincludes/logo.gif" border="0" /></a> 
 
	<div id="ddtoptabs"> 
		<ul> 
			<li style="margin-left: 1px"><a href="http://www.dynamicdrive.com" title="Home"><span>Home</span></a></li> 
			<li><a href="http://www.dynamicdrive.com/new.htm" title="New"><span>New</span></a></li> 
			<li><a href="http://www.dynamicdrive.com/revised.htm" title="Revised"><span>Revised</span></a></li> 
			<li><a href="http://tools.dynamicdrive.com" title="Tools"><span>Tools</span></a></li>	
			<li><a href="http://www.dynamicdrive.com/forums/" title="DHTML Forums"><span>Forums</span></a></li> 
			<li id="csslibrarytab"><a href="http://www.dynamicdrive.com/style/" title="CSS Library"><span>CSS Library</span></a></li>	
		</ul> 
	</div> 
 
 
	<div id="ddtoptabsline"><img src="http://www.dynamicdrive.com/spacer.gif" /></div> 
 
<center><script type="text/javascript" src="http://www.dynamicdrive.com/ddincludes/adbanner.js"></script></center> 
 
<p id="pathlinks"><a href="http://www.dynamicdrive.com/">Home</a> <img border="0" src="../ddincludes/arrow2.gif" width="8" height="10" />                                                        
<a href="http://www.dynamicdrive.com/dynamicindex17/">Dynamic Content</a> <img border="0" src="../ddincludes/arrow2.gif" width="8" height="10" />                                                        Here</p> 
 
<table id="maintable" border="0" width="100%" cellspacing="0" cellpadding="0"> 
  <tr> 
    <td id="leftbar" valign="top"> 
			<div class="headers">Categories</div> 
			<ul class="categorylinks"> 
				<li id="c7"><a href="http://www.dynamicdrive.com/dynamicindex7/" >Calendars</a></li> 
				<li id="c6"><a href="http://www.dynamicdrive.com/dynamicindex6/">Date &amp; Time</a></li> 
				<li id="c3"><a href="http://www.dynamicdrive.com/dynamicindex3/">Document Effects</a></li> 
				<li id="c17"><a href="http://www.dynamicdrive.com/dynamicindex17/">Dynamic Content</a></li> 
				<li id="c16"><a href="http://www.dynamicdrive.com/dynamicindex16/">Form Effects</a></li> 
				<li id="c12"><a href="http://www.dynamicdrive.com/dynamicindex12/">Games</a></li> 
				<li id="c4"><a href="http://www.dynamicdrive.com/dynamicindex4/">Image Effects</a></li>		
				<li id="c5"><a href="http://www.dynamicdrive.com/dynamicindex5/">Links &amp; Tooltips</a></li>			
				<li id="c1"><a href="http://www.dynamicdrive.com/dynamicindex1/">Menus &amp; Navigation</a></li> 
				<li id="c13"><a href="http://www.dynamicdrive.com/dynamicindex13/">Mouse and Cursor</a></li>			
				<li id="c2"><a href="http://www.dynamicdrive.com/dynamicindex2/">Scrollers</a></li> 
				<li id="c10"><a href="http://www.dynamicdrive.com/dynamicindex10/">Text Animations</a></li> 
				<li id="c9"><a href="http://www.dynamicdrive.com/dynamicindex9/">User/System Preference</a></li> 
				<li id="c8"><a href="http://www.dynamicdrive.com/dynamicindex8/">Window and Frames</a></li> 
				<li id="c11"><a href="http://www.dynamicdrive.com/dynamicindex11/">Other</a></li> 
				<li id="c18"><a href="http://www.dynamicdrive.com/dynamicindex18/">XML and RSS</a></li> 
			</ul> 
 
			<div class="headers">Partners</div> 
			<div style="margin: 8px 0 0 2px"> 
			<div><a href="http://www.daniweb.com/forums/forum31.html" target="_partner" style="color: #449805; font-weight:bold">DaniWeb Web Dev Community</a></div> 
			<div>DaniWeb is an exciting community for web developers, Internet marketers, and technology enthusiasts.</div> 
			<div style="margin: 10px 0; text-align: center"><a href="http://www.daniweb.com/forums/forum31.html" target="_partner"><img src="http://www.dynamicdrive.com/daniweb.gif" style="width:125px; height:24px; border:0;" title="Daniweb" /></a></div> 
			</div> 
 
 
			<div class="headers" style="clear:both">Other Sections</div> 
			<ul class="categorylinks diffpointer"> 
				<li><a href="http://www.dynamicdrive.com/forums/">Script Forums</a></li> 
				<li><a href="http://www.dynamicdrive.com/recommendit/">Recommend Us</a></li> 
				<li><a href="http://www.dynamicdrive.com/notice.htm">Usage Terms</a></li> 
				<li><a href="http://www.javascriptkit.com">Free JavaScripts</a></li>		
			</ul> 
 
<div class="headers" style="margin: 8px 0;">Sweet Ads</div> 
 
<div style="text-align:center"> 
 
<script type="text/javascript"> 
Vertical1437 = false;
ShowAdHereBanner1437 = false;
RepeatAll1437 = false;
NoFollowAll1437 = false;
BannerStyles1437 = new Array(
	"a{display:block;font-size:11px;color:#888;font-family:verdana,sans-serif;margin:0 4px 10px 0;text-align:center;text-decoration:none;overflow:hidden;}",
	"img{border:0;clear:right;}",
	"a.adhere{color:#666;font-weight:bold;font-size:12px;border:1px solid #ccc;background:#e7e7e7;text-align:center;}",
	"a.adhere:hover{border:1px solid #999;background:#ddd;color:#333;}"
);
 
document.write(unescape("%3Cscript src='"+document.location.protocol+"//s3.buysellads.com/1437/1437.js?v="+Date.parse(new Date())+"' type='text/javascript'%3E%3C/script%3E"));
</script> 
 
</div> 
		
    <div class="headers">Compatibility</div> 
<ul class="menuitems"> 
<li style="border-bottom: 1px solid #ececec;"><b>IE5+:</b> IE 5 and above</li> 
<li style="border-bottom: 1px solid #ececec;"><b>FF1+:</b> Firefox 1.0+. NS6+ and FF beta are 
  assumed as well.</li> 
<li style="border-bottom: 1px solid #ececec;"><b>Opr7+:</b> Opera 7 and above.</li> 
 
</ul> 
 
<div> 
 
Bookmark <b style="color:navy"><script type="text/javascript">document.write(ddscripttitle)</script></b> online:<br /> 
<ul style="margin-top: 5px; font-size: 90%; margin-left: 0; padding-left: 18px"><li><a href="http://www.dynamicdrive.com/bookmark.php?site=deli" onClick="return jsenabledmark('deli')" rel="nofollow">Bookmark</a> to del.icio.us</li> 
<li><a href="http://www.dynamicdrive.com/bookmark.php?site=furl" onClick="return jsenabledmark('furl')" rel="nofollow">Bookmark</a> to Furl.net</li> 
</ul> 
 
</div> 
 
 
<p align="center"> 
<!-- AddThis Button BEGIN --> 
<script type="text/javascript">addthis_pub  = 'georgeuser';</script> 
<a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s9.addthis.com/button2-bm.png" width="160" height="24" border="0" alt="" /></a><script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script> 
<!-- AddThis Button END --> 
</p> 
 
 
 
    </td> 
    <td id="spacertd"> 
<img src="../spacer.gif" id="spacergif"> 
    </td> 
    <td valign="top" id="contentarea"> 
    
<script type="text/javascript"> 
if (showincontentheader)
document.write('<div id="topbanner" align="left">'+revised_ranban[ran_num]+'</div>')
</script> 
 
<div id="scriptheader"><span class="compatlist">NS6+ IE5+ Opera 7+</span> 
  <h3>Featured Content Slider v2.4</h3></div> 
<div id="scriptheaderFoot"><span class="rightit"></span> <b><!--webbot bot="HTMLMarkup" startspan --><form class="navselectform"> 
<select name="example" size="1" onChange="pagenavselect_dd(this)"> 
<option value="featuredcontentslider.htm">Script Index Page</option> 
<option value="contentslider_suppliment.htm">Three ways to output the pagination interface- in detail</option> 
 
 
</select> 
</form> 
<!--webbot bot="HTMLMarkup" endspan i-checksum="7113" -->Author:</b>  
  <span id="ddauthor">Dynamic Drive</span></div> 
 
      <p align="left"><b>July 11th, 08'</b>- Updated script from v2.3 to v2.4. 
		See top of <a href="contentslider.js">contentslider.js</a> for changes.</p> 
<p align="left"><strong>Description: </strong>Featured Content Slider 
      makes a slideshow out of arbitrary content on your page, so users can 
      manually select a content to see or have them rotated automatically. 
      Each content is defined simply inline on the page as regular HTML, or 
altogether inside a single external file and fetched via Ajax instead. Where 
this script shines is the versatile pagination links interface, which can be 
customized in a variety of ways. You may have such a script on the frontpage of sites such as
<a href="http://www.rottentomatoes.com">Rottentomatoes</a> and
      <a href="http://www.gamespot.com">Gamespot</a>, though the difference is 
that Featured Content Slider is Flash free!</p> 
<p align="left">And with the introduction out of the way, here's a listing of 
<b>Featured Content Slider v2.0'</b>s features:</p> 
<ul> 
  <li>Supports two ways of embedding the contents to feature- plain HTML 
	contained inside DIV tags, or altogether in a single external file on your 
	server, then fetched via Ajax.</li> 
  <li> 
  &quot;Manual&quot; or &quot;auto&quot; display mode- For 
  the later, the slider automatically rotates the contents until the user 
  explicitly selects a content to view (clicks anywhere inside Featured Content 
	slider).</li> 
	<li> 
  Optional fade effect to be applied each time the content changes.</li> 
  <li> 
  Extremely customizable pagination links. You can either have the script 
	automatically generate them, or manually define arbitrary links that with a 
	specific CSS class name added, tells the script that this is a pagination 
	link.</li> 
	<li> 
  Specify whether the contents should be revealed &quot;click&quot; or &quot;mouseover&quot; over 
	the pagination links. Default is former. <font color="#FF0000">v2.3 feature</font></li> 
  <li> 
  Call the function <code>featuredcontentslider.jumpTo()</code> anywhere on your page to 
	<a href="#jumpto">jump 
	to a particular slide</a> within a particular Content Slider instance.
	<font color="#FF0000">v2.3 feature</font></li> 
	<li> 
  Ability to select a particular slide when the page first loads using a
	<a href="#jumpto2">URL parameter</a> (ie: m<code>ypage.htm?myslider=4</code>).
	<font color="#FF0000">v2.4 feature</font></li> 
	<li> 
  Cookies are used to remember and recall the last content viewed by the user 
	when they return to the page.</li> 
  <li> 
  Supports a custom &quot;<code>onChange</code>&quot; event handler that is fired each 
	time the script changes slides. Use it to run custom code based on the 
	current and previous slides' indices relative to its peers.</li> 
</ul> 
<p align="left">Nifty!</p> 
<p align="left"><b>Demos:</b></p> 
<table border="0" cellspacing="0" cellpadding="0"> 
  <tr> 
    <td valign="top" width="450"> 
    <!--webbot bot="HTMLMarkup" startspan --><div id="slider1" class="sliderwrapper"> 
 
<div class="contentdiv"> 
<div><a href="http://www.dynamicdrive.com/style/csslibrary/item/suckertree-menu-horizontal/">SuckerTree Menu (h)</a></div> 
<img src="http://www.dynamicdrive.com/cssexamples/suckertree2.gif" border="1" style="float: right; margin: 0 0 1px 5px" /> 
SuckerTree Horizontal Menu is a CSS and DOM hybrid menu that's list based and supports multiple levels of sub menus.
</div> 
 
<div class="contentdiv"> 
<div><a href="http://www.dynamicdrive.com/style/csslibrary/item/half-moon-tab-menu/">Half moon tab menu</a></div> 
<img src="http://www.dynamicdrive.com/cssexamples/halfmoon.gif" style="float: right; margin-left: 5px" border="1" /> 
We named this CSS tab menu "Half Moon" based on its look. The menu uses a transparent background image for each tab item to create a right round edge.
</div> 
 
<div class="contentdiv"> 
<div><a href="http://www.dynamicdrive.com/style/csslibrary/item/slanted-divider-menu/">Slanted Divider Menu</a></div> 
<img src="http://www.dynamicdrive.com/cssexamples/slantedmenu.gif" style="float: right; margin-left: 5px" border="1" /> 
This is an elegant CSS menu bar that uses a transparent "slanted" image to act as a divider and separate each menu item.
</div> 
 
</div> 
 
<div class="pagination p1" id="paginate-slider1"></div> 
 
<script type="text/javascript"> 
 
featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	enablefade: [false, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})
 
</script> 
 
<!--webbot bot="HTMLMarkup" endspan i-checksum="14085" --><ul> 
		<li>Auto display mode (until you click on a pagination link).</li> 
		<li>Contents defined inline on the page.</li> 
		<li>Fade effect disabled.</li> 
		<li>Pagination links automatically generated as sequential numbers.</li> 
	</ul> 
	<hr size="1"> 
	<p>&nbsp;</td> 
    <td valign="top"> 
    <!--webbot bot="HTMLMarkup" startspan --><div id="slider2" class="sliderwrapper"> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox2/horses.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox/pine.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox/ocean.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox2/sushi2.jpg) center left no-repeat"> 
</div> 
 
</div> 
 
<div class="pagination" id="paginate-slider2"></div> 
 
<script type="text/javascript"> 
 
featuredcontentslider.init({
	id: "slider2",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: ["horses", "scenery", "ocean", "sushi"],  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	enablefade: [true, 0.1],  //[true/false, fadedegree]
	autorotate: [false, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})
 
</script><!--webbot bot="HTMLMarkup" endspan i-checksum="30567" --><ul> 
		<li>Manual Mode</li> 
		<li>Contents defined inline on the page.</li> 
		<li>Pagination links automatically generated, with each label user 
		defined.</li> 
		<li>&quot;Previous&quot; button hidden.</li> 
		<li>Fade transition slowed down.</li> 
		<li>Reload page and <a href="featuredcontentslider.htm?slider2=2">have 
		the 2nd slide loaded by default using a URL parameter</a></li> 
	</ul> 
	<hr size="1"> 
	<p>&nbsp;</td> 
  </tr> 
  <tr> 
    <td valign="top" width="450"> 
    <!--webbot bot="HTMLMarkup" startspan --><div id="slider3" class="sliderwrapper"> 
 
</div> 
 
<div class="pagination p1" id="paginate-slider3"> 
<a href="http://www.dynamicdrive.com">Home</a> <a href="#" class="toc">Slide 1</a> <a href="#" class="toc someclass">Slide 2</a> <a href="#" class="toc someotheclass">Slide 3</a> <a href="#" class="next">&gt;</a> 
</div> 
 
<script type="text/javascript"> 
 
featuredcontentslider.init({
	id: "slider3",  //id of main slider DIV
	contentsource: ["ajax", "fcs.htm"],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [false, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){
		 //do nothing
	}
})
 
</script> 
 
<!--webbot bot="HTMLMarkup" endspan i-checksum="21419" --><ul> 
		<li>Manual Mode</li> 
		<li>Contents fetched <b>via Ajax</b> from an external file (<a href="fcs.htm">fcs.htm</a>).</li> 
		<li>Pagination links created using HTML <b>markup</b> within pagination 
		DIV.</li> 
	</ul> 
	</td> 
    <td valign="top"> 
    <!--webbot bot="HTMLMarkup" startspan --><div id="slider4" class="sliderwrapper"> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox2/horses.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox/pine.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox/ocean.jpg) center left no-repeat"> 
</div> 
 
<div class="contentdiv" style="background: url(../dynamicindex4/lightbox2/sushi2.jpg) center left no-repeat"> 
</div> 
 
</div> 
 
<div id="paginate-slider4" style="background:white"> 
 
<a href="http://codingforums.com" class="toc" style="margin-left: 35px"><img src="http://www.dynamicdrive.com/dynamicindex4/lightbox2/horses_thumb.jpg" /></a> <a href="http://google.com" class="toc someclass"><img src="http://www.dynamicdrive.com/dynamicindex17/dynamicindex4/lightbox/pine_thumb.jpg" /></a> <a href="http://www.cssdrive.com" class="toc someotheclass"><img src="../dynamicindex4/lightbox/ocean_thumb.jpg" /></a> <a href="http://javascriptkit.com" class="toc someotheclass"><img src="/dynamicindex4/lightbox2/sushi2_thumb.jpg" /></a> 
 
</div> 
 
<script type="text/javascript"> 
 
featuredcontentslider.init({
	id: "slider4",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.1],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})
 
</script><!--webbot bot="HTMLMarkup" endspan i-checksum="36125" --><ul> 
		<li>Auto display mode (until you mouse over pagination links or click on 
		the slider)</li> 
		<li>Pagination links created using HTML <b>markup</b> within pagination 
		DIV.</li> 
		<li>Contents revealed &quot;<code>mouseover</code>&quot; instead of the default &quot;<code>click</code>&quot;.</li> 
	</ul> 
	</td> 
  </tr> 
</table> 
    <hr size="1" align="center"> 
    <p><strong>Directions: </strong> 
    <a target="win2" href="featuredcontentslider_dev.htm"><img src="../dview.gif" width="115" height="19"

    alt="Developer's View" border="0"></a> </p> 
      <p align="left"><strong>Step 1:</strong> Insert the following
      code in the HEAD section of your page</p> 
    <form><p> 
<a class="selectall" href="javascript:highlight(1)">Select All</a><br> 
      <textarea class="codecontainer" rows="8" name="S1" cols="45" wrap="virtual"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
 
<link rel="stylesheet" type="text/css" href="contentslider.css" />
 
<script type="text/javascript" src="contentslider.js">
 
/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
 
</script></textarea></p> 
    </form> 
      <p align="left">The code above references two external files plus an Ajax 
      image, which you 
      need to download below (right click/ select &quot;Save As&quot;):</p> 
<ol> 
  <li><a href="contentslider.css">contentslider.css</a></li> 
  <li><a href="contentslider.js">contentslider.js</a></li> 
  <li><a href="loading.gif">loading.gif</a></li> 
</ol> 
<p align="left">By default, upload these files into the same directory as 
where your webpage resides.</p> 
<p align="left"><b>Step 2:</b> Insert the below sample code into the BODY 
      section of your page:</p> 
    <form><p> 
<a class="selectall" href="javascript:highlight(2)">Select All</a><br> 
      <textarea class="codecontainer" rows="8" name="S2" cols="45" wrap="virtual"><h2>Example 1</h2>
 
<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->
 
<div id="slider1" class="sliderwrapper">
 
<div class="contentdiv">
Content 1 Here. <br />
<p></p><a href="javascript:featuredcontentslider.jumpTo('slider1', 3)">Go to 3rd slide</a></p>
</div>
 
<div class="contentdiv">
Content 2 Here.
</div>
 
<div class="contentdiv">
Content 3 Here.
</div>
 
</div>
 
<div id="paginate-slider1" class="pagination">
 
</div>
 
<script type="text/javascript">
 
featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
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
 
<a href="#" class="toc">First Page</a> <a href="#" class="toc anotherclass">Second Page</a> <a href="#" class="toc">Third Page</a> <a href="#" class="prev" style="margin-left: 10px">&lt;</a> <a href="#" class="next">&gt;</a>
 
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
 
</script></textarea></p> 
    </form> 
      <p align="left">That's it! Continue reading for some helpful information.</p> 
<h3 align="left"> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> 
HTML and CSS Structure</h3> 
<p align="left">The code of Step 2 illustrates the basic setup of a Featured 
Content Slider:</p> 
<div align="left"> 
  <p class="codehighlight">&lt;div id=&quot;<font color="#FF0000">slider1</font>&quot; 
	class=&quot;sliderwrapper&quot;&gt;<br> 
	<br> 
	&lt;div class=&quot;<font color="#FF0000">contentdiv</font>&quot;&gt;<br> 
	Content 1 Here.<br> 
	&lt;/div&gt;<br> 
	<br> 
	&lt;div class=&quot;<font color="#FF0000">contentdiv</font>&quot;&gt;<br> 
	Content 2 Here.<br> 
	&lt;/div&gt;<br> 
	<br> 
	&lt;div class=&quot;<font color="#FF0000">contentdiv</font>&quot;&gt;<br> 
	Content 3 Here.<br> 
	&lt;/div&gt;<br> 
	<br> 
	&lt;/div&gt;<br> 
	<br> 
	&lt;div id=&quot;<font color="#FF0000">paginate-slider1</font>&quot; class=&quot;pagination&quot;&gt;<br> 
	<br> 
	&lt;/div&gt;<br> 
	<br> 
	&lt;script type=&quot;text/javascript&quot;&gt;<br> 
	<br> 
	featuredcontentslider.init({<br> 
	id: &quot;<font color="#FF0000">slider1</font>&quot;, //id of main slider DIV<br> 
	contentsource: [&quot;inline&quot;, &quot;&quot;], //Valid values: [&quot;inline&quot;, &quot;&quot;] or [&quot;ajax&quot;, 
	&quot;path_to_file&quot;]<br> 
	toc: &quot;#increment&quot;, //Valid values: &quot;#increment&quot;, &quot;markup&quot;, [&quot;label1&quot;, 
	&quot;label2&quot;, etc]<br> 
	nextprev: [&quot;Previous&quot;, &quot;Next&quot;], //labels for &quot;prev&quot; and &quot;next&quot; links. Set to 
	&quot;&quot; to hide.<br> 
	enablefade: [true, 0.2], //[true/false, fadedegree]<br> 
	autorotate: [true, 3000], //[true/false, pausetime]<br> 
	onChange: function(previndex, curindex){ //event handler fired whenever 
	script changes slide<br> 
	//previndex holds index of last slide viewed b4 current (1=1st slide, 
	2nd=2nd etc)<br> 
	//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)<br> 
	}<br> 
	})<br> 
	<br> 
	&lt;/script&gt;</div> 
<p align="left">You always start out with a master DIV that carries a unique yet 
arbitrary ID (ie: &quot;<code>slider1</code>&quot;). For inline definition of its 
contents, add each piece of content within this DIV, each wrapped around a DIV 
of its own with the special CSS class &quot;<font color="#FF0000"><code>contentdiv</code></font>&quot;. 
For the pagination DIV, always define a an arbitrary DIV with the ID &quot;<font color="#FF0000"><code>paginate-SliderID&quot;</code></font>, 
substituting &quot;SliderID&quot; with the ID of the master DIV.</p> 
<p align="left">Following the HTML is the initialization code for this 
particular Slider. Various options are supported, among them:</p> 
<ul> 
	<li> 
	<p align="left"><b><code>contentsource: [&quot;inline&quot;, &quot;&quot;],</code></b>: 
	Specifies where the contents are defined. Set to <code>[&quot;ajax&quot;, &quot;fcs.htm&quot;]</code> 
	if they are defined inside the external file &quot;<a href="fcs.htm">fcs.htm</a>&quot;, 
	with each content wrapped inside a DIV with CSS class &quot;<code>contentclass</code>&quot; 
	just like if they were defined inline.</p></li> 
	<li> 
	<p align="left"><code><b>toc</b></code><b><code>: &quot;#increment&quot;,</code></b>: 
	Sets how the &quot;Table of Contents&quot; links are generated. Valid values are &quot;<code>#increment</code>&quot;, 
	&quot;<code>markup</code>&quot;, or &quot;<code>[label1, label2, etc]</code>&quot;. See
	&quot;<a href="#pinterface">Customizing the Pagination interface</a>&quot; for details.</p></li> 
	<li> 
	<p align="left"><code><span style="background-color: #EFEFEF"><b>enablefade</b></span></code><b><code>: 
	[true/false, 0.2],</code></b>: Enables or disables the fade transition. If 
	the former, the value <code>0.2</code> (out of 1) controls by how much 
	during each effect cycle. Reasonable values are <code>0.1</code> to <code> 
	0.5</code>.</p></li> 
	<li> 
	<p align="left"><b><code>onChange: function(previndex, curindex){}</code></b>: 
	Event handler that fires whenever the Slider changes slides, including when 
	the page first loads. Each time the &quot;previndex&quot; and &quot;curindex&quot; parameters is 
	updated with the index of the last slide and current slide, respectively. 
	Add your own code inside this event handler if desired.</p></li> 
</ul> 
<p align="left">The initial look of your Featured Content Slider is dictated by 
the CSS file &quot;<b><a href="contentslider.css">contentslider.css</a></b>&quot;. While 
editing it, pay close attention to the comments on values that should be 
treated with care.</p> 
<h3 align="left"> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> 
Specifying an external content source using Ajax</h3> 
<p align="left">You can define all of the &quot;<code>contentdiv</code>&quot; contents 
inside an external file on the server and have the script retrieve it via Ajax. 
This is done by setting the &quot;<code>contentsource</code>&quot; parameter as follows:</p> 
<p align="left"><b><code>contentsource: [&quot;ajax&quot;, &quot;path_to_file&quot;],</code></b></p> 
<p align="left">When you do this, the master slider DIV on your page can be 
empty:</p> 
<p class="codehighlight" align="left">&lt;div id=&quot;<font color="#FF0000">slider1</font>&quot; 
class=&quot;sliderwrapper&quot;&gt;<br> 
<b>//Empty</b><br> 
&lt;/div&gt;<br> 
<br> 
&lt;div id=&quot;<font color="#FF0000">paginate-slider1</font>&quot; class=&quot;pagination&quot;&gt;<br> 
<br> 
&lt;/div&gt;</p> 
<p align="left">as the content DIVs are declared inside the external file in 
question following the same convention of wrapping each content inside a DIV 
with the&nbsp; CSS class &quot;<code>contentdiv</code>&quot; (ie: &quot;<a href="fcs.htm">fcs.htm</a>&quot;).</p> 
<h3 align="left"> 
<a name="pinterface"></a> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> 
Customizing the Pagination interface</h3> 
<p align="left">The pagination interface of your Featured Content Slider can be 
fine tuned in 3 ways depending on how much control you want over the final 
output. The parameter &quot;<code>toc</code>&quot; supports 3 possible settings, which 
are:</p> 
<p align="left"><code><b>toc: &quot;#increment&quot; <span style="color: #808080">OR</span> 
&quot;markup&quot; <span style="color: #808080">OR</span> [&quot;label1&quot;, &quot;label2&quot;, &quot;label3&quot;, 
etc],</b></code></p> 
<p>With &quot;<code>#increment</code>&quot;, the script will automatically output each 
pagination link, replacing &quot;<code>#increment</code>&quot; with the numbers 1, 2, 3, 
and so on. You can add additional text to be repeated alongside #increment each 
time, such as &quot;<code>page#increment</code>&quot; or even &quot;<code>&lt;img 
src='#increment.gif' /&gt;</code>&quot;.</p> 
<p>With &quot;<code>markup</code>&quot;, the script doesn't automatically output the 
pagination links, but instead looks inside the pagination DIV (with ID &quot;<font color="#FF0000"><code>paginate-SliderID&quot;</code></font>) 
for any user defined links that carry the following 3 CSS class names:</p> 
<ol> 
	<li><code>class=&quot;toc&quot;</code>: Tells the script that this link is a Table of 
	Contents link.</li> 
	<li><code>class=&quot;next&quot;</code>: Tells the script that this link is a &quot;Next&quot; 
	pagination link.</li> 
	<li><code>class=&quot;prev&quot;</code>: Tells the script that this link is a 
	&quot;Previous&quot; pagination link.</li> 
</ol> 
<p>The links can be set up however you like, whether it's a text link, an image 
link etc- to give it special meaning, just assign one of the CSS class names 
above to it. Since you may not know in advanced how many contents are within the 
Slider (and hence not know how many <code>class=&quot;toc&quot;</code> links to define), 
you can in fact define more <code>class=&quot;toc&quot;</code> links than there are 
contents, and the script will auto hide the excess ones come initiliazation.</p> 
<p>With <code>[&quot;label1, &quot;label2&quot;, etc]</code>, it behaves similar to &quot;<code>#increment</code>&quot; 
in that the script outputs the pagination links dynamically, except you get to 
customize the label for each link fully, for example <code>[&quot;page1&quot;, &quot;page2&quot;]</code> 
or <code>[&quot;&lt;img src='1.gif' /&gt;&quot;, &quot;&lt;img src='2.gif' /&gt;&quot;]</code>.</p> 
<p>For more details, see the supplementary page &quot;<a href="contentslider_suppliment.htm">Three 
ways to output the pagination interface- in detail</a>&quot;.</p> 
<h3 align="left"> 
<a name="jumpto"></a> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> 
Jumping to a particular slide manually by calling&nbsp; <code>featuredcontentslider.jumpTo()</code></h3> 
<p align="left">Apart from changing slides via the automatically generated 
pagination links, you can also manually jump to a particular slide within a 
particular Featured Content Slider instance by calling the function:</p> 
<p class="codehighlight" align="left">featuredcontentslider.jumpTo(&quot;sliderID&quot;, 
pagenumber)</p> 
<p align="left">where the 1st parameter is the ID of your main Featured Content 
Slider DIV id, and the 2nd is the page (aka slide) to jump to (1st page=1, 2nd=2 
etc). Here's an example using a link:</p> 
<p class="codehighlight" align="left">&lt;a 
href=&quot;javascript:featuredcontentslider.jumpTo('slider1', 3)&quot;&gt;Go to 3rd slide 
within FCS with ID=&quot;slider1&quot;&lt;/a&gt;</p> 
<h3 align="left"> 
<a name="jumpto2"></a> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> 
Select a particular slide automatically when the page first loads using a URL 
parameter</h3> 
<p align="left">When a Featured Content Slider first loads, it either defaults 
to loading the first slide, or if persistence is enabled, the last viewed slide. 
You can override both of these settings, and use a URL parameter to force a 
particular slide to be shown initially. This is useful for creating links 
elsewhere on the site that when clicked on loads different slides by default on 
the target page. To do this, add to the target page's (containing Featured 
Content Slider) URL the parameter:</p> 
<p class="codehighlight" align="left">targetpage.htm<b>?sliderid=pagenumber</b></p> 
<p align="left">where &quot;<code>sliderid</code>&quot; is the ID of the Featured Content 
instance on the page, and &quot;<code>pagenumber</code>&quot; is an integer for the slide 
you wish to be shown (1=1st page, 2=2nd etc). For example, here's a link that 
reloads the current page and causes the 4th slide of the 2nd demo above (upper 
right) to be selected by default:</p> 
<p class="codehighlight" align="left">&lt;a 
href=&quot;featuredcontentslider.htm?slider2=4&quot;&gt;Have 4th slide within &quot;slider2&quot; shown 
by default&lt;/a&gt; (<a href="featuredcontentslider.htm?slider2=4">the link</a>)</p> 
<h3 align="left"> 
<img border="0" src="../ddincludes/orangecircle.gif" width="20" height="19"> The
<code>onChange</code> event handler</h3> 
<p align="left">The final parameter within the initialization code is a custom 
event handler &quot;<code>onChange</code>&quot;, where you can insert custom code to 
execute whenever the Slider changes slides. It is automatically fed two 
parameters, the index of the last slide viewed, and the index of the current 
visible slide:</p> 
<p class="codehighlight" align="left">onChange: function(<b>previndex</b>, <b> 
curindex</b>){<br> 
//custom code here<br> 
}</p> 
<p align="left">When the Slider first loads on the page, the two parameters 
point to the same slide. The count starts at 1, meaning 1 indicates the 1st 
slide, 2 the second etc. One sample usage is to stop a video playing on the 
previous slide when a new slide is brought up:</p> 
<p class="codehighlight" align="left">onChange: function(<b>previndex</b>, <b> 
curindex</b>){<br> 
if (previndex==curindex) //if two indices point to the same slide (page first 
loads)<br> 
&nbsp;return //do nothing<br> 
else if (previndex==1)<br> 
&nbsp;videoplayer.stop(&quot;cats&quot;)<br> 
else if (previndex==2)<br> 
&nbsp;videoplayer.stop(&quot;dogs&quot;)<br> 
else if (previndex==3)<br> 
&nbsp;videoplayer.stop(&quot;myvacation&quot;)<br> 
}</p> 
<p align="left">This assumes <code>videoplayer.stop()</code> is some function 
that stops the playing of a video inside your slides.</p> 
    <h1 class="navselectheader">Table Of Contents</h1> 
<p>This script consists of an index page plus one supplementary page:</p> 
<ul class="navselectlist"> 
	<li>Script Index Page</li> 
	<li><a href="contentslider_suppliment.htm">Three ways to output the 
	pagination interface- in detail</a></li> 
	</ul> 
    <p> 
    <script type="text/javascript"><!--
google_ad_client = "pub-3356683755662088";
google_alternate_color = "FFFFCC";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text";
google_ad_channel = "";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "0000CC";
google_color_text = "000033";
google_color_url = "999999";
//-->
</script> 
<script type="text/javascript"

  src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> 
</script></td> 
  </tr> 
</table> 
 
 
<p id="footer">Copyright © 1998-2010 <a href="http://www.dynamicdrive.com"> 
Dynamic Drive.</a> Please read <a href="http://dynamicdrive.com/notice.htm">Terms Of Use here</a> before using any of the scripts.</p> 
 
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-55377-2");
pageTracker._initData();
pageTracker._trackPageview();
</script> 
 
 
</body>

</html>
