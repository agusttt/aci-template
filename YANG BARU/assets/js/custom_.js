// (function () {
// 	'use strict';
// 	window.addEventListener('load', function () {
// 		// Fetch all the forms we want to apply custom Bootstrap validation styles to
// 		var forms = document.getElementsByClassName('needs-validation');
// 		// Loop over them and prevent submission
// 		var validation = Array.prototype.filter.call(forms, function (form) {
// 			form.addEventListener('submit', function (event) {
// 				if (form.checkValidity() === false) {
// 					event.preventDefault();
// 					event.stopPropagation();
// 				}
// 				form.classList.add('was-validated');
// 			}, false);
// 		});
// 	}, false);
// })();
// jQuery('body').bind('click', function (e) {
// 	if (jQuery(e.target).closest('.navbar').length == 0) {
// 		// click happened outside of .navbar, so hide
// 		var opened = jQuery('.navbar-collapse').hasClass('collapse in');
// 		if (opened === true) {
// 			jQuery('.navbar-collapse').collapse('hide');
// 			$('#responsive_am').removeClass('active-burger-nav');
// 		}
// 	}
// });

// $(window).scroll(function () {
// 	var scroll = $(window).scrollTop();
// 	if (scroll >= 12) {

// 		$(".header").addClass("swipe-up-nav");
// 		$(".logo-white").addClass("logo-white-block");
// 		$(".btn-red-right").addClass("btn-red-right-block");
// 		$(".header-mobile").addClass("header-mobile-swipe");
// 		$(".navigation-bar").addClass("bg-light-white");
// 		$(".collapse-navbar-ykan").addClass("black-nav");
// 		$(".caret-down-white").addClass("caret-down");
// 		$(".logo-ykan-footer").addClass("logo-ykan-footer-hidden");
// 		$(".logo-ykan-header").addClass("logo-ykan-header-show");
// 		$(".all-menu-mobile").addClass("all-menu-mobile-swipe");
// 	} else {
// 		$(".logo-white").removeClass("logo-white-block");
// 		$(".header").removeClass("swipe-up-nav");
// 		$(".btn-red-right").removeClass("btn-red-right-block");
// 		$(".header-mobile").removeClass("header-mobile-swipe");
// 		$(".navigation-bar").removeClass("bg-light-white");
// 		$(".collapse-navbar-ykan").removeClass("black-nav");
// 		$(".caret-down-white").removeClass("caret-down");
// 		$(".logo-ykan-footer").removeClass("logo-ykan-footer-hidden");
// 		$(".logo-ykan-header").removeClass("logo-ykan-header-show");
// 		$(".all-menu-mobile").removeClass("all-menu-mobile-swipe");
// 	}
// });



// $('.selecttodonation').select2({
// 	allowClear: false,
// 	minimumResultsForSearch: Infinity
// });

// $(".search-icon").click(function (e) {
// 	e.preventDefault();
// 	jQuery('.navbar-collapse').collapse('hide');
// 	$('#responsive_am').removeClass('active-burger-nav');

// 	if ($("#content-search-form").hasClass("search-content-form-active")) {
// 		$('#content-search-form').removeClass('search-content-form-active');
// 		$('.container-search-transparent').removeClass('active');
// 		$('.search-header-span').removeClass('active-search-header');
// 		$('#content-search-form').addClass('search-content-form');
// 	} else {
// 		$('.search-header-span').addClass('active-search-header');
// 		$('.container-search-transparent').addClass('active');
// 		$('#content-search-form').addClass('search-content-form-active');
// 		$('#content-search-form').removeClass('search-content-form');
// 	}
// });

// $(".trigger-mm").click(function (e) {
// 	e.preventDefault();
// 	if ($('.dropdown-menu-list').hasClass("active")) {
// 		$('.dropdown-menu-list').removeClass('active');
// 		$(document.body).removeClass("unscrolled");
// 	} else {
// 		$(".dropdown-menu-list").addClass("active");
// 		$(document.body).addClass("unscrolled");
// 	}
// });

// $(".find-mobile").click(function (x) {
// 	x.preventDefault();
// 	if ($('.search-bar-mobile').hasClass("active")) {
// 		$('.search-bar-mobile').removeClass('active');
// 	} else {
// 		$(".search-bar-mobile").addClass("active");
// 		// $('.container-search-transparent').addClass('active');
// 	}
// });

