<?php include("header.php"); ?>

<div id="home-main">
	<div id="home-main-wrap">
   	 	
    	<div id="home-main-nav-wrap">
        	<div id="nav-bar-cont"></div>
        	<img src="images/logo-main.png" alt="Star City Inn and Suites Logo" width="150" class="left"/>
            
              <nav>
           		<ul>
                    <li><a href="reservations.php">Reservations</a></li>
                    <li><a href="roomrates.php">Rooms &amp; Rates</a></li>
                    <li><a href="location.php">Location</a></li>				
                    <li><a href="aboutus.php">About Us</a></li>
            	</ul>
        	</nav>
            
            <img src="images/nav-curve.png" style="float:right; width:204px;"/>
            
        </div>
        
    </div>
    
</div><div class="clear"></div>

<div id="home-main-bottom">
	<div id="home-main-bottom-wrap">
    	<div id="home-main-bottom-location" class="card">
        	<h3>Location</h3>
            <center><img src="images/map.jpg" alt="Location of Star City Inn and Suites" /></center>
            <p class="f-small">3131 Broad Way St</p>
            <p class="f-small">Grove City, Ohio</p>
            <p class="f-small">43123</p>
            <a href="http://maps.google.com/?q=3131 Broadway Street, Grove City, Ohio, 43123" target="_blank" class="f-cursive">Get Directions Now >> </a>
        </div>
        
       <div id="home-main-bottom-bulletin" class="card">
        	<h3>What's New at Star City Inn</h3>
            <div id="features">
                <div><img src="images/homefill.jpg" /></div>
                <div><img src="images/homefill2.jpg" /></div>
                <div><img src="images/homefill3.jpg" /></div>
            </div>

<script type="text/javascript">		
	$(document).ready(function(){ $('#features').jshowoff({autoPlay:true, hoverPause:true}); });
</script>
        </div>
        
    </div><div class="clear"></div>

</div>

<?php include("footer.php"); ?>