<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

<div id="footer">
	<div class="wrap">
		
        <div id="footerLeft">
        	<a href="http://www.trendingsounds.com/home/">
            	<img src="<?php bloginfo('template_url'); ?>/images/logo-footer-new.png" />
            </a>
            <ul class="listSocial">
            	<li><a href="https://twitter.com/TrendingSounds" target="_blank" >
                	<img src="<?php bloginfo('template_url'); ?>/images/tw.jpg" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/tw-o.jpg ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/tw.jpg ' "/ >
                    </a>
                </li>
                
                <li><a href="https://www.facebook.com/TrendingSounds" target="_blank" >
                	<img src="<?php bloginfo('template_url'); ?>/images/fb.png" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/fb-o.jpg ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/fb.png ' "/ >
                    </a>
                 </li>
                
                <li><a href="http://trendingsounds.tumblr.com/" target="_blank"> 
                	<img src="<?php bloginfo('template_url'); ?>/images/tm.png" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/tm-o.jpg ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/tm.png ' "/ >
                    </a>
                </li>
                
                <li><a href="http://www.pinterest.com/trendingsounds/" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/images/pin.png" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/pin-o.jpg ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/pin.png ' "/ >
                	</a>
                </li>
                
                <li><a href="http://instagram.com/trendingsounds" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/images/inst.png" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/inst-o.jpg ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/inst.png ' "/ >
                    </a>
                </li>
                 <li><a href="https://plus.google.com/112803065319395115703/posts" target="_blank">
                	<img src="<?php bloginfo('template_url'); ?>/images/goog.png" 
                        	onmouseover="this.src= ' <?php bloginfo('template_url'); ?>/images/goog-o.png ' "
                            onmouseout="this.src= ' <?php bloginfo('template_url'); ?>/images/goog.png ' "/ >
                    </a>
                </li>
            </ul>
            
        </div>
        
        <div class="col-md-8">
        	<!--Turn into dynamic list with wordpress-->
        	 <ul class="footerNav">
             	<li><a href="http://www.trendingsounds.com/wedding/">weddings</a></li>
                <li><a href="http://www.trendingsounds.com/bar-bat-mitzvahs/">mitzvahs</a></li>
                <li><a href="http://www.trendingsounds.com/corporate-events/">coorporate events</a></li>
                <li><a href="http://www.trendingsounds.com/about/">about</a></li>
                <li><a href="http://www.trendingsounds.com/contact/">contact</a></li>
                <li><a href="http://www.trendingsounds.com/fundraisers/">fundraisers</a></li>
                <li><a href="http://www.trendingsounds.com/blog/">blog</a></li>
                <li><a href="http://www.trendingsounds.com/testimonials/">testimonials</a></li>
                
             </ul>
        </div>
        
     </div>
     
     <div class="clear"></div>
     
</footer>

</div><!-- Container - for mobile menu -->


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
