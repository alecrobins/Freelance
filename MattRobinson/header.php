<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<?php if (is_search()) echo '<meta name="robots" content="noindex, nofollow" />'; ?>

	<title>Matt Robinson | Official Website</title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<meta name="description" content="Matt Robinson is a singer and songwriter with several hundred original compositions. A multitalented musician who can play numerous instruments, Matt is poised to break into the music scene with his unique and upbeat blend of rock and pop. ">

	<?php if (true == of_get_option('meta_author')) echo '<meta name="author" content="'.of_get_option("meta_author").'" />'; ?>
	
	<?php if (true == of_get_option('meta_google')) echo '<meta name="google-site-verification" content="'.of_get_option("meta_google").'" />'; ?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php if (true == of_get_option('meta_viewport')) {
	echo '<meta name="viewport" content="'.of_get_option("meta_viewport").'" />';
	echo '<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->';
	} ?>
	
	<?php if (true == of_get_option('head_favicon')) {
	echo '<link rel="shortcut icon" href="'.of_get_option("head_favicon").'" />';
	echo '<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->';
	} ?>

	<?php if (true == of_get_option('head_apple_touch_icon')) {
	echo '<link rel="apple-touch-icon" href="'.of_get_option("head_apple_touch_icon").'">';
	echo '<!-- The is the icon for iOS Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
	} ?>

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	
	<!-- This is an un-minified, complete version of Modernizr. 
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.6.2.dev.js"></script>

	<!-- Application-specific meta tags -->
	<?php if (true == of_get_option('meta_app_win_name')) {
	echo '<!-- Windows 8 -->';
	echo '<meta name="application-name" content="'.of_get_option("meta_app_win_name").'" /> ';
	echo '<meta name="msapplication-TileColor" content="'.of_get_option("meta_app_win_color").'" /> ';
	echo '<meta name="msapplication-TileImage" content="'.of_get_option("meta_app_win_image").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_twt_card')) {
	echo '<!-- Twitter -->';
	echo '<meta name="twitter:card" content="'.of_get_option("meta_app_twt_card").'" />';
	echo '<meta name="twitter:site" content="'.of_get_option("meta_app_twt_site").'" />';
	echo '<meta name="twitter:title" content="'.of_get_option("meta_app_twt_title").'">';
	echo '<meta name="twitter:description" content="'.of_get_option("meta_app_twt_description").'" />';
	echo '<meta name="twitter:url" content="'.of_get_option("meta_app_twt_url").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_fb_title')) {
	echo '<!-- Facebook -->';
	echo '<meta property="og:title" content="'.of_get_option("meta_app_fb_title").'" />';
	echo '<meta property="og:description" content="'.of_get_option("meta_app_fb_description").'" />';
	echo '<meta property="og:url" content="'.of_get_option("meta_app_fb_url").'" />';
	echo '<meta property="og:image" content="'.of_get_option("meta_app_fb_image").'" />';
	} ?>

	<!-- Dublin Core Metadata : http://dublincore.org/
	Do we need this?
	-->
	<!--<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">-->

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/add-on/jplayer.playlist.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/jquery-cookie-master/jquery.cookie.js"></script>

<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	var myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_2",
		cssSelectorAncestor: "#jp_container_2"
	}, [
		{
			title:"Feel The Beat",
			mp3:"<?php bloginfo('template_directory'); ?>/music/Dance.mp3",
			oga:"<?php bloginfo('template_directory'); ?>/music/Dance.ogg"
		},
		{
			title:"Pass It On",
			mp3:"<?php bloginfo('template_directory'); ?>/music/PassItOn.mp3",
			oga:"<?php bloginfo('template_directory'); ?>/music/PassItOn.ogg"
		},
		{
			title:"See the World",
			mp3:"<?php bloginfo('template_directory'); ?>/music/SeetheWorldWithMe.mp3",
			oga:"<?php bloginfo('template_directory'); ?>/music/SeetheWorldWithMe.ogg"
		},
		{
			title:"Hey Summer",
			mp3:"<?php bloginfo('template_directory'); ?>/music/Summer.mp3",
			oga:"<?php bloginfo('template_directory'); ?>/music/Summer.ogg"
		},
		{
			title:"Part Time Job",
			mp3:"<?php bloginfo('template_directory'); ?>/music/PartTimeJob.mp3",
			oga:"<?php bloginfo('template_directory'); ?>/music/PartTimeJob.ogg"
		}
	], {
		 playlistOptions: {
				autoPlay:true,
			    displayTime: 0
		  },
		swfPath: "js",
		supplied: "oga, mp3",
		wmode: "window",

		smoothPlayBar: false,
		keyEnabled: false
	});
	

});


//]]>

</script><script type="text/javascript">
 	
<!-- Event Scroll-->