// $("#close-box-search").click(function (e) {
// 	e.preventDefault();
// 	$('.container-search-transparent').removeClass('active');
// 	$('.search-header-span').removeClass('active-search-header');
// 	$('#content-search-form').removeClass('search-content-form-active');
// 	$('#content-search-form').addClass('search-content-form');
// });

// $(".parallax-mirror").css({ "height": "100%", "width": "100%", "margin-top": "90px" });
// $(".parallax-mirror-two").css({ "height": "100%", "width": "100%", "margin-top": "90px" });

// var forEach = function (t, o, r) { if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t); else for (var e = 0, l = t.length; l > e; e++)o.call(r, t[e], e, t) };

// var hamburgers = document.querySelectorAll(".hamburger");
// if (hamburgers.length > 0) {
// 	forEach(hamburgers, function (hamburger) {
// 		hamburger.addEventListener("click", function () {
// 			this.classList.toggle("is-active");
// 		}, false);
// 	});
// }

jQuery('body').bind('click', function (e) {
	if (jQuery(e.target).closest('.navbar').length == 0) {
		// click happened outside of .navbar, so hide
		var opened = jQuery('.navbar-collapse').hasClass('collapse in');
		if (opened === true) {
			jQuery('.navbar-collapse').collapse('hide');
			$('#responsive_am').removeClass('active-burger-nav');
		}
	}
});

jQuery(document).ready(function ($) {



	//open/close mega-navigation
	$('.cd-dropdown-trigger').on('click', function (event) {
		event.preventDefault();
		toggleNav();
	});

	//close meganavigation
	$('.cd-dropdown .cd-close').on('click', function (event) {
		event.preventDefault();
		toggleNav();
	});

	//on mobile - open submenu
	$('.has-children').children('a').on('click', function (event) {
		//prevent default clicking on direct children of .has-children 
		event.preventDefault();
		var selected = $(this);
		selected.next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('move-out');
	});

	//on desktop - differentiate between a user trying to hover over a dropdown item vs trying to navigate into a submenu's contents
	var submenuDirection = (!$('.cd-dropdown-wrapper').hasClass('open-to-left')) ? 'right' : 'left';
	$('.cd-dropdown-content').menuAim({
		activate: function (row) {
			$(row).children().addClass('is-active').removeClass('fade-out');
			if ($('.cd-dropdown-content .fade-in').length == 0) $(row).children('ul').addClass('fade-in');
		},
		deactivate: function (row) {
			$(row).children().removeClass('is-active');
			if ($('li.has-children:hover').length == 0 || $('li.has-children:hover').is($(row))) {
				$('.cd-dropdown-content').find('.fade-in').removeClass('fade-in');
				$(row).children('ul').addClass('fade-out')
			}
		},
		exitMenu: function () {
			$('.cd-dropdown-content').find('.is-active').removeClass('is-active');
			return true;
		},
		submenuDirection: submenuDirection,
	});

	//submenu items - go back link
	$('.go-back').on('click', function () {
		var selected = $(this),
			visibleNav = $(this).parent('ul').parent('.has-children').parent('ul');
		selected.parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('move-out');
	});

	function toggleNav() {
		var navIsVisible = (!$('.cd-dropdown').hasClass('is-active')) ? true : false;
		$('.cd-dropdown').toggleClass('is-active', navIsVisible);
		$('.cd-dropdown-trigger').toggleClass('is-active', navIsVisible);
		if (!navIsVisible) {
			$('.cd-dropdown').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
				$('.has-children ul').addClass('is-hidden');
				$('.move-out').removeClass('move-out');
				$('.is-active').removeClass('is-active');
			});
		}
	}

	$(".trigger-mm").click(function (e) {
		e.preventDefault();
		if ($('.trigger-mm').hasClass("is-active")) {
			$(".cd-dropdown-trigger").addClass("is-active");
			$(document.body).addClass("unscrolled");
		} else {
			$('.cd-dropdown-trigger').removeClass('is-active');
			$(document.body).removeClass("unscrolled");
		}
	});

	$("#close-search-mobile").click(function () {
		$('#mobile-search-form').removeClass('form-search-mobile-active');
		$("#close-search-mobile").hide();
		document.getElementById("form-control-mobile").value = "";
	});


	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if (!Modernizr.input.placeholder) {
		$('[placeholder]').focus(function () {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		}).blur(function () {
			var input = $(this);
			if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
			}
		}).blur();
		$('[placeholder]').parents('form').submit(function () {
			$(this).find('[placeholder]').each(function () {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
				}
			})
		});
	}
});
