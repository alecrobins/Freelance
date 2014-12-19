<?php
/*
Template Name: Contact
MultiEdit: contactContent
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>


<div id="contactBg" class="pageBg">
	
    <div class="pageTitle" id="contactPageTitle">
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?> </h1>
    	</div>
    </div>
	
    <div class="wrap" id="wrapContent">
    	<div class="col-md-7" id="contactInfoWrap">
        	<div class="pageInfo" id="contactInfo">
               	<?php echo do_shortcode( '[bws_contact_form]  ' ) ?>           
             </div>
        </div>
        
        <div class="col-md-5" id="contactRight">
        	<h3>Contact us for your next event!</h3>
            <div id="contactAddress">
        		<?php multieditDisplay('contactContent'); ?>
            </div>
        </div>
        
        <div class="clear"></div>
       
    </div>
</div>


<?php include("footer.php"); ?>