
<!DOCTYPE html>

<html>

<!--
	This is a jQuery Tools standalone demo. Feel free to copy/paste.
	                                                         
	http://flowplayer.org/tools/demos/
	
	Do *not* reference CSS files and images from flowplayer.org when in production  

	Enjoy!
-->

<head>
	<title>jQuery Tools standalone demo</title>

	<!-- include the Tools -->
	<script src="http://cdn.jquerytools.org/1.2.3/full/jquery.tools.min.js"></script>

	 

	<!-- standalone page styling (can be removed) -->
	<link rel="stylesheet" type="text/css" href="http://static.flowplayer.org/tools/css/standalone.css"/>	


	<style>
	/* navigation */
	#nav {
		background:#ddd url(http://static.flowplayer.org/img/global/gradient/h300_reverse.png);
		border-bottom:1px solid #CCCCCC;
		height:156px;	
		width:200px;
	}
	
	#nav ul {	
		width:200px;
		margin:0 auto;	
	}
	
	#nav li {	
		border-right:1px solid #ddd;
		float:left;
		padding-left:1px;
		width:90px;
		list-style-type:none;
		text-align:center;
		margin-top:0px;
	}
	
	#nav a {
		color:#333333;
		display:block;
		padding:17px;
		position:relative;
		word-spacing:-2px;
		font-size:11px;		
		text-decoration:none;
	}	
	
	#nav a.current {
		background:url(http://static.flowplayer.org/tools/img/tabs/down_large.jpg);	
	}
	
	#nav img {
		width:50px;
		background-color:#fff;
		border:1px solid #ccc;
		margin:3px 0 5px 0px;
		padding:1px;		
		display:block;
	}
	
	#nav strong {
		display:block;		
		font-size:13px;
	}
	
	/* panes */
	#panes {
		background:#fff url(http://static.flowplayer.org/img/global/gradient/h300_reverse.png) repeat scroll 0 0;
		float:left;
		border-color:#ccc;
		border-style:solid;
		border-width:1px 1px 0;
		width:700px;	
		height:255px;
		margin-bottom:-20px;
		padding-bottom:20px;
		
		/* must be relative so the individual panes can be absolutely positioned */
		position:relative;
	}
	
	/* crossfading effect needs absolute positioning from the elements */
	#panes div {
		display:none;		
		position:absolute;
		top:20px;
		left:20px;
		font-size:13px;
		color:#444;	
		width:650px; 
	}
	
	#panes img {
		float:left;
		margin-right:20px;		
	}
	
	#panes p.more {
		color:#000;
		font-weight:bold;
		font-size:13px;
	}
	
	#panes h3 {
		margin:0 0 -5px 0;
		font-size:22px;
		font-weight:normal;
	}
	
	.overlay {
		display:none;
		width:500px;
		padding:20px;
		background-color:#ddd;
	}
	</style>
</head>

<body>

<!-- tab panes -->
<div id="panes">

	<div>
		<img src="http://farm1.static.flickr.com/114/299183878_4feac12b04_m.jpg"  />		
		
		<h3>Seagram Building</h3>

		<p class="more">
			The Seagram Building is a skyscraper in New York City, located at 375 Park Avenue, between 52nd Street and 53rd Street in Midtown Manhattan. It was designed by the German architect Ludwig Mies van der Rohe, in collaboration with the American Philip Johnson.
		</p>
		
		<p>
			It is 515 feet tall with 38 stories. Severud Associates were the structural engineering consultants. It stands as one of the finest examples of the functionalist aesthetic and a masterpiece of corporate modernism. It was designed as the headquarters for the Canadian distillers Joseph E. Seagram's &amp; Sons, thanks to the foresight of Phyllis Lambert, the daughter of Samuel Bronfman, Seagram's CEO.
		</p>
	</div>
	
	<div>

		<img src="http://farm1.static.flickr.com/143/321464099_a7cfcb95cf_m.jpg"  />
		
		<h3>Barcelona Pavilion</h3>
		
		<p class="more">
			The Barcelona Pavilion, designed by Ludwig Mies van der Rohe, was the German Pavilion for the 1929 International Exposition in Barcelona, Spain. This building was used for the official opening of the German section of the exhibition.
		</p>
		
		<p>
			Mies was offered the commission of this building in 1928 after his successful administration of the 1927 Werkbund exhibition in Stuttgart. The German Reich entrusted Mies with the artistic management and erection of not only the Barcelona Pavilion, but for the buildings for all the German sections at the 1929 Universal Exhibition.
		</p>
		
	</div>

	
	<div>   
		<img src="http://farm1.static.flickr.com/40/122343298_22333fb8e3_m.jpg" />
		
		<h3>Neue Nationalgalerie</h3>
		
		<p class="more">
			Neue Nationalgalerie at the Kulturforum is a museum for classical modern art in Berlin, with main focus on early the 20th century. It is part of the German National Gallery. The museum building and its sculpture garden were designed by Ludwig Mies van der Rohe and opened in 1968.
		</p>
		
		<p>
			The collection features a number of unique highlights of modern 20th century art. Particularly well represented are Cubism, Expressionism, the Bauhaus and Surrealism. The collection owns masterpieces of artists like Pablo Picasso, Ernst Ludwig Kirchner, Joan Mir&oacute;, Wassily Kandinsky and Barnett Newman.
		</p>		
		
	</div>

</div>

<br clear="all" />


<!-- navigator -->
<div id="nav">
	<ul>
		
		<li>
			<a href="#1">
				<img src="http://farm4.static.flickr.com/3278/2691545308_e7e817afb0_s.jpg"/>
			</a>
		</li>
		<li>
			<a href="#2">
				<img src="http://farm1.static.flickr.com/3624/3323893148_8318838fbd_s.jpg"/>
			</a>

		</li>
		<li>
			<a href="#3">
				<img src="http://farm1.static.flickr.com/40/122343298_22333fb8e3_s.jpg" />
			</a>
		</li>
	</ul>

</div>


<br clear="all" />

<script>
$(function() {
	
	
	$("#nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
});
</script>
</body>

</html>
