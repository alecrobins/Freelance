<?php include("header.php"); ?>
<div id="page_wrap">

<h1 id="page_title">Contact Us</h1>

<div id="contact_left">
    <p class="paragraphL">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur fringilla magna non tristique. Vestibulum mauris ipsum, vulputate sit amet ultrices a, ornare id metus. Fusce ultrices tincidunt ligula, in adipiscing lorem sagittis sit amet. Fusce non orci lorem. </p>
    <p class="paragraphL">
    Aenean vehicula justo quis libero commodo tincidunt. Praesent consequat, tellus eu vehicula ultrices, nisi arcu facilisis urna, ut interdum odio turpis nec eros. Aenean aliquam laoreet ipsum, eget iaculis leo volutpat a. Morbi at nunc nisi, sed feugiat diam. Phasellus purus sapien, commodo eget sollicitudin 
    </p>
	<div id="contact_info">
    <img src="images/bgContact.jpg" />
    	<div id="contact_info_left">
        	<table>
            	<tr><td><span class="contact_small">Mailing Address</span></td>
                	<td><span class="contact_large">LyfeBank Ohio<br />
													2404 E Main Street <br />
													Columbus, OH 43209</span></td>
                </tr>
                <tr><td><span class="contact_small">Email</span></td>
                	<td><span class="contact_large"><a href="mailto:drobins@lyfebankohio.com">drobins@lyfebankohio.com</a></span></td>
                </tr>
            </table>
        </div>
        <div id="contact_info_right">
        	<table>
            	<tr><td><span class="contact_small">Phone (Office)</span></td>
                	<td><span class="contact_large">614-545-3555 ext.3</span></td>
                </tr>
                <tr><td><span class="contact_small">Phone (Toll Free)</span></td>
                	<td><span class="contact_large">1-800-695-6344</span></td>
                </tr>
                <tr><td><span class="contact_small">Fax</span></td>
                	<td><span class="contact_large">800-695-6344</span></td>
                </tr>
            </table>
        </div>
    </div>
 <p style=" font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:rgb(1, 44, 91);">Or you can email us by using the following form:</p>   
 <!--Contact Form-->
<div id="contact_form">    
		<?php 
    if ($_POST["email"]<>'') { 
        $ToEmail = 'drobins@lyfebankohio.com'; 
        $EmailSubject = "From: ".$_POST["subject"]."\r\n"; 
        $mailheader = "From: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
        $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
        $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
    ?> 
    Your message was sent
    <?php 
    } else { 
    ?> 
    <form action="index.php" method="post">
        <table width="400" border="0" cellspacing="2" cellpadding="0">
            <tr><td class="contact_form_text">Your Name</td></tr>
            <tr><td><input name="name" type="text" id="name" size="32"></td></tr>
         
            <tr><td class="contact_form_text">Email Address</td></tr>
            <tr><td><input name="email" type="text" id="email" size="32"></td></tr>
            
            <tr><td class="contact_form_text">Subject</td></tr>
            <tr><td><input name="subject" type="text" id="subject" size="32"></td></tr>
            
            <tr><td class="contact_form_text">Message</td></tr>
            <tr><td><textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea></td></tr>
            
            <tr><td class="contact_form_text"> </td></tr>
            <tr  id="contact_button"><td><input type="image" src="images/send.png" name="Submit" value="Send"></td></tr>
            
        </table>
    </form> 
    <?php 
    }; 
    ?>

	</div>
</div>

<!--Side Bar-->

<div id="solution_right">

	<div class="sidebar" id="sidebar_contact">
    	<h3>Social Media</h3>
        <p class="paragraph_side" id="paragraph_small">Be sure to check out our social media sites for up-to-date information about Lyfebank, tips on healthcare, and recent news about healthcare.</p>
    	<img src="images/buttonFB.png" width="22px" class="button_side" /> <a href="" class="link_side">LyfeBank Facebook Page</a>
        <br />
        <img src="images/buttonTwitter.png" width="22px" class="button_side" /> <a href="" class="link_side">Follow us on Twitter</a>
		<br />
		<img src="images/buttonYouTube.png" width="22px" class="button_side" /> <a href="" class="link_side">LyfeBank YouTube Channel</a><br />
		<img src="images/buttonRSS.png" width="22px" class="button_side" /> <a href="" class="link_side">Subscribe to our RSS Feed</a>    
    		<div class="clear"></div>
    </div>
	
</div>


<div class="clear"></div>

</div>
<?php include("footer.php"); ?>