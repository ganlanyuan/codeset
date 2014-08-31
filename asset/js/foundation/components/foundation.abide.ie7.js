// abide.ie7.js
jQuery(document).ready(function() {
	// varibles
	var name = /^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}$/;
	var alpha = /^[a-zA-Z]+$/;
	var alpha_numeric  = /^[a-zA-Z0-9]+$/;
	var integer = /^\d+$/;
	var number = /-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?/;

	// generic password: upper-case, lower-case, number/special character, and min 8 characters
	var password = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

	// amex, visa, diners
	var card = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
	var cvv  = /^([0-9]){3,4}$/;

	// http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#valid-e-mail-address
	var email = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	var url = /(https?|ftp|file|ssh):\/\/(((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?/;
	// abc.de
	var domain = /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/;

	var datetime = /([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/;
	// YYYY-MM-DD
	var date = /(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))/;
	// HH:MM:SS
	var time = /(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}/;
	var dateISO = /\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}/;
	// MM/DD/YYYY
	var month_day_year = /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;

	// #FFF or #FFFFFF
	var color = /^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/;

	// email,url
	function blurError (tag, pattern) {
		$(tag).blur(function() {
			if ( pattern.test($(this).val()) ) {
				$(this).parent().parent().removeClass('error');
			} else{
				$(this).parent().parent().addClass('error');
			};
		});
	};
	// username
	function blurUsernameError (tag, pattern) {
		$(tag).blur(function() {
			if ( $(this).attr('name').toLowerCase() == 'username' && pattern.test($(this).val()) ) {
				$(this).parent().parent().removeClass('error');
			} else{
				$(this).parent().parent().addClass('error');
			};
		});
	};
	// password
	function blurPasswordError (tag, pattern) {
		$(tag).blur(function() {
			if( $(this).attr('data-equalto') == 'password' ){
				var id1 = $(this).attr('data-equalto');
				var val1 = $(this).val();
				for (var i = 0; i < $('input[type="password"][id]').length; i++) {
					var id2 = $('input[type="password"][id]').eq(i).attr('id');
					if ( id2 == id1 ) {
						var val2 = $('input[type="password"][id]').eq(i).val();
						if ( val1 == val2 ) {
							$(this).parent().parent().removeClass('error');
						} else{
							$(this).parent().parent().addClass('error');
						};
					};
				};
			} else {
				if ( pattern.test($(this).val()) ) {
					$(this).parent().parent().removeClass('error');
				} else{
					$(this).parent().parent().addClass('error');
				};
			};
		});
	};
	// checkbox
	function clickCheckboxError (tag) {
		$(tag).click(function() {
			if ( $(this).is(':checked') ) {
				$(this).parent().removeClass('error');
			} else{
				$(this).parent().addClass('error');
			};
		});
	};
	// keyup

	// check
	$('.lt-ie8 [required]').each(function() {
		var thisTag = $(this).prop('tagName').toLowerCase();
		if ( thisTag == 'input' ) {
			var thisType = $(this).attr('type').toLowerCase();
			switch ( thisType ){
				case 'text':
				blurUsernameError(this, name);
				break;

				case 'email':
				blurError(this, email);
				break;

				case 'password':
				blurPasswordError(this, password);
				break;

				case 'date':
				blurError(this, date);
				break;

				case 'datetime':
				blurError(this, datetime);
				break;

				case 'time':
				blurError(this, time);
				break;

				case 'color':
				blurError(this, color);
				break;

				case 'url':
				blurError(this, url);
				break;

				case 'checkbox':
				clickCheckboxError(this);
				break;

				// case 'radio':
				// clickRadioError(this);
				// break;
			};
		};
	});

	// select functions
	$('.lt-ie8 select[required]').each(function() {
		$(this).blur(function() {
			if ( $(this).val() == '' ) {
				$(this).parent().parent().addClass('error');
			} else{
				$(this).parent().parent().removeClass('error');
			};
		});
	});

	// submit
	$('.lt-ie8 [type="submit"]').click(function() {
		var $form = $(this).parents('form');
		$form.find('[name="username"][required], [type="email"][required], [type="password"][required], [type="date"][required], [type="datetime"][required], [type="datetime-local"][required], [type="time"][required], [type="color"][required], [type="month"][required], [type="week"][required], [type="number"][required], [type="tel"][required], [type="password"][required], [type="url"][required] ').trigger('blur');
		$form.find('select[required]').trigger('blur');
		$form.find('[type="checkbox"]:not(:checked)').parent().addClass('error');
		if ( $form.find('.error:visible').length > 1 ) {
			return false;
		};
	});

});

