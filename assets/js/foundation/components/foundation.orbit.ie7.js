// foundation.orbit.ie7.js
jQuery(document).ready(function() {
	// prepare
	$('.lt-ie8 [data-orbit]').addClass('orbit-slides-container').wrap('<div class="orbit-container"></div>');
	$('.lt-ie8 .orbit-container').append('<a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a><!--<div class="orbit-timer paused"><span></span><div class="orbit-progress" style="width: 12.76%;"></div></div>--><div class="orbit-slide-number"><span>1</span> of <span></span></div><div class="orbit-bullets-container"><ol class="orbit-bullets"></ol></div>');
	for (var i = 0; i < $('.lt-ie8 [data-orbit] li').length; i++) {
		$('.lt-ie8 .orbit-bullets').append('<li data-orbit-slide=""></li>');
		$('.lt-ie8 .orbit-bullets li').eq(i).attr('data-orbit-slide', i);
	};
	
	$('.lt-ie8 .orbit-slide-number span:last').text($('[data-orbit] li').length);

	var sliderHeight = $('.lt-ie8 [data-orbit] > *:first').outerHeight();
	$('.lt-ie8 [data-orbit]').height(sliderHeight);
	$('.lt-ie8 [data-orbit] > *:first, .lt-ie8 .orbit-bullets li:first').addClass('active').siblings().removeClass('active');
	$('.lt-ie8 [data-orbit] > *:first').css('margin-left', '0');

	// varibles
	var $sliderContainer = $('.orbit-container').find('.orbit-slides-container');
	// functions
	function moveLeftActive () {
		$sliderContainer.find('.active').css('z-index', '2')
			.animate({
				'margin-left': '-100%'},
				400, function() {
				$(this).css('margin-left', '100%');
			});
	}
	function moveLeftThis (express) {
		express.css({'z-index': '4','margin-left': '100%'}).animate({'margin-left': '0'}, 400).addClass('active')
			.siblings().removeClass('active').css('margin-left', '100%');
	}
	function moveRightActive () {
		$sliderContainer.find('.active').css('z-index', '2')
		.animate({'margin-left': '100%' }, 400);
	}
	function moveRightThis (express) {
		express.css({'z-index': '4','margin-left': '-100%'}).animate({'margin-left': '0'}, 400).addClass('active')
		.siblings().removeClass('active').css('margin-left', '100%');;
	}
	function bulletsAddClass (express) {
		express.addClass('active').siblings().removeClass('active');
	}
	function sliderNumber (express) {
		$('.orbit-slide-number span:first').text(express);
	}
	function sliderContainerHeight (express) {
		$sliderContainer.height(express.height());
	}
	// bullets
	$('.lt-ie8 .orbit-bullets li').click(function() {
		if ( $(this).hasClass('active') ) {
			return false;
		} else{
			var thisOrder = $(this).parent().find('li').index(this);
			var activeOrder = $(this).parent().find('li').index($(this).parent().find('.active'));
			if ( thisOrder > activeOrder ) {
				sliderContainerHeight($sliderContainer.find('.active').next());
				moveLeftActive();
				moveLeftThis($sliderContainer.find('li').eq($(this).parent().find('li').index(this)));
			} else {
				sliderContainerHeight($sliderContainer.find('.active').prev());
				moveRightActive();
				moveRightThis($sliderContainer.find('li').eq($(this).parent().find('li').index(this)));
			};
			bulletsAddClass($(this));
			sliderNumber($(this).parent().find('li').index(this) + 1);
		};
	});
	
	// preview
	$('.lt-ie8 .orbit-prev').click(function() {
		var activeOrder = $sliderContainer.find('li').index($sliderContainer.find('.active')); 
		moveRightActive();
		if ( activeOrder == 0 ) {
			sliderContainerHeight($sliderContainer.find('li:last'));
			moveRightThis($sliderContainer.find('li:last'));
			bulletsAddClass($('.orbit-bullets li:last'));
			sliderNumber($sliderContainer.find('li').length);
			return false;
		} else {
			sliderContainerHeight($sliderContainer.find('.active').prev());
			moveRightThis($sliderContainer.find('.active').prev());
			bulletsAddClass($('.orbit-bullets .active').prev());
			sliderNumber($sliderContainer.find('li').index($sliderContainer.find('.active')) + 1);
			return false;
		};
	});

	// next
	$('.lt-ie8 .orbit-next').click(function() {
		var activeOrder = $sliderContainer.find('li').index($sliderContainer.find('.active')); 
		moveLeftActive();
		if ( activeOrder == $sliderContainer.find('li').length - 1 ) {
			sliderContainerHeight($sliderContainer.find('li:first'));
			moveLeftThis($sliderContainer.find('li:first'));
			bulletsAddClass($('.orbit-bullets li:first'));
			sliderNumber('1');
			return false;
		} else {
			sliderContainerHeight($sliderContainer.find('.active').next());
			moveLeftThis($sliderContainer.find('.active').next());
			bulletsAddClass($('.orbit-bullets .active').next());
			sliderNumber($sliderContainer.find('li').index($sliderContainer.find('.active')) + 1);
			return false;
		};
	});
});

