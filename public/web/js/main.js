$(function(){

	'use strict';
	
	$(".player").mb_YTPlayer();
	
	// Team - Owl Carousel
    $(".about-slider").owlCarousel({
		itemsCustom : [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 3],],
		pagination : true
	});
	
	// Team - Owl Carousel
    $(".team-slider").owlCarousel({
		itemsCustom : [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 4],],
		pagination : true
	});
	
	// Services - Owl Carousel
    $(".service-slider").owlCarousel({
		itemsCustom : [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 4],],
		pagination : true
	});
	
	// News - Owl Carousel
    $(".news-slider").owlCarousel({
		itemsCustom : [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 3],],
		pagination : false,
		navigation : true,
		navigationText : ['<i class="fa fa-chevron-left leftArrow"></i>','<i class="fa fa-chevron-right rightArrow"></i>']
	});
	
	// Counters - Owl Carousel
    $(".counters-slider").owlCarousel({
		itemsCustom : [[0, 1],[450, 1],[600, 2],[700, 3],[1000, 4],],
		pagination : true
	});

	// INIT COUNTTO
	$(".counters h4").countTo();
	
	$('#main-slider').liquidSlider({
		autoSlide:          true,
		autoSlideInterval:  4500,
		autoSlideControls:  true,
		forceAutoSlide: true,
		dynamicArrows: false,
		slideEaseFunction:'animate.css',
		slideEaseDuration:900,
		heightEaseDuration:900,
		animateIn:"bounceIn",
		animateOut:"bounceOut",
		callback: function() {
			var self = this;
			$('.slider-6-panel').each(function() {
				$(this).removeClass('animated ' + self.options.animateIn);
			});
		}
	});
	
	// Portfolio Section. Init Cube Portfolio
	(function ($, window, document, undefined) {

		var gridContainer = $('#grid-container'), filtersContainer = $('#filters-container');

		// init cubeportfolio
		gridContainer.cubeportfolio({
			defaultFilter: '*',
			animationType: 'quicksand',
			gapHorizontal: 15,
			gapVertical: 15,
			gridAdjustment: 'responsive',
			caption: 'zoom',
			displayType: 'sequentially',
			displayTypeSpeed: 100,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxShowCounter: false,

			// singlePage popup
			singlePageDelegate: '.cbp-singlePage',
			singlePageDeeplinking: true,
			singlePageStickyNavigation: true,
			singlePageShowCounter: true,
			singlePageCallback: function (url, element) {},
			
			// singlePageInline
			singlePageInlineDelegate: '.cbp-singlePageInline',
			singlePageInlinePosition: 'below',
			singlePageInlineShowCounter: true,
			singlePageInlineInFocus: true,
			singlePageInlineCallback: function(url, element) {

				// to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
				var t = this;

				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'html',
					timeout: 5000
				})
				.done(function(result) {

					t.updateSinglePageInline(result);

				})
				.fail(function() {
					t.updateSinglePageInline("Error! Please refresh the page!");
				});

			}

		});

		// add listener for filters click
		filtersContainer.on('click', '.cbp-filter-item', function (e) {
			var me = $(this), wrap;
			if ( !$.data(gridContainer[0], 'cubeportfolio').isAnimating ) {
				if ( filtersContainer.hasClass('cbp-l-filters-dropdown') ) {
					wrap = $('.cbp-l-filters-dropdownWrap');
					wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
					wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
					me.addClass('cbp-filter-item-active');
				} else {
					me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
				}
			}
			// filter the items
			gridContainer.cubeportfolio('filter', me.data('filter'), function () {});
		});

		// activate counter for filters
		gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'));

	})(jQuery, window, document);
	
});

/* Window Load Actions */
$(window).load(function(){
	
	'use strict';
	
	// INIT PARALLAX BACKGROUND
	$(window).stellar({
		horizontalScrolling: false,
	});

	// INIT SMOOTH SCROLL
	smoothScroll.init({
		speed: 500, // How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		updateURL: true
	});
	
	// REMOVE LOADING OVERLAY
	$("body").css({ "overflow":"auto" });
	$(".loading-wrapper").fadeOut("fast", function(){ $(this).remove(); });

	$('.news-details').magnificPopup({
		type: 'ajax',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: true,
		midClick: true
	});

});

// WOW Settings
var wow = new WOW({
	boxClass:     'wow',      // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset:       0,          // distance to the element when triggering the animation (default is 0)
	mobile:       false       // trigger animations on mobile devices (true is default)
});

wow.init();

/* Window Scroll Actions */
$(window).scroll(function(){
	
	'use strict';
	
	if ( $(window).scrollTop() > 49 ) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
    
});


function init_map(){

	var e = {
		zoom:14,
		center:new google.maps.LatLng(40.801485408197856,-73.96745953467104),
		mapTypeId:google.maps.MapTypeId.ROADMAP,
		scrollwheel:false,
		styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
	};
	
	map = new google.maps.Map(document.getElementById("map"),e);
	marker = new google.maps.Marker({map:map,position:new google.maps.LatLng(40.801485408197856,-73.96745953467104)});
	infowindow = new google.maps.InfoWindow({content:"<b>avaloo 2014</b><br/>1571 Hidden Terrace<br/> New York"});
	
	google.maps.event.addListener(marker,"click",function(){infowindow.open(map,marker)});
	
	infowindow.open(map,marker);
	
};

google.maps.event.addDomListener(window,"load",init_map);

// CONTACT FORM FUNCTION
var contact_send = function(){
	
	'use strict';
	
	var name 	= $("#contact_name").val();
	var email	= $("#contact_email").val();
	var phone	= $("#contact_phone").val();
	var message = $("#contact_message").val();
	
	if ( name=="" ){ alert("Tienes que escribir un nombre!"); $("#contact_name").focus(); }
	else if ( email=="" ){ alert("Tienes que escribir un email!"); $("#contact_email").focus(); }
	else if ( phone=="" ){ alert("Necesitamos un numero para contactarnos contigo!"); $("#contact_phone").focus(); }
	else if ( message=="" ){ alert("Ingresa un mensaje!"); $("#contact_message").focus(); }
	else {
		$.post("contact.send.php", { name:name, email:email, phone:phone, message:message }, function( result ){
			if ( result=="SUCCESS" ){
				alert("Tu mensaje ha sido enviado.");
				setTimeout(function(){
					$("#contact_name").val("");
					$("#contact_email").val("");
					$("#contact_phone").val("");
					$("#contact_message").val("");
				}, 3000);
			} else {
				alert("No hemos podido enviar el mensaje, intentalo mas tarde.");
			}
		});
	}

};