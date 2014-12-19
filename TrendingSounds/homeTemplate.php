<?php
/*
Template Name: HomeTemplate
*/
?>
<?php include("header.php"); ?>
<!-- Menu Button -->
<div class="menu-btn" id="mobileMenu">

&#9776; Menu

</div>

<div id="homeLandingSection">
    <div class="wrap">
                
                    <img src="<?php bloginfo('template_url'); ?>/images/newLogo.png" class="img-responsive" id="homeLandingLogo" class="img-responsive" />
                    <p class="lead text-center">
                    At Trending Sounds, whether it is a wedding, a Bar Mitzvah, or corporate event needing a DJ or MC, we strive to make your event stand out.  
                    </p>
                    
                    <div class="homeLandingOptions">
                        <div class="col-md-4"><a href="http://localhost:8888/TrendingSounds/wedding/"><h2>weddings</h2></a></div>
                        <div class="col-md-4"><a href="http://localhost:8888/TrendingSounds/bar-bat-mitzvahs/"><h2>bar &amp; bat mitzvahs</h2></a></div>
                        <div class="col-md-4"><a href="http://localhost:8888/TrendingSounds/coorporate-events/"><h2>corporate events</a></h2></div>
                    </div>
                    
    </div><!-- end wrap -->
</div>

<?php include("footer.php"); ?>