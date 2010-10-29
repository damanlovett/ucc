<script>
$(document).ready(function(){
	
	
	// Tab 
		$('#tabs').tabs();
			
	// Side Navigation Select
	
		$('a').addClass(function() {
			if ($(this).attr('class')==$('body').attr('id')) {
				return 'active';
			}
		});
		


});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="/includefiles/js/slideshow.js">


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
		["/img/header2/ambassadors.jpg", "", "", "The UCC Career Ambassador program is a fun and rewarding experience."],
		["/img/header2/ambassadors2.jpg", "", "", "UCC Career Ambassadors can help with resumes."],
		["/img/header2/interview.jpg", "", "", "The UCC conducts on campus interviewing for employers hiring NC State students."],
		["/img/header2/studygrass.jpg", "", "", "Students can relax on campus and read the UCC Job Search Guide."],
		["/img/header2/brickyard.jpg", "", "", "The brickyard is an exciting place to talk about your job search."],
		["/img/header2/brickyard2.jpg", "", "", "Sharing your job search experience with a friend can be rewarding."],
		["/img/header2/engineering.jpg", "", "", "The UCC & COE partners together to provide career events."],
		["/img/header2/brickyard.jpg", "", "", "Sharing your job search experience with a friend can be rewarding."],
		["/img/header2/ambassadors.jpg", "", "", "The UCC Career Ambassador program is a fun and rewarding experience.."],
		["http://ucc.lovettcreations.org/img/header2/interview.jpg", "", "", "The UCC conducts on campus interviewing for employers hiring NC State students.."],
		["http://ucc.lovettcreations.org/img/header2/ambassadors2.jpg", "", "", "UCC Career Ambassadors can help with resumes.."]//<--no trailing comma after very last image element!

	],
	displaymode: {type:'auto', pause:10000, cycles:0, wraparound:false, randomize:true},
	persist: true, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "always",
	togglerid: ""
})

</script>