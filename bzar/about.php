<?php
/*
Template Name: About
MultiEdit: aboutInfo
*/
?>
<?php get_header(); ?>

<div class="in-wrap">
	
<!-- Left Block -->
	<div id="about-phone">
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
    </div>
<!-- Right Block -->
<div id="about-right"  class="page-font"> 
        <?php multieditDisplay('aboutInfo'); ?>
        <br />
	<hr id="about-line" />
</div>
<div class="clear"></div>



</div>
<?php get_footer(); ?>
