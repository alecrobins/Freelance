<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!--Disable zoom on mobile devices-->
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/components/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/pushy.css"/>

<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/pushy.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/vendor/jquery.easings.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/components/bootstrap/js/bootstrap.js"></script>

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <ul>
       <li><a href="http://www.trendingsounds.com/wedding/">weddings</a></li>
        <li><a href="http://www.trendingsounds.com/bar-bat-mitzvahs/">mitzvahs</a></li>
        <li><a href="http://www.trendingsounds.com/corporate-events/">corporate events</a></li>
        <li><a href="http://www.trendingsounds.com/about/">about</a></li>
        <li><a href="http://www.trendingsounds.com/contact/">contact</a></li>
        <li><a href="http://www.trendingsounds.com/fundraisers/">fundraisers</a></li>
        <li><a href="http://www.trendingsounds.com/blog/">blog</a></li>
        <li><a href="http://www.trendingsounds.com/testimonials/">testimonials</a></li>
        
        <li id="socialIcons">
        	<table>
           	 	<tr><td id="pushOverride"><a href="https://twitter.com/TrendingSounds" target="_blank" >
                		<img src="<?php bloginfo('template_url'); ?>/images/tw.jpg" />
      					</a>
                    </td>
        			<td id="pushOverride"><a href="https://www.facebook.com/TrendingSounds" target="_blank" >
                		<img src="<?php bloginfo('template_url'); ?>/images/fb.png" />
                    	</a>
                    </td>
                </tr>
        		<tr><td id="pushOverride">
                		<a href="http://trendingsounds.tumblr.com/" target="_blank"> 
                		<img src="<?php bloginfo('template_url'); ?>/images/tm.png" />
                    	</a>
                    </td>
        			<td id="pushOverride">
                    	<a href="http://www.pinterest.com/trendingsounds/" target="_blank">
                		<img src="<?php bloginfo('template_url'); ?>/images/pin.png" />
                		</a>
                    </td></tr>
        		<tr><td id="pushOverride">
                	<a href="http://instagram.com/trendingsounds" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/images/inst.png" />
                    </a>
                    </td>
                    
                    <td id="pushOverride">
                	<a href="http://instagram.com/trendingsounds" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/images/goog.png" />
                    </a>
                    </td>
                    
                    </tr>
           </table>
        </li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container">
    


