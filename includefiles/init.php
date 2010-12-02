<script>
$(document).ready(function(){
	
	
	// Tabs
		$('#tabs').tabs();
		$('#tabs2').tabs();
		
				
	// Side Navigation Select
	
		$('a').addClass(function() {
			if ($(this).attr('class')==$('body').attr('id')) {
				return 'active';
			}
		});
		
		
	// Slide divs	
	
		//Hide (Collapse) the toggle containers on load
		$(".toggle_container").hide(); 
	  
		//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
		$("span.trigger").click(function(){
			$(this).toggleClass("active").next().slideToggle("slow");
		});
		
			  
		$("#secContent h1").append("<div id='share' class='addthis_toolbox addthis_default_style'><a href='http://addthis.com/bookmark.php?v=250' class='addthis_button_compact'></a><span class='addthis_separator'> </span><a class='addthis_button_facebook'></a><a class='addthis_button_twitter'></a><a class='addthis_button_print'></a><a class='addthis_button_email'></a></div>");
		
	// Take css out of the body and place it in the init file
		
		$("body LINK[href='http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css']").remove();


		
	// Accordion

		$("#accordion").accordion({
			active: false,
			collapsible: true,
			autoheight:false,
			clearStyle:true
		});
		
		$(".accordionMenu").accordion({
			header: 'h2'
		});

});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="/career/includefiles/js/slideshow.js">


/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
* Information on the slide show can be found at http://www.dynamicdrive.com/dynamicindex14/fadeinslideshow.htm
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [720, 165], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["/career/img/header2/ambassadors.jpg", "", "", "The UCC Career Ambassador program is a fun and rewarding experience."],
		["/career/img/header2/ambassadors2.jpg", "", "", "UCC Career Ambassadors can help with resumes."],
		["/career/img/header2/interview.jpg", "", "", "The UCC provides on campus interviewing for employers hiring NC State students."],
		["/career/img/header2/studygrass.jpg", "", "", "Students can relax on campus and read the UCC Job Search Guide."],
		["/career/img/header2/brickyard.jpg", "", "", "The brickyard is an exciting place to talk about your job search."],
		["/career/img/header2/brickyard2.jpg", "", "", "Sharing your job search experience with a friend can be rewarding."],
		["/career/img/header2/engineering.jpg", "", "", "The UCC & COE partners together to provide career events."],
		["/career/img/header2/brickyard.jpg", "", "", "Sharing your job search experience with a friend can be rewarding."],
		["/career/img/header2/ambassadors.jpg", "", "", "The UCC Career Ambassador program is a fun and rewarding experience."],
		["/career/img/header2/interview.jpg", "", "", "The UCC provides on campus interviewing for employers hiring NC State students."],
		["/career/img/img/header2/ambassadors2.jpg", "", "", "UCC Career Ambassadors can help with resumes."]//<--no trailing comma after very last image element!

	],
	displaymode: {type:'auto', pause:10000, cycles:0, wraparound:false, randomize:true},
	persist: true, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "always",
	togglerid: ""
})

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18163698-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<link rel="stylesheet" type="text/css" href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" media="screen" />
