
$(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
  }
  $('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           var d = document.createElement("div");
        d.style.height = "101%";
        d.style.overflow = "hidden";
        document.body.appendChild(d);
        window.scrollTo(0,scrollToM);
        setTimeout(function() {
        d.parentNode.removeChild(d);
            }, 10);
           return false;
         });
      }
    }
  });
});
/*! Smooth Scroll - v1.4.5 - 2012-07-22
* Copyright (c) 2012 Karl Swedberg; Licensed MIT, GPL */

$(function() {
  $("#events-upcoming-table .accordion").hide();
  $("#events-upcoming-table tr:first-child").show();
    
  $("#events-upcoming-table tr").click(function(){
      $(this).next(".accordion").toggle(200);
	
  });
});


$(function() {
  $("#top-music").hide();
  
    
  $("#music-current ul").click(function(){
      $("#top-music").slideToggle("fast");
	 
	
  });
});


<!-- Music Playlist -->

$(function() {
  $("#music-section #music-playlist").show();
    
  $("#music-album-down img").click(function(){
      $("#music-section #music-playlist").slideToggle('fast');
	 
	
  });
  
});
  

$(function() {
    
  $("#mailing-list").click(function(){
      $("#mailing-list").fadeOut("fast");
	 
  });
});



<!--Social Button Over -->

$(function(){
	$("#top-header-social a").hover(function(){
		$("img", this).stop().animate({top:"-30px"},{queue:false,duration:200});
	}, function() {
		$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
	});
});

$(function(){
	$("#footer-social a").hover(function(){
		$("img", this).stop().animate({top:"-31px"},{queue:false,duration:200});
	}, function() {
		$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
	});
});

$(function(){
	$("#top-header-subscribe #subscribe-button").hover(function(){
		$("input", this).stop().animate({top:"-21px"},{queue:false,duration:200});
	}, function() {
		$("input", this).stop().animate({top:"0px"},{queue:false,duration:200});
	});
});

$(function(){
	$("#contact-social div").hover(function(){
		$("img", this).stop().animate({top:"-57px"},{queue:false,duration:200});
	}, function() {
		$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
	});
});



<!--<script type="text/javascript">


            // Is DOM ready?
            $(document).ready(function() {

                $('#mailing-list').click(function(e){

                    // Set Cookie named 'notification'to the value 'hide'
                    $.cookie('notification', 'hide'); 

                    // Hide your Div
                    $('#mailing-list').slideUp('fast');

                    // Disable default behavior
                    e.preventDefault();
                });

                // Hide DIV is Cookie is Set
                if( $.cookie('notification') === 'hide' ){
                    $('#mailing-list').hide();
                }

            });




