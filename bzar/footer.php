<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</div><!-- / end page container, begun in the header -->

<!--<hr id="bottom-bar-bar" />
-->
<br />

<footer class="site-footer" role="contentinfo">
    
    <ul id="footer-nav">
    	<li><a href="http://www.bzarapp.com/home/" >Home</a></li>
        <li><a href="http://www.bzarapp.com/about/" >About</a></li>
        <li><a href="http://www.bzarapp.com/privacy/" >Privacy</a></li>
        <li><a href="http://www.bzarapp.com/faq/" >FAQ</a></li>
        <li><a href="http://www.bzarapp.com/terms/" >Terms</a></li>
        <li><a href="http://www.bzarapp.com/attributions/" >Attributions</a></li>
        <li><a href="http://www.bzarapp.com/contact-us/" >Contact Us</a></li>
    </ul>
    
    <p id="footer-copyright"> &copy; Copyright Bzar 2013 - 2014. All rights reserved.</p>

</footer><!-- #colophon .site-footer --><div class="clear"></div>


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</div> <!--end background div-->

</body>
</html>
