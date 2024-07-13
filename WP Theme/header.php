<!DOCTYPE html>
<html>
<head>
    <title>Basic Website</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="psc result,jsc result,ssc result,hsc result">
	<meta name="author" content="SK Mahi">
	<link rel="stylesheet" href="font-awesome-4.5.0-master/css/font-awesome.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
    <div class="headersection template clear">
	    <div class="logo">
			<img src="images/logo.png" alt="Logo"/>
			<h2>Mahi's Anime Diary</h2>
			<p>Small thaughts about the animes I watch</p>
		</div>
	    <div class="social">
		    <a target="_blank" href="https://www.facebook.com/PaurutiTost"><i class="fa fa-facebook"></i></a>
		    <a target="_blank" href="https://twitter.com/PaurutiTost"><i class="fa fa-twitter"></i></a>
		    <a target="_blank" href="https://www.linkedin.com/in/paurutitost"><i class="fa fa-linkedin"></i></a>
		    <a target="_blank" href="http://google.com"><i class="fa fa-google-plus"></i></a>
	    </div>
	</div>