jQuery( function ($) {
	/*
	 * Add Placeholder support 	*/
	if (!Modernizr.input.placeholder) {
		var placeHolderInputs = $('input[placeholder]');
		
		placeHolderInputs.each( function () {
			var input = $(this),
				placeHolderText = $(this).attr('placeholder');
			
			input.data('placeholder', placeHolderText);
			if (this.value === '') {
				this.value = placeHolderText;
			}
		});
		
		placeHolderInputs.live('focus blur', function (e) {			
			var placeHolderText = $(this).attr('placeholder');
			if (e.type === 'focusin') {
				if (this.value === placeHolderText) {
					this.value = '';
				} else {
					$(this).select();
				}
			} else {
				if (this.value === '') {
					this.value = $(this).attr('placeholder');
				}
			}
		});
	}
	
	/*
	 * Artist slider */
	( function () {
		if ($('body.frontpage').length === 0) {
			return false;
		}
		
		var sliderWrap = $('#artists ul');
		var interval, timeout;
		
		var slideInterval =  7000;
		
		var slider = function () {
			var firstElem = sliderWrap.children('li:first');
	
			firstElem.animate({
				'marginTop': '-' + firstElem.height()
			}, 1000, function () {
				firstElem.appendTo(sliderWrap).removeAttr('style');
			});
		};
	
		interval = setInterval(slider, slideInterval);		
		
		sliderWrap.hover( function (e) {
			clearInterval(interval);
			clearTimeout(timeout);
		}, function () {
			timeout = setTimeout( function () {
				interval = setInterval(slider);
			}, 5000)
		});
	})();
	
	/*
	 * News slider */
	( function () {
		var newsWrap = $('#featured');
			newsNav = newsWrap.find('nav'),
			slideButtons = newsNav.find('li'),
			slides = newsWrap.find('ul.slides li');
			
		var amount = slides.length;
		var slideTime = 6000,
			fadeTime = 800;
		
		
		var interval, next;
		var currentI = 1;
		
		// Hide every slide but the first
		slides.hide().filter('.current').show();
	
		var slider = function () {
			var current = slides.filter('.current');
			
			if (amount === currentI) {
				// At the last slide, start over again
				next = $('#slide-1');
				currentI = 1;
			} else {
				// Go to next slide
				currentI++;
				next = $('#slide-' + currentI);
			}
			
			// Fadeout current slide
			current.fadeOut(fadeTime).removeClass('current');
			
			// Fadein next slide
			next.fadeIn(fadeTime).addClass('current');
			
			// Update the navigation with correct slide
			slideButtons.removeClass('current');
			slideButtons.eq(currentI - 1).addClass('current');
		};
	
		// Start the slider
		interval = setInterval(slider, slideTime);
		
		newsNav.delegate('a', 'click', function (e) {
			e.preventDefault();
			
			// Don't slide when clicking the same slide that is currently active
			if (parseInt(this.innerHTML) === currentI) {
				return false;
			}
			
			// Reset the slide timer
			clearInterval(interval);
			interval = setInterval(slider, slideTime);
			
			// Update current slide integer
			currentI = parseInt(this.innerHTML);
			
			// Update the navigation with correct slide
			slideButtons.removeClass('current');
			$(this).parent().addClass('current');
			
			// Fadeout current slide
			slides.removeClass('current');
			slides.filter(':not(:hidden)').addClass('current').fadeOut(fadeTime);
			
			// Fadein clicked slide
			$(this.hash).fadeIn(fadeTime);
		});
	})();
	 
	/*
	 * Print program button */
	( function () {
		var printContainer = $('#printer');
		
		if (printContainer.length > 0) {
			var button = printContainer.find('a:first'),
				popdown = printContainer.find('.popdown').hide();
			
			button.click( function (e) {
				e.preventDefault();
				
				// Toggle the dropdown
				popdown.toggle();
			});
			
			$(document).bind('click keydown', function (e) {
				// Hide if clicked outside it's container, or escape key is clicked
				if (!$.contains(printContainer[0], e.target) || e.type === 'keydown' && e.keyCode === 27) {
					popdown.hide();
				}
			});
		}
	})();
	 
	/*
	 * Short url - text selector */
	( function () {
		var input = $('div.short-url input');
		if (input.length > 0) {
			input.focus( function () {
				$(this).select();
			});
		}
	})();
	
	/*
	 * Cool submit buttons */
	( function () {
		if (!Modernizr.borderradius) {
			var submits = $('input[type="submit"]');
			
			submits.each( function () {
				$(this).wrap('<span class="cool-sub" />');
			})
		}
	})();
});