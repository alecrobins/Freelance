<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	
    <div class="section" id="main-section">
    	
    </div>
<div id="wrap">
 
    <a id="about" data-anchor="about"></a>
    <div class="section" id="about-section">
    	<div class="about-box" id="about-box-1"></div>
        <div class="about-box" id="about-box-2"></div>
        <div id="about-content">
        	<p><span id="about-big">Matt Robinson</span> is a singer/songwriter with several hundred original compositions. A multitalented musician who can play numerous instruments, Matt is poised to break into the music scene with his unique and upbeat blend of rock and pop.</p>
            <p> Matt formed a rock band at the age of 12 and has been performing and writing ever since. Matt has played at the Revolution Club in Ft. Lauderdale as well as various other venues including Douglass Corner in Nashville.  Matt just released 3 new singles including See The World With Me. His first studio album, Picking Up Time, is available on iTunes. 
            <p>Matt has worked with accomplished musicians including Dan Warner and Lee Levin.</p>
        
        </div>
        <div id="about-img">
        	<img src="<?php bloginfo('template_directory'); ?>/images/about-img-new.jpg" />
        </div>
    	
    </div>
    
     <a id="music" ></a>
    <div class="section" id="music-section">
    	  
        <div id="music-event">
        	 <p id="music-event-title"><img src="<?php bloginfo('template_directory'); ?>/images/event-img.png" />Next Event :</p>
        	 <span id="music-event-date"><?php echo do_shortcode('[hc_rse_events numevents=1  columns="date,"]'); ?></span>
             <span id="music-event-info"><?php echo do_shortcode('[hc_rse_events numevents=1  columns="title,"]'); ?>
        		</span>
                <a href="#events">see more events</a>
        </div>
        
    	<div id="music-music">
    		<img src="<?php bloginfo('template_directory'); ?>/images/album-art.jpg" />
            <div id="music-box"></div>
            <div id="music-itunes">
            
            	<a href="https://itunes.apple.com/us/album/picking-up-time/id527052400?uo=4" target="itunes_store">
                		View in iTunes
                        </a>
                
            </div>
     		
            <div id="music-album-wrap">
            	<div id="music-album-content">
                	<div id="music-album-box"></div>
                    <div id="music-album-box-2"></div>
                	<h2>Picking Up Time</h2>
                    <p>
                    	Picking Up Time is Matt’s debut studio album. This energetic upbeat album features a broad range of song selections including pop rock, ballad and reggae.  With sound incorporating both electric and acoustic elements, these songs feature contagious melodies delivered with Matt’s distinctive vocal style.
                    </p>
                    <!--<div id="music-album-down" style="display:block; height:10px; width:100%;"><img src="<?php bloginfo('template_directory'); ?>/images/event-arrow-down.png" width="10px" /></div>-->
                </div>
             </div>
      <!--Start of Playlist -->  
    	<div id="music-playlist">
        	<div id="music-playlist-title">
            	<table>
                	<tr id="table-songs"><td>Songs</td></tr>
                	<tr><td id="table-first">name</td>
                    	<td id="table-last">time</td>
                    </tr>
                </table>
            
            </div>	
            
            <div id="jquery_jplayer_2" class="jp-jplayer"></div>
	
   
                <div id="jp_container_2" class="jp-audio">
                    <div class="jp-type-playlist">
                        <!--<div class="jp-gui jp-interface">
                            <ul class="jp-controls">
                                <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                                <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                                <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                            </ul>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                            <div class="jp-time-holder">
                                <div class="jp-current-time"></div>
                                <div class="jp-duration"></div>
                            </div>
                            <ul class="jp-toggles">
                                <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                                <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                            </ul>
                        </div>-->
                        <div class="jp-playlist">
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                        <div class="jp-playlist-controls">
                            <ul>
                                <li>3:30</li>
                                <li>2:47</li>
                                <li>3:26</li>
                                <li>3:02</li>
                                <li>3:12</li>
                                
                            </ul>
                        </div>
                      </div>
                     </div>
                
                </div>
        
        
        <!-- End playlist -->
        
     </div>  
      
    </div>
    
    <a id="videos" data-anchor="videos"></a>
    <div class="section" id="videos-section">
          <div id="video-under">  
            <?php query_posts('p=5'); ?>
            
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;?>
          </div>
           
    </div>
   
    
      <a id="events" data-anchor="events"></a>
    <div class="section" id="events-section">
    	
        <div id="events-images">
	  		<div id="events-images-title">Pictures</div>
            <div id="events-images-over"></div>
			<?php echo do_shortcode('[nggallery id=1]'); ?>
            <div id="events-images-scroll">
            	<a href="#" id="scrollUp"><img src="<?php bloginfo('template_directory'); ?>/images/event-arrow-up.png" /></a>
				<a href="#" id="scrollDown"><img src="<?php bloginfo('template_directory'); ?>/images/event-arrow-down.png" /></a>
             </div>   
                
	 	 </div>
      
        <div id="events-new">
        	 <p id="events-new-title"><img src="<?php bloginfo('template_directory'); ?>/images/event-img.png" />Next Event :</p>
        	 <span id="events-new-date"><?php echo do_shortcode('[hc_rse_events numevents=1  columns="date,"]'); ?></span>
             <span id="events-new-info"><?php echo do_shortcode('[hc_rse_events numevents=1  columns="title,"]'); ?>
        		</span>
             
             <span id="events-new-info"><?php echo do_shortcode('[hc_rse_events numevents=1  columns="moreinfo,"]'); ?>
        		</span>
             <span id="events-new-link"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-link.png" /><?php echo do_shortcode('[hc_rse_events numevents=1  columns="link,"]'); ?>
        		</span>
             
               
        </div>
   		
        <div id="events-upcoming">
        	<div id="events-upcoming-title">
            	<img src="<?php bloginfo('template_directory'); ?>/images/event-img.png" width="12px"/>				
            	<p>Upcoming Events:</p>
            </div>
    		<div id="events-upcoming-table">
				<?php echo do_shortcode('[hc_rse_events columns="moreinfo,title,date,"]'); ?>
             </div>
        </div>
     
      
    
    </div>
    
    <a id="contact" data-anchor="contact"></a>
    <div class="section" id="contact-section">
    	<div id="contact-img">
        	<div id="contact-box"></div>
            <img src="<?php bloginfo('template_directory'); ?>/images/contact-img-2.jpg" />
        </div>
        
        <div id="contact-content">
        	<p id="contact-title">Contact me at: </p>
            <p id="contact-email"><a href="mailto:Matt@mattrobofficial.com" >Matt@mattrobofficial.com</a></p>
            <div id="contact-social">
            	
                <!--<div><a href="https://www.facebook.com/pages/Matt-Robinson/146946175440187" target="_blank"><img src="/images/contact-fb.png"  /></a></div> -->
                <div><a href="http://instagram.com/mattrobofficial#" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/contact-insta.png"  /></a></div>
                
                <div><a href="https://twitter.com/mattrobofficial" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/contact-tw.png"  /></a></div>
                <div><a href="https://play.spotify.com/artist/285fOJnlJvKcyejEBIPyuI" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/contact-sp.png"  /></a></div>
                <div><a href="http://www.youtube.com/channel/UCM9cATRTpyLgxzL2fCAinVQ" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/contact-yt.png"  /></a></div>
            </div><div style="clear:left;"></div>
            
            <form method="post" action="<?php bloginfo('template_directory'); ?>/contactengine.php">
             
        <table width="400" border="0" cellspacing="2" cellpadding="0">
            <tr><td class="contact_form_text"><label for="Name">name</label></td></tr>
            <tr><td><input name="Name" type="text" id="Name" size="32"></td></tr>
         
            <tr><td class="contact_form_text"><label for="Email">email</label></td></tr>
            <tr><td><input name="Email" type="text" id="Email" size="32"></td></tr>
            
            <tr><td class="contact_form_text"><label for="Message">content</label></td></tr>
            <tr><td><textarea name="Message" cols="45" rows="6" id="Message" class="bodytext"></textarea></td></tr>
            
        </table><div style="clear:left;"></div>
        
    
        </div>
        <input type="image" src="<?php bloginfo('template_directory'); ?>/images/contact-send.jpg" name="submit" value="Submit">
   		 </form>
    </div>

<?php get_footer(); ?>
