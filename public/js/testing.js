

(function($){
	var password = document.querySelector('.password');

	var helperText = {
		charLength: document.querySelector('.helper-text .length'),
		lowercase: document.querySelector('.helper-text .lowercase'),
		uppercase: document.querySelector('.helper-text .uppercase'),
		special: document.querySelector('.helper-text .special')
	};

	var pattern = {
		charLength: function() {
			if( password.value.length >= 8 ) {
				return true;
			}
		},
		lowercase: function() {
			var regex = /^(?=.*[a-z]).+$/;
			if( regex.test(password.value) ) {
				return true;
			}
		},
		uppercase: function() {
			var regex = /^(?=.*[A-Z]).+$/;
			if( regex.test(password.value) ) {
				return true;
			}
		},
		special: function() {
			var regex = /^(?=.*[0-9_\W]).+$/;
			if( regex.test(password.value) ) {
				return true;
			}
		}
	};

	password.addEventListener('keyup', function (){
		patternTest( pattern.charLength(), helperText.charLength );
		patternTest( pattern.lowercase(), helperText.lowercase );
		patternTest( pattern.uppercase(), helperText.uppercase );
		patternTest( pattern.special(), helperText.special );

		if( hasClass(helperText.charLength, 'valid') &&
	    	hasClass(helperText.lowercase, 'valid') &&
	    	hasClass(helperText.uppercase, 'valid') &&
	    	hasClass(helperText.special, 'valid')) {
	    addClass(password.parentElement, 'valid');
		} else {
			removeClass(password.parentElement, 'valid');
		}
	});

	function patternTest(pattern, response) {
		if(pattern) {
			addClass(response, 'valid');
		}
		else {
			removeClass(response, 'valid');
		}
	}

	function addClass(el, className) {
		if (el.classList) {
			el.classList.add(className);
		}
		else {
			el.className += ' ' + className;
		}
	}

	function removeClass(el, className) {
		if (el.classList)
			el.classList.remove(className);
		else
			el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}

	function hasClass(el, className) {
		if (el.classList) {
			console.log(el.classList);
			return el.classList.contains(className);
		}
		else {
			new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
		}
	}

	$.toggleShowPassword = function (options) {
		var settings = $.extend({
			field: "#password",
			control: ".js-show-pass",
		}, options);

		var control = $(settings.control);
		var field = $(settings.field)

		control.bind('click', function () {
			if (control.is(':checked')) {
				field.attr('type', 'text');
			} else {
				field.attr('type', 'password');
			}
		})
	};
}(jQuery));

$.toggleShowPassword({
	field: '#password',
	control: '.js-toggle-pass'
});
