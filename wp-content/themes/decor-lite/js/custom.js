jQuery(window).load(function() {
		if(jQuery('#slider') > 0) {
        jQuery('.nivoSlider').nivoSlider({
        	effect:'fade',
    });
		} else {
			jQuery('#slider').nivoSlider({
        	effect:'fade',
    });
		}
});
// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() {
	jQuery(".sitenav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) {
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".sitenav").slideToggle('fast');
	});
	adjustMenu();
})
// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});
var adjustMenu = function() {
	if (ww < 981) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".sitenav").hide();
		} else {
			jQuery(".sitenav").show();
		}
		jQuery(".sitenav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".sitenav").show();
		jQuery(".sitenav li").removeClass("hover");
		jQuery(".sitenav li a").unbind('click');
		jQuery(".sitenav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

var toggleArrow = {
	up: 'https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-512.png',
	down: 'https://i0.wp.com/www.nordbahnhalle.org/wp-content/uploads/2017/04/select-arrow-down.png?ssl=1',
	action: function (t) {
		if(t.hasClass("arrow-down")) {
			t.removeClass("arrow-down");
			t.addClass("arrow-up");
			t.attr('src',toggleArrow.up);
			t.parent().next().show();
		} else {
			t.removeClass("arrow-up");
			t.addClass("arrow-down");
			t.attr('src',toggleArrow.down);
			t.parent().next().hide();
		}
	}
}

jQuery(document).ready(function() {
  	jQuery('.srchicon').click(function() {
			jQuery('.searchtop').toggle();
			jQuery('.topsocial').toggle();
		});
		jQuery('.qa-list .arrow').on('click', function () {
			toggleArrow.action(jQuery(this));
		})
});
jQuery(document).ready(function() {
        jQuery('.slide_info h2').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;
            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together
            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});
