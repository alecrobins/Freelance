/*Music Player*/
  $(function(){
			
			$(".audio").mb_miniPlayer({
				width:100,
				inLine:false
			});

		});

//Expand Credit

$(document).ready(function(){
	$("#expanderHead").click(function(){
		$("#expanderContent").slideToggle();
		if ($("#expanderSign").text() == "+"){
			$("#expanderSign").html("−")
		}
		else {
			$("#expanderSign").text("+")
		}
	});
});
		
/*Music Wrap Hover On*/ 
   $(document).ready(function(e) {

    var links = $('.music_wrap');

     $('div.music_wrap').hover(
         function () {
             $(this).toggleClass('activelink', true);
         }, 
         function () {
                $(this).toggleClass('activelink', false);
         }
     );
	
	     e.stopPropagation();


   });

/*Html 5 in IE*/
function IEHtmlStyle() {

	var tags = [
		{ 'tag': 'article', 'display': 'block' },
		{ 'tag': 'aside', 'display': 'block' },
		{ 'tag': 'audio', 'display': 'auto' },
		{ 'tag': 'canvas', 'display': 'auto' },
		{ 'tag': 'command', 'display': 'auto' },
		{ 'tag': 'datalist', 'display': 'auto' },
		{ 'tag': 'details', 'display': 'block' },
		{ 'tag': 'embed', 'display': 'auto' },
		{ 'tag': 'figcaption', 'display': 'block' },
		{ 'tag': 'figure', 'display': 'block' },
		{ 'tag': 'footer', 'display': 'block' },
		{ 'tag': 'header', 'display': 'block' },
		{ 'tag': 'hgroup', 'display': 'block' },
		{ 'tag': 'keygen', 'display': 'inline-block' },
		{ 'tag': 'mark', 'display': 'auto' },
		{ 'tag': 'meter', 'display': 'inline-block' },
		{ 'tag': 'nav', 'display': 'block' },
		{ 'tag': 'output', 'display': 'inline' },
		{ 'tag': 'progress', 'display': 'inline-block' },
		{ 'tag': 'rp', 'display': 'auto' },
		{ 'tag': 'rt', 'display': 'auto' },
		{ 'tag': 'ruby', 'display': 'auto' },
		{ 'tag': 'section', 'display': 'block' },
		{ 'tag': 'source', 'display': 'auto' },
		{ 'tag': 'summary', 'display': 'block' },
		{ 'tag': 'time', 'display': 'auto' },
		{ 'tag': 'video', 'display': 'auto' },
		{ 'tag': 'wbr', 'display': 'auto' }
	];

	this.reg = function() {

		for (var i = 0; i < tags.length; i++) {
			document.createElement(tags[i].tag);
		}

	};

}

var iehs = new IEHtmlStyle();
iehs.reg();

