$.fn.megamenu = function(options){
	var settings = {
		interval	 		: 250     	// animation time (ms)
	}
	
	var firstItemClick = 0;
	
	$(".megamenu").prepend("<li class='showhide'><span class='title'>MENU</span><span class='icon1'></span><span class='icon2'></span></li>");
	
	screenSize();
	
	$(window).resize(function() {
		screenSize();
	});
	
	function screenSize(){
		$(".megamenu").find("li, a").unbind();
		if(window.innerWidth <= 768){
			showCollapse();
			bindClick();
			if(firstItemClick == 0){
				$(".megamenu > li:not(.showhide)").hide(0);
			}
		}
		else{
			hideCollapse();
			bindHover();
		}
	}
	
	function bindHover(){
		$(".megamenu li").bind("mouseover", function(){
			$(this).children(".dropdown, .megapanel").stop().fadeIn(settings.interval);
		}).bind("mouseleave", function(){
			$(this).children(".dropdown, .megapanel").stop().fadeOut(settings.interval);
		});
	}
	
	function bindClick(){
		$(".megamenu > li > a").bind("click", function(e){
			if($(this).siblings(".dropdown, .megapanel").css("display") == "none"){
				$(this).siblings(".dropdown, .megapanel").slideDown(settings.interval);
				$(this).siblings(".dropdown").find("ul").slideDown(settings.interval);
				firstItemClick = 1;
			}
			else{
				$(this).siblings(".dropdown, .megapanel").slideUp(settings.interval);
			}
		});
	}
	
	function showCollapse(){
		$(".megamenu > li.showhide").show(0);
		$(".megamenu > li.showhide").bind("click", function(){
			if($(".megamenu > li").is(":hidden")){
				$(".megamenu > li").slideDown(300);
			}
			else{
				$(".megamenu > li:not(.showhide)").slideUp(300);
				$(".megamenu > li.showhide").show(0);
			}
		});
	}
	
	function hideCollapse(){
		$(".megamenu > li").show(0);
		$(".megamenu > li.showhide").hide(0);
	}
}