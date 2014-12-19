<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Welcome to Star City Inn & Suites. We are a new motel located right off Interstate 270 south of Columbus, Ohio in Grove City. Our property is close to many central Ohio attractions and convention centers, like the Hollywood Casino, Scioto Race Tracks, Beulah Park, Downtown Convention Center and The Ohio State University." />

<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.jshowoff.min.js"></script>
<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#room-slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#room-slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#room-slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<title>Star City Inn &amp; Suites</title>
</head>
<body>

<div id="top-nav">
	<div id="top-nav-info">
    	<p id="top-nav-info-left">Welcome to Star City Inn & Suites website!</p>

        <p id="top-nav-info-right"> | <a href="http://www.starcityinnsuites.com/cpanel" target="_blank">Sign in</a></p>
		<p id="top-nav-info-right"><a href="https://www.facebook.com/StarCityInnSuites" target="_blank"><img src="images/facebook-top.jpg" class="left" /></a>Call Us at <span class="blue_spc">614-871-0065</span></p>
    </div>
</div><div class="clear"></div>