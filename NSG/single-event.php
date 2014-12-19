<?php get_header(); ?>

		<?php
			global $post;

			$EM_Event = em_get_event($post->ID, 'post_id');
		?>
		
        <div id="single-left" class="col-lg-8">
        	<span id="single-image"><?php echo $EM_Event->output('#_EVENTIMAGE'); ?></span>
            <div id="single-left-info">
                <h1 class="single-title"><?php echo $EM_Event->output('#_EVENTNAME'); ?></h1>
                <p id="single-date">
                    <?php echo $EM_Event->output('#_LOCATIONNAME'); ?> @ 
                    <?php echo $EM_Event->output('#_EVENTTIMES'); ?><br>
                    <?php echo $EM_Event->output('#_EVENTDATES'); ?>
                </p>
                <p id="single-notes"><?php echo $EM_Event->output('#_EVENTNOTES'); ?></p>
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        <div id="single-right" class="col-lg-4">
			<?php echo $EM_Event->output('#_LOCATIONMAP'); ?>
            
            <p id="single-location">
            	
				<?php echo $EM_Event->output('#_LOCATIONNAME'); ?><br>
            	<?php echo $EM_Event->output('#_LOCATIONADDRESS'); ?>
			</p>
        </div>
		<div class="clear"></div>

<?php get_footer(); ?>