<?php
/*
Template Name: Mitzvahs
MultiEdit: mitzvahContent
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>


<div id="mitzvahBg" class="pageBg">
	
    <div class="pageTitle" id="mitzvahPageTitle">
    	<!--Need to replace with generated content-->
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?> </h1>
    	</div>
    </div>
	
    <div class="wrap" id="wrapContent">
    	<div class="col-md-5">
        	<div class="pageInfo" id="mitzvahInfo">
                <?php multieditDisplay('mitzvahContent'); ?>
             </div>
               <button class="contactButton" id="contactButtonMitzvah" onclick="window.location='http://www.trendingsounds.com/contact/';">
                	Contact Us  <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
                
        </div>
        
        <div class="col-md-7 pageSlider" id="mitzvahSlider">
        	 <?php echo get_new_royalslider(2); ?>
        </div>
        
        <div class="clear"></div>
       
    </div>
</div>


<?php include("footer.php"); ?>