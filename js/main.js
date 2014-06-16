var Slider = (function(){
	var $container = $('.ice-cream-slider');
	var $slide = $('.slide');
	var $current;
	var $size = $slide.length - 1;
	var $next = $('.arrow-right');
	var $prev = $('.arrow-left');

	return {
		init: function() {
			$slide.first().addClass('active');
			$current = $('.slide.active').index();

			$(document).on('click', '.arrow-right', function(){
				if ( $(this).hasClass('disabled') ) {
					return;
				}
				Slider.next();
			});
			$(document).on('click', '.arrow-left', function(){
				if ( $(this).hasClass('disabled') ) {
					return;
				}
				Slider.prev();
			});
		},

		next: function() {
			if ($prev.hasClass('disabled')) {
				$prev.removeClass('disabled');
			}

			if ($current < $size) {
				$current = $('.slide.active').removeClass('active').addClass('passed').next().addClass('active').index();

				if ($current == $size) {
					$next.addClass('disabled');
				}
			}
		},

		prev: function() {
			if ($next.hasClass('disabled')) {
				$next.removeClass('disabled');
			}

			if ($current > 0) {
				$current = $('.slide.active').removeClass('active').prev().addClass('active').removeClass('passed').index();

				if ($current === 0) {
					$prev.addClass('disabled');
				}
			}
		}
	};
})();

Slider.init();
