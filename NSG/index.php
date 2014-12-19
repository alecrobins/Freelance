<?php get_header(); ?>

        <section class="main-body" id="home-section">
			<div class="row">
              <div class="col-lg-8">
              
              	<div id="slider-title">nsg presents</div>
					<ul id="carousel" class="elastislide-list" style="max-height:inherit;">
						<?php echo do_shortcode( '[events_list category="2"]
                        	<li><a href="#_EVENTURL">
							
										 #_EVENTIMAGE
									 
								</a>
								<div id="slider-info">
								
									<div id="slider-info-wrap">
										<p class="slider-info-title"><a href="#_EVENTURL">#_EVENTNAME</a></p>
										<p class="slider-info-date">@#_EVENTTIMES <br />#_EVENTDATES</p>
									</div>
								
								</div>
						</li>
														
                        [/events_list]' ) ?>
                    </ul>
              
              	<br />

                
               <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>
                
              </div>
              <div class="col-lg-4">
              	  <div id="slider-title">upcoming nashville events</div>
                  <div id="upcoming">
                        <table id="upcoming-table">
                                
                        <?php echo do_shortcode( '[events_list limit="10"]
                                    
                                    <tr>
                                        <td id="upcoming-dot"><span style="color:#_CATEGORYCOLOR">&bull;</span></td>
                                        <td id="upcoming-title"><a href="#_EVENTURL">#_EVENTNAME</a></td>
                                        <td>#_EVENTDATES</td></tr>
                                                                
                                [/events_list]' ) ?>
                        </table>
              		</div>
              </div>
		</div>
        </section>
        
        <section class="main-body" id="affliate-section">
        	<div id="affliate">
            	<div class="affliate-title-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/nsgAffliates.jpg" /></div>
            	<!--Affiliates-->
                <div class="affliate-img" style="margin-left:20px;"><img src="<?php echo get_template_directory_uri(); ?>/img/tinRoof.png" /></div>
                 <div class="affliate-img" style="margin-top:2%;"><img src="<?php echo get_template_directory_uri(); ?>/img/dans.png" /></div>
                 <div class="affliate-img" style="margin-top:2%;"><img src="<?php echo get_template_directory_uri(); ?>/img/south.png" /></div>
                 <div class="affliate-img" style="margin-top:1%;"><img src="<?php echo get_template_directory_uri(); ?>/img/blueBar.png" /></div>
                 <div class="affliate-img" style="margin-top:2%;"><img src="<?php echo get_template_directory_uri(); ?>/img/anthem.png" /></div>
                 <div class="affliate-img"><img src="<?php echo get_template_directory_uri(); ?>/img/seen.png" /></div>
               
            </div><div class="clear"></div>
        </section>
        
       

<?php get_footer(); ?>

