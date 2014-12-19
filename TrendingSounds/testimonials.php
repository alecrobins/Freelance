<?php
/*
Template Name: Testimonials
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>

<div id="testimonialsBg" class="pageBg">
	
    <div class="pageTitle" id="testimonialsPageTitle">
    	<!--Need to replace with generated content-->
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?> </h1>
    	</div>
    </div>
	
    <div class="wrap" id="testimonialsContent">
    	
        <?php echo do_shortcode( '[testimonials]' ) ?>
        
        <div class="clear"></div>
       
    </div>
</div>


<?php include("footer.php"); ?>