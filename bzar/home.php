<?php
/*
Template Name: Home
MultiEdit: homeContent,bottomBar
*/
?>

<?php include 'header-home.php' ?>
<div class="in-wrap">
    <?php /*
    <div class="slideshow" 
    	data-cycle-fx=carousel
    	data-cycle-timeout=1000
    >
    	 <img src="<?php bloginfo('template_directory'); ?>/images/screen1.png" />
         <img src="<?php bloginfo('template_directory'); ?>/images/screen2.png" />
         <img src="<?php bloginfo('template_directory'); ?>/images/screen3.png" />
    </div>  */ ?>
    
	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" id="logo-mobile" /> 
 
   
	<!--Social Button only show on mobile-->

<div class="home-social" id="home-social-top">
     <a href="www.Facebook.com/Bzarapp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/fb-f.png"  /></a>
    <a href="https://twitter.com/BzarApp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tw-f.png"  /></a>
    <a href="http://instagram.com/bzarapp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/inst-f.png" /></a>
    
</div><div class="clear-left"></div>

<!-- Left Block -->
	<?php /*?><img src="<?php bloginfo('template_directory'); ?>/images/iphone.png" id="home-phone" /><?php */?>
   <div id="phone-wrap">
    <div id="carousel">
        <div id="buttons">
            <a href="#" id="prev">prev</a>
            <a href="#" id="next">next</a>
            <div class="clear"></div>
        </div>
        
        <div class="clear"></div>
    
        <div id="slides"> 
            <ul>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/4_large.png" alt="Slide1" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/3_large.png" alt="Slide2" /></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/5_large.png" alt="Slide3" /></li>
            </ul>
            <div class="clear"></div>
        </div>
    
    </div>
  </div>
<!-- Right Block -->
<div id="home-right">
	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" id="logo" />
    
    <div id="home-content" class="left">
        <?php multieditDisplay('homeContent'); ?>
    </div>
    
    <div id="app-store-home">
    <a href="https://itunes.apple.com/us/app/bzar-marketplace/id863408022?ls=1&mt=8" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/app-store-2.png" id="app-store" /></a>
   </div>
    
</div>

</div>

<div class="clear"></div>
</div>
<!--Bottom Bar -->
<div id="bottom-bar">
	<div class="in-wrap">
        <div id="bottom-quote"><?php multieditDisplay('bottomBar'); ?></div>
        <div class="home-social" id="home-social-bottom">
            <a href="https://www.facebook.com/Bzarapp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/fb-f.png"  /></a>
            <a href="https://twitter.com/BzarApp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tw-f.png"  /></a>
            <a href="http://instagram.com/bzarapp" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/inst-f.png" /></a>
        </div>
 
     </div>
</div><div class="clear"></div>



<?php get_footer(); ?>