$(function() {
	var step = 410;
	var scrolling = false;
	
	// Wire up events for the 'scrollUp' link:
	$("#scrollUp").bind("click", function(event) {
		event.preventDefault();
		// Animates the scrollTop property by the specified
		// step.
		$("#events-images .ngg-galleryoverview").animate({
			scrollTop: "-=" + step + "px"
		});
	});/*.bind("mouseover", function(event) {
		scrolling = true;
		scrollContent("up");
	}).bind("mouseout", function(event) {
		scrolling = false;
	});*/
	
	
	$("#scrollDown").bind("click", function(event) {
		event.preventDefault();
		$("#events-images .ngg-galleryoverview").animate({
			scrollTop: "+=" + step + "px"
		});
	});/*.bind("mouseover", function(event) {
		scrolling = true;
		scrollContent("down");
	}).bind("mouseout", function(event) {
		scrolling = false;
	});*/
	
	function scrollContent(direction) {
		var amount = (direction === "up" ? "-=2px" : "+=2px");
		$("#events-images .ngg-galleryoverview").animate({
			scrollTop: amount
		}, 1, function() {
			if (scrolling) {
				scrollContent(direction);
			}
		});
	}
});

 </script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/my-functions.js"></script>

    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
 
 <!--[if IE]>
   
   <style type="text/css">

   #nav-main {
       background:transparent;
       filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#9FFFFFFF,endColorstr=#9FFFFFFF); 
       zoom: 1;
    } 
    
    #top-music ul {box-shadow:none;}

    </style>

<![endif]-->
 
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#nav-wrap" >
	
    <a id="home" class="smoothScroll"></a>
    
	<div id="mailing-list">
    	<a href="#footer"><img src="<?php bloginfo('template_directory'); ?>/images/join-mailing-list-2.png" id="mailing-wrap"></a>
      <img src="<?php bloginfo('template_directory'); ?>/images/mailing-x.png" id="mailing-x">
    </div>
	
    <div id="wrapper">
	<!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

    <header id="header" role="header">
        <div id="top-header-wrap">
           <div id="music-wrap">
           			<div id="jquery_jplayer_2" class="jp-jplayer"></div>
	
   
                <div id="jp_container_2" class="jp-audio">
                        <div class="jp-type-playlist">
                        
                        
                            <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                           </div>
                       
                                 <div class="jp-playlist" id="music-current">
                                 
                                 <ul style="display:none;">
                                        <li></li>
                                    </ul>
                                    
                                    </div>
                                 
                            <div class="jp-playlist" id="top-music">
                               
                                
                                    <ul style="display:none;">
                                        <li></li>
                                    </ul>
                              
                            </div>
                            
                        </div>
                     
                  
                    
                   <!--             
                    <div class="jp-time-holder">
                                    <div class="jp-current-time"></div>
                     </div>
                     
                     -->
                     
                    <!--Controls-->
                   <div id="top-music-control">
                            <div class="jp-gui jp-interface">
                                <ul class="jp-controls">
                        
                                    <li><a href="javascript:;" class="jp-play" tabindex="2"><img src="<?php bloginfo('template_directory'); ?>/images/play.png" ></a></li>
                                    <li><a href="javascript:;" class="jp-pause" tabindex="1"><img src="<?php bloginfo('template_directory'); ?>/images/pause.png" ></a></li>
                                    <li><a href="javascript:;" class="jp-next" tabindex="1"><img src="<?php bloginfo('template_directory'); ?>/images/next.png" ></a></li>
                                    <li><a href="javascript:;" class="jp-stop" tabindex="1"><img src="<?php bloginfo('template_directory'); ?>/images/stop.png" ></a></li>
                                    
                                </ul>
                               
                             
                                
                            </div>
                   </div>
				</div> <!--end music wrap-->
           </div>
 			
            <div id="top-header-subscribe">
            	<!-- Begin MailChimp Signup Form ** TAKEN OUT 12/17 **
                    <div id="mc_embed_signup">
                        <form action="http://mattrobinsontunes.us7.list-manage1.com/subscribe/post?u=16b5ba7655f11302dfdf6b093&amp;id=4daa2e4f88" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        <div id="subscribe-button"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        <div class="mc-field-group">
                            <!--<label for="mce-EMAIL">*Email Address:</label>
                            <input type="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'subscribe with email':this.value;" value="subscribe with email" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>	
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
            </div>        
                
                <div id="top-header-social">
                	
                    <!--<div><a href="https://www.facebook.com/pages/Matt-Robinson/146946175440187" target="_blank"><img src="/images/fb.png" /></a></div> -->
                     <div><a href="http://instagram.com/mattrobofficial#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png"  /></a></div>
                     
                    <div><a href="https://twitter.com/mattrobofficial" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tw.png"  /></a></div>
                    
                    
                    <div><a href="https://play.spotify.com/artist/285fOJnlJvKcyejEBIPyuI" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sp.png" /></a></div>
                    
                    <div><a href="http://www.youtube.com/channel/UCM9cATRTpyLgxzL2fCAinVQ" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/yt.png"  /></a></div>
                	
                </div>
                
      </div>
             
		
 
		
        <div id="nav-main">
        	<div id="nav-wrap">
               <a href="#home"><p id="logo">Matt Robinson</p></a>
                <nav class="nav" role="navigation">
                    	<ul>
                        	<li ><a href="#home" data-scroll="home">Home</a></li>
                            <li id="nav-about"><a href="#about" data-scroll="about">About</a></li>
                            <li id="nav-music"><a href="#music" data-scroll="music">Music</a></li>
                            <li id="nav-videos"><a href="#videos" data-scroll="videos">Videos</a></li>
                            <li id="nav-events"><a href="#events" data-scroll="events">Events</a></li>
                            <li id="nav-contact"><a href="#contact" data-scroll="contact">Contact</a></li>
            			</ul>
                </nav><div class="clear"></div>
            </div>
        </div>
        
               </header>
		

