<div id="slider1" class="sliderwrapper">
  <div class="contentdiv"> <img src="img/homeheader/ambassadorprogram.jpg" alt="img" width="977" height="202" border="0" usemap="#slide1">
    <map name="slide1">
      <area shape="rect" coords="643,112,736,142" href="/about/ambassadors.php" alt="Learn More">
    </map>
  </div>
  <div class="contentdiv"> <img src="img/homeheader/resume.jpg" alt="img" width="977" height="202" border="0" usemap="#slide2">
    <map name="slide2">
      <area shape="rect" coords="642,112,738,141" href="experience/resumes/index.php" alt="Learn More">
    </map>
  </div>
  <div class="contentdiv"> <img src="img/homeheader/careercourses.jpg" alt="img" width="977" height="202" border="0" usemap="#slide3">
    <map name="slide3">
      <area shape="rect" coords="637,111,739,142" href="/major/courses.php" alt="Learn More">
    </map>
  </div>
  <div class="contentdiv"> <img src="img/homeheader/careerfair.jpg" alt="img" width="977" height="202" border="0" usemap="#slide4">
    <map name="slide4">
      <area shape="rect" coords="637,113,740,140" href="/events/" alt="Learn More">
    </map>
  </div>
  <div class="contentdiv"> <img src="img/homeheader/connected.jpg" alt="img" width="977" height="202" border="0" usemap="#slide5">
    <map name="slide5">
      <area shape="rect" coords="639,110,737,143" href="/ncsuweb/" alt="Learn More">
    </map>
  </div>
</div>
<div id="paginate-slider1" class="pagination"></div>
<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: ["<img src='img/homeheader/ambassadorprogramTHUMB.jpg' alt='Ambassador' title='Ambassador Program'>","<img src='img/homeheader/resumeTHUMB.jpg' alt='Resume' title='Resume Ready?'>","<img src='img/homeheader/careercoursesTHUMB.jpg' alt='Classroom' title='Career Course'>","<img src='img/homeheader/careerfairTHUMB.jpg' alt='Career Fair' title='Career Fair'>","<img src='img/homeheader/connectedTHUMB.jpg' alt='Social Media' title='Get Connected'>"],  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 6000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>