(function ($) {

		/*Scrolling effect*/
		$(document).ready(function(){
		  $('a[href*=#]').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		    && location.hostname == this.hostname) {
		      var $target = $(this.hash);
		      $target = $target.length && $target
		      || $('[name=' + this.hash.slice(1) +']');
		      if ($target.length) {
		        var targetOffset = $target.offset().top - 115;
		        $('html,body')
		        .animate({scrollTop: targetOffset}, 1000);
		       return false;
		      }
		    }
		    
		  });
		});


	window.onscroll = function() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		if ( scrolled > 700 ) {
			$(".navigation").css({
				'position' : 'fixed',
				'background-color': '#f39b9b',
				'opacity': '1',
			});
		} else {
			$(".navigation").css({
				'position' : 'absolute',
				'background-color' : 'rgba(237,146,142, 0.5)',
			});			
		}
	}


})(jQuery)