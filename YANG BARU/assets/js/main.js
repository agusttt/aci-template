$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll >= 27) {
		$(".header-buttom-line").addClass("opacity-one");
	} else {
		$(".header-buttom-line").removeClass("opacity-one");
	}
});

$(".search-icon").click(function (e) {
	e.preventDefault();
	jQuery('.navbar-collapse').collapse('hide');
	$('#responsive_am').removeClass('active-burger-nav');

	if ($("#content-search-form").hasClass("search-content-form-active")) {
		$('#content-search-form').removeClass('search-content-form-active');
		$('.container-search-transparent').removeClass('active');
		$('.search-header-span').removeClass('active-search-header');
		$('#content-search-form').addClass('search-content-form');

		$(".header-buttom-line").removeClass("opacity-one");
	} else {
		$('.search-header-span').addClass('active-search-header');
		$('.container-search-transparent').addClass('active');
		$('#content-search-form').addClass('search-content-form-active');
		$('#content-search-form').removeClass('search-content-form');
		$(".header-buttom-line").addClass("opacity-one");
	}
});

$("#close-box-search").click(function (e) {
	e.preventDefault();
	$('.container-search-transparent').removeClass('active');
	$('.search-header-span').removeClass('active-search-header');
	$('#content-search-form').removeClass('search-content-form-active');
	$('#content-search-form').addClass('search-content-form');
});

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

$(".find-mobile").click(function (x) {
	x.preventDefault();
	if ($('.search-bar-mobile').hasClass("active")) {
		$('.search-bar-mobile').removeClass('active');
	} else {
		$(".search-bar-mobile").addClass("active");
		// $('.container-search-transparent').addClass('active');
	}
});


// OPEN AND CLOSE SEARCH BAR MOBILE
$("#icon-search-mobile").click(function (e) {
	e.preventDefault();
	jQuery('.navbar-collapse').collapse('hide');
	if ($("#mobile-search-form").hasClass("form-search-mobile-active")) {
		$('#mobile-search-form').removeClass('form-search-mobile-active');
		$("#close-search-mobile").hide();
	}
	else {
		$('#mobile-search-form').addClass('form-search-mobile-active');
		$("#close-search-mobile").show();
	}
});

$("#close-search-mobile").click(function () {
	$('#mobile-search-form').removeClass('form-search-mobile-active');
	$("#close-search-mobile").hide();
	document.getElementById("form-control-mobile").value = "";
});

// OPEN AND CLOSE SEARCH BAR MOBILE

// HUMBURGER OPEN CLOSE MENU
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
	forEach(hamburgers, function (hamburger) {
		hamburger.addEventListener("click", function () {
			this.classList.toggle("is-active");
		}, false);
	});
}
// HUMBURGER CLOSE MENU MOBILE