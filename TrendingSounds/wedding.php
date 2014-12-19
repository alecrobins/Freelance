<?php
/*
Template Name: Wedding
MultiEdit: weddingContent
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>

<div id="weddingBg" class="pageBg">
	
    <div class="pageTitle" id="weddingPageTitle">
    	<!--Need to replace with generated content-->
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?></h1>
    	</div>
    </div>
	
    <div class="wrap" id="wrapContent">
    	<div class="col-md-5">
        	<div class="pageInfo" id="weddingInfo">
               <?php multieditDisplay('weddingContent'); ?>
            </div>
            
                <button class="contactButton" id="contactButtonWedding" onclick="window.location='http://www.trendingsounds.com/contact/';">
                	Contact Us  <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
                
        </div>
        
        <div class="col-md-7 pageSlider" id="weddingSlider">
        	 <?php echo get_new_royalslider(1); ?>
        </div>
        
        <div class="clear"></div>
       
    </div>
</div>

<?php include("footer.php"); ?>