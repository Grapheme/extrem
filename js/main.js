var Slider = (function(){
	var $container = $('.ice-cream-slider');
	var $slide = $('.ice-cream-slider .slide');
	var $desc = $('.desc-slide');
	var $current;
	var $currentDesc;
	var $size = $slide.length;
	var $next = $('.arrow-right');
	var $prev = $('.arrow-left');
	var $arrow = $('[data-arrow]');
	var $main = $('main');

	return {
		init: function() {
			$slide.first().addClass('active');
			$desc.first().addClass('active');
			$current = $('.slide.active').index();
			$currentDesc = $('.desc-slide.active');

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
				$currentDesc = $('.desc-slide.active').removeClass('active').addClass('passed').next().addClass('active').index();
				$arrow.attr({'data-arrow': $current});
				$main.attr({'data-bg': $current});
				$('#popupCont').attr('data-taste', $current-1);
				$miniFotorama.data('fotorama').show($current-1);

				if ($current == $size) {
					$next.addClass('disabled');
				}
			}

			console.log($current, $size);
		},

		prev: function() {
			if ($next.hasClass('disabled')) {
				$next.removeClass('disabled');
			}

			if ($current > 0) {
				$current = $('.slide.active').removeClass('active').prev().addClass('active').removeClass('passed').index();
				$currentDesc = $('.desc-slide.active').removeClass('active').prev().addClass('active').removeClass('passed').index();
				$arrow.attr({'data-arrow': $current});
				$main.attr({'data-bg': $current});
				$('#popupCont').attr('data-taste', $current-1);
				$miniFotorama.data('fotorama').show($current-1);

				if ($current === 1) {
					$prev.addClass('disabled');
				}
			}
		}
	};
})();

var Popup = (function(){
	var $popup_1 = $('[data-popup="1"]'),
		$popup_2 = $('[data-popup="2"]'),
		$popup_3 = $('[data-popup="3"]'),
		$popup_4 = $('[data-popup="4"]'),
		$popup_5 = $('[data-popup="5"]'),
		$close = $('.popup-close'),
		$overlay = $('.overlay'),
		$popupArr = $('.popup'),
		$mainWrapper = $('.main-wrapper'),

		$photoTrggr = $('#app'),
		$advicesTrggr = $('#advices'),
		$eventsTrggr = $('#events'),
		$bloggers = $('#bloggers');

	function openPopup(elem) {
		$overlay.removeClass('hidden');
		elem.removeClass('hidden').addClass('active');
		setTimeout( function(){
			var $height1 = $('.popup.active .column-content').height() + 430;
			var $height2 = $mainWrapper.height();
			var finishHeight = ($height1 >= $height2)? $height1: $height2;
			$overlay.height( finishHeight );
			$mainWrapper.height( finishHeight );
		}, 100);
	}
	function closePopup() {
		$overlay.addClass('hidden').removeAttr('style');
		$mainWrapper.removeAttr('style');
		$popupArr.addClass('hidden');
		$('#load-photo').removeClass('uploaded');
	}

	$(document).on('click', '#app, #app2', function(){
		openPopup($popup_3);
	});
	$(document).on('click', '#advices', function(){
		openPopup($popup_1);
	});
	$(document).on('click', '#events', function(){
		openPopup($popup_5);
	});
	$(document).on('click', '#bloggers', function(){
		openPopup($popup_2);
	});
	$(document).on('click', '.popup', function(e){
		e.stopPropagation();
	});
	$(document).on('click', '.popup-close, .overlay', function(){
		closePopup();
	});
	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			e.preventDefault();
			closePopup();
		}   // esc
	});

	var slide_allow = true;
	$(document).on('click', '.column-list li', function(){
		if(!slide_allow) return;
		slide_allow = false;
		$(this).slideUp();
		$('.column-list li').not(':visible').slideDown();
		$('.column-content').addClass('hidden');
		$('.column-content').eq($(this).index()).removeClass('hidden');
		setTimeout(function(){
			slide_allow = true;
		}, 500);
	});

	/* Filters in popup */
	function changeHeader(elem) {
		var boundIndex = elem.data('filter');
		var headBlocks = $('#popupCont .popup-header [data-filter]');
		var headBlock = $('#popupCont .popup-header [data-filter="' + boundIndex + '"]');
		var fotorama = $('.advice-fotorama:visible');
		var fotoramaApi = fotorama.data('fotorama');
		var taste = fotorama.data('taste');
		console.log(fotorama);

		headBlocks.addClass('hidden');
		headBlock.removeClass('hidden');

		fotorama.data('fotorama').destroy();
		fotorama.empty().append($fotoramaContElems[taste].filter('[data-filter="' + boundIndex + '"]'));
		setTimeout( function(){
			fotorama.fotorama({
				nav: false,
				width: '848',
				height: '550',
				arrows: 'always'
			});
		}, 100);
		return fotorama.data('fotorama');
	}
	$(document).on('click', '.cat-li', function(){
		var api = changeHeader($(this));
		$('.cat-li').removeClass('active');
		$(this).addClass('active');
		setTimeout(function(){ api.show('<<'); }, 100);
	});

	return {
		open: openPopup,
		close: closePopup,
		changeHeader: changeHeader
	};

})();

Slider.init();

$(document).ready(function(){
	$('button.photo-save').click(function(e){
		$(this).html('Пожалуйста подождите ...');
	});
});

var Share = {
    vkontakte: function(purl, ptitle, pimg, text) {
        url  = 'http://vkontakte.ru/share.php?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&image='       + encodeURIComponent(pimg);
        url += '&noparse=true';
        Share.popup(url);
    },
    odnoklassniki: function(purl, text) {
        url  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
        url += '&st.comments=' + encodeURIComponent(text);
        url += '&st._surl='    + encodeURIComponent(purl);
        Share.popup(url);
    },
    facebook: function(purl, ptitle, pimg, text) {
        url  = 'http://www.facebook.com/sharer.php?s=100';
        url += '&p[title]='     + encodeURIComponent(ptitle);
        url += '&p[summary]='   + encodeURIComponent(text);
        url += '&p[url]='       + encodeURIComponent(purl);
        url += '&p[images][0]=' + encodeURIComponent(pimg);
        Share.popup(url);
    },
    twitter: function(purl, ptitle) {
        url  = 'http://twitter.com/share?';
        url += 'text='      + encodeURIComponent(ptitle);
        url += '&url='      + encodeURIComponent(purl);
        url += '&counturl=' + encodeURIComponent(purl);
        Share.popup(url);
    },
    mailru: function(purl, ptitle, pimg, text) {
        url  = 'http://connect.mail.ru/share?';
        url += 'url='          + encodeURIComponent(purl);
        url += '&title='       + encodeURIComponent(ptitle);
        url += '&description=' + encodeURIComponent(text);
        url += '&imageurl='    + encodeURIComponent(pimg);
        Share.popup(url)
    },
    
            me : function(el){
console.log(el.href);                
                Share.popup(el.href);
                return false;                
            },

    popup: function(url) {
        window.open(url,'','toolbar=0,status=0,width=626,height=436');
    }
};



