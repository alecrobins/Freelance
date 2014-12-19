<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

<?php /*?><?php echo do_shortcode(' [event_search_form] ' ) ?><?php */?>

<div id="events-wrap" class="shadow">
<?php echo do_shortcode( '[events_list category="2" scope="past"]

<div id="event-single">
	<div id="event-image">
		<a href="#_EVENTURL">#_EVENTIMAGE</a>
	</div>
	
	<div id="events-info">
									
		<p class="slider-info-title"><a href="#_EVENTURL">#_EVENTNAME</a></p>
		<p class="slider-info-date">@#_EVENTTIMES <br />#_EVENTDATES</p>
	
	</div>

</div>

[/events_list]' ) ?>
<div class="clear"></div>
</div>

<div id="events-all">
    <div id="slider-title">all upcoming events</div>
    <div id="upcoming">
        <table id="upcoming-table">
                
        <?php echo do_shortcode( '[events_list]
                    
                    <tr>
                        <td id="upcoming-dot"><span style="color:#_CATEGORYCOLOR">&bull;</span></td>
                        <td id="upcoming-title"><a href="#_EVENTURL">#_EVENTNAME</a></td>
                        <td>#_EVENTDATES</td></tr>
                                                
                [/events_list]' ) ?>
        </table>
    </div>
</div>


<?php get_footer(); ?>