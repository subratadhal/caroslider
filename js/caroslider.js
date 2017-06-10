

var subu;

(function($) {
    $.fn.caroslider = function() {
		
	subu = $(this).attr('id');

	if($("#"+subu).length){
	
		var totalImages = $("#"+subu+" > li").length, 
			imageWidth = $("#"+subu+" > li:first").outerWidth(true),
			totalWidth = imageWidth * totalImages,
			visibleImages = Math.round($("#"+subu+"-wrapper").width() / imageWidth),
			visibleWidth = visibleImages * imageWidth,
			stopPosition = (visibleWidth - totalWidth);
			
		$("#"+subu).width(totalWidth);
		
		$("#subuprev").on("click", function(){
			if($("#"+subu).position().left < 0 && !$("#"+subu).is(":animated")){
				$("#"+subu).animate({left : "+=" + imageWidth + "px"});
			}
			return false;
		});
		
		$("#subunext").on("click", function(){
			if($("#"+subu).position().left > stopPosition && !$("#"+subu).is(":animated")){
				$("#"+subu).animate({left : "-=" + imageWidth + "px"});
			}
			return false;
		});
	}


    };
})(jQuery);





