// foundation.clearing.ie7.js
jQuery(document).ready(function() {
	$('.clearing-thumbs').wrap('<div class="clearing-assembled"><div><div class="carousel"></div></div></div>');
	$('.clearing-assembled .carousel').before('<a class="clearing-close" href="#">×</a><div style="display: none" class="visible-img"><div class="clearing-touch-label"></div><img alt="" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D"><p class="clearing-caption"></p><a class="clearing-main-prev" href="#"><span></span></a><a class="clearing-main-next" href="#"><span></span></a></div>');

	// blackout
	$('.lt-ie8 .clearing-thumbs img').click(function() {
		$('.clearing-assembled').addClass('clearing-blackout');
		$('.clearing-assembled > div').addClass('clearing-container');
		var thumbsWidth = $('.clearing-thumbs').find('li').length * 100 +'%';
		$('.clearing-thumbs').css({
			'width': thumbsWidth,
			'left': '0'
		});

		var imgSrc = $(this).parent('a').attr('href');
		$(this).parents('li').addClass('visible').siblings('li').removeClass('visible');
		$('.visible-img').show().find('img').attr('src', imgSrc);
		var marginLeft = - $('.visible-img img').width() * 0.5 + 'px';
		var marginTop = - $('.visible-img img').height() * 0.5 + 'px';
		$('.visible-img img').css({
			'visibility': 'visible',
			'margin-left': marginLeft,
			'margin-top': marginTop
		});

		var text = $(this).attr('data-caption');
		$('.visible-img .clearing-caption').text(text);

		var index = $('.clearing-thumbs li').index($('.visible'));
		var length = $('.clearing-thumbs li').length;
		if ( index == 0 ) {
			$('.clearing-main-prev').addClass('disabled');
			$('.clearing-main-next').removeClass('disabled');
		} else if ( index == length - 1){
			$('.clearing-main-prev').removeClass('disabled');
			$('.clearing-main-next').addClass('disabled');
		} else {
			$('.clearing-main-prev, .clearing-main-next').removeClass('disabled');
		};
		return false;
	});

	// close
	$('.lt-ie8 .clearing-close').click(function() {
		$(this).parents('.clearing-assembled').removeClass('clearing-blackout');
		$('.clearing-assembled > div').removeClass('clearing-container');
		$('.visible-img').hide().find('img').attr('src', 'data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D');
		$('.clearing-thumbs li').removeClass('visible');
	});

	// prev
	$('.lt-ie8 .clearing-main-prev').click(function() {
		var index = $('.clearing-thumbs li').index($('.visible'));
		if ( index != 0 ) {
			var imgSrc = $('.clearing-thumbs .visible').prev().find('a').attr('href');
			$('.visible-img').find('img').attr('src', imgSrc);
			var marginLeft = - $('.visible-img img').width() * 0.5 + 'px';
			var marginTop = - $('.visible-img img').height() * 0.5 + 'px';
			$('.visible-img img').css({
				'margin-left': marginLeft,
				'margin-top': marginTop
			});

			var text = $('.clearing-thumbs .visible').prev().find('img').attr('data-caption');
			$('.visible-img .clearing-caption').text(text);
			
			$('.clearing-thumbs .visible').removeClass('visible').prev().addClass('visible');
			$('.clearing-main-next').removeClass('disabled');

			if ( index == 1 ) {
				$(this).addClass('disabled');
			};
			return false;
		};
	});

	// next
	$('.lt-ie8 .clearing-main-next').click(function() {
		var index = $('.clearing-thumbs li').index($('.visible'));
		var length = $('.clearing-thumbs li').length;
		if ( index != length - 1 ) {
			var imgSrc = $('.clearing-thumbs .visible').next().find('a').attr('href');
			$('.visible-img').find('img').attr('src', imgSrc);
			var marginLeft = - $('.visible-img img').width() * 0.5 + 'px';
			var marginTop = - $('.visible-img img').height() * 0.5 + 'px';
			$('.visible-img img').css({
				'margin-left': marginLeft,
				'margin-top': marginTop
			});

			var text = $('.clearing-thumbs .visible').next().find('img').attr('data-caption');
			$('.visible-img .clearing-caption').text(text);

			$('.clearing-thumbs .visible').removeClass('visible').next().addClass('visible');
			$('.clearing-main-prev').removeClass('disabled');

			if ( index == length - 2 ) {
				$(this).addClass('disabled');
			};
			return false;
		}else { return false; };
	});
});

