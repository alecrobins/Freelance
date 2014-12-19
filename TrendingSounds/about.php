<?php
/*
Template Name: About
MultiEdit: aboutContent
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>

<div id="aboutBg" class="pageBg">
	
    <div class="pageTitle" id="aboutPageTitle">
    	<!--Need to replace with generated content-->
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?> </h1>
    	</div>
    </div>
	
    <div class="wrap" id="wrapContent">
    	<div class="col-md-12">
        	<div class="pageInfo" id="aboutInfo">
                <?php multieditDisplay('aboutContent'); ?>
             </div>
        </div>
        <div class="clear"></div>
       
    </div>
</div>


<?php include("footer.php"); ?>