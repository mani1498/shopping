//var BaseUrl = $('meta[name=BaseUrl]').attr("content");
$(document).ready(function() {
	
		$('.fancybox').fancybox();
		// Change title type, overlay closing speed
				$("#fancybox-manual-a").click(function() {
				$.fancybox.open('<iframe width="620" height="415" src="//www.youtube.com/embed/epXPJqGmpG4" frameborder="0" allowfullscreen></iframe>');
			});
			$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true
			});
		});
	$('.most_content').bxSlider({
	  minSlides: 1,
	  maxSlides: 5,
	  slideWidth: 165,
	  slideMargin: 17,
	  auto:false
	});
	/*window.onbeforeunload = function() {
    return "Are you sure?";
 	};
	window.onunload = function() {
    alert('');
 	};*/

	});