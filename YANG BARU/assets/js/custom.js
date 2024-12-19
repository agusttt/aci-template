$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll >= 12) {

		$(".header").addClass("swipe-up-nav");
		$(".logo-white").addClass("logo-white-block");
		$(".btn-red-right").addClass("btn-red-right-block");
		$(".header-mobile").addClass("header-mobile-swipe");
		$(".navigation-bar").addClass("bg-light-white");
		$(".collapse-navbar-ykan").addClass("black-nav");
		$(".caret-down-white").addClass("caret-down");
		$(".logo-ykan-footer").addClass("logo-ykan-footer-hidden");
		$(".logo-ykan-header").addClass("logo-ykan-header-show");
		$(".all-menu-mobile").addClass("all-menu-mobile-swipe");
		$(".icon-search").addClass("search-show");
		$(".d-lang-desktop").addClass("show-lang");
		$(".dropdown-menu-top").addClass("hide-lang");
	} else {
		$(".logo-white").removeClass("logo-white-block");
		$(".header").removeClass("swipe-up-nav");
		$(".btn-red-right").removeClass("btn-red-right-block");
		$(".header-mobile").removeClass("header-mobile-swipe");
		$(".navigation-bar").removeClass("bg-light-white");
		$(".collapse-navbar-ykan").removeClass("black-nav");
		$(".caret-down-white").removeClass("caret-down");
		$(".logo-ykan-footer").removeClass("logo-ykan-footer-hidden");
		$(".logo-ykan-header").removeClass("logo-ykan-header-show");
		$(".all-menu-mobile").removeClass("all-menu-mobile-swipe");
		$(".container-search-transparent").removeClass("active");
		$(".icon-search").removeClass("search-show");
		$(".d-lang-desktop").removeClass("show-lang");
		$(".dropdown-menu-top").removeClass("hide-lang");
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


	$('.wrp-text-schedule h5:first-child').css("margin-top", "0");

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