<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!--disable zoom-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- icons -->
		<link href="<?php bloginfo('template_directory'); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php bloginfo('template_directory'); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
       
		<!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Paytone+One|Roboto:400,100,700' rel='stylesheet' type='text/css'>
        
        <!-- css -->       
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/elastislide.css" />
        <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/css/megamenu.css" />
	     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />		
          
          
          <!-- css + javascript -->
          
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.17475.js" /></script>
  	
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js" /></script>
	        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/megamenu.js" /></script>
          <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" /></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js" /></script>
        
     
         <script >
		 
			$(document).ready(function(){
				$(".megamenu").megamenu();
			});
			
			
		</script>	
         
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
	</head>
	<body <?php body_class(); ?>>
		
      
        
        <section id="header">
        	<div id="header-top">
            	<script type="text/javascript">
					$(function(){
						$("#top-header-social a").hover(function(){
							$("img", this).stop().animate({top:"-23px"},{queue:false,duration:200});
						}, function() {
							$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
						});
					});
				</script>
            	<div id="top-header-social">
                	<div><a href="https://www.facebook.com/NashvilleSocialGroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/fb.png" /></a></div>
                    <div><a href="https://twitter.com/NashSocialGroup" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/tw.png"  /></a></div>
                    
                	
                </div>
            </div>
            <div id="header-mid">
            	<center><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a></center>
            </div>
	<div id="wrapper-header">		
            <div id="header-nav">            
               <!--<ul class="megamenu black">
               
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Grid</a>
					
				</li>
				<li><a href="#">Images</a>
					
				</li>
				<li><a href="#">Dropdown</a>
					
				</li>
				<li><a href="#">Contact</a>
					
				<li class="right"><a href="#">Right</a></li>
			</ul>-->
               
                <!-- <nav id="nav-right">
                	<ul>
                    	<li><a href="http://www.nashvillesocialgroup.com/background.php">background</a></li>
                        <li><a href="http://www.nashvillesocialgroup.com/contact.php">contact</a></li>
                    </ul>

                </nav> -->
                
                 <nav id="nav-left">
                	<ul>
                    	<li><a href="<?php echo home_url(); ?>">home</a></li>
                        <li><a href="http://www.nashvillesocialgroup.com/NSG/calendar">calendar</a></li>
                        <li><a href="http://www.nashvillesocialgroup.com/NSG/events">events</a></li>
                        <!-- <li><a href="http://www.nashvillesocialgroup.com/galleries.php">galleries</a></li> -->
                        
                    </ul>
                </nav>
                
                <div class="clear"></div>
            </div>    
         </div>
        </section>
    <div class="wrapper">