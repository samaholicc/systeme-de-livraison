(function($) {
	'use strict';
	jQuery(document).on('ready', function(){
		
		// Mean Menu
		jQuery('.mean-menu').meanmenu({ 
			meanScreenWidth: "991"
		});

		// Preloader
		jQuery(window).on('load', function() {
            $('.preloader').fadeOut();
		});

		// Nice Select JS
        $('select').niceSelect();
		
		// Header Sticky
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >150){  
                $('.navbar-area').addClass("is-sticky");
            }
            else{
                $('.navbar-area').removeClass("is-sticky");
            }
		});

		// Prevoz Slider
		$('.prevoz-slider').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			mouseDrag: false,
			items:1,
			dots: false,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			animateOut: "slideOutDown",
            animateIn: "slideInDown",
			navText: [
				"<i class='bx bx-chevron-left bx-fade-left'></i>",
				"<i class='bx bx-chevron-right bx-fade-right'></i>",
			],
		});

		// Prevoz Slider
		$('.prevoz-slider-style').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			mouseDrag: false,
			items:1,
			dots: false,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			animateOut: "fadeOut",
			navText: [
				"<i class='bx bx-chevron-left'></i>",
				"<i class='bx bx-chevron-right'></i>",
			],
		});

        // Testimonials Top Wrap
		$('.testimonials-top-wrap').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 20,
			center: false,
			dots: true,
			smartSpeed:1500,
			animateOut: "fadeOut",
		});

        // Testimonials Top Three
		$('.testimonials-wrap-three').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 0,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:2
				},
				1200:{
					items:2
				}
			}
			
		});

        // Brand Wrap
		$('.brand-wrap').owlCarousel({
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 0,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:2
				},
				576:{
					items:3
				},
				768:{
					items:4
				},
				992:{
					items:5
				},
				1200:{
					items:5
				}
			}
		});

        // Project Main Wrap
		$('.project-main-wrap').owlCarousel({
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 20,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:2
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});

        // Project Main Wrap
		$('.road-transfort').owlCarousel({
			items:1,
			loop:true,
			nav:true,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 20,
			center: false,
			dots: false,
			smartSpeed:1500,
			navText: [
				"<i class='bx bx-chevron-left bx-fade-left'></i>",
				"<i class='bx bx-chevron-right bx-fade-right'></i>",
			],
		});

		// Go to Top
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 300) $('.go-top').addClass('active');
			if (scrolled < 300) $('.go-top').removeClass('active');
		});  

		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});

		// FAQ Accordion
		$('.accordion').find('.accordion-title').on('click', function(){
			// Adds Active Class
			$(this).toggleClass('active');
			// Expand or Collapse This Panel
			$(this).next().slideToggle('fast');
			// Hide The Other Panels
			$('.accordion-content').not($(this).next()).slideUp('fast');
			// Removes Active Class From Other Titles
			$('.accordion-title').not($(this)).removeClass('active');		
		});
		
		// Count Time 
        function makeTimer() {
            var endTime = new Date("november  30, 2020 17:00:00 PDT");			
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
		setInterval(function() { makeTimer(); }, 300);

		//animation
		new WOW().init();

		// Tabs
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});

		// Odometer 
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Popup Video JS 
        $('.popup-youtube, .popup-vimeo').magnificPopup({
            disableOn: 300,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
		});

		//skill
		jQuery('.skill-bar').each(function() {
			jQuery(this).find('.progress-content').animate({
			width:jQuery(this).attr('data-percentage')
			},2000);
			
			jQuery(this).find('.progress-number-mark').animate(
			{left:jQuery(this).attr('data-percentage')},
			{
				duration: 2000,
				step: function(now, fx) {
				var data = Math.round(now);
				jQuery(this).find('.percent').html(data + '%');
				}
			});  
		});

		// Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
			// handle the invalid form...
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				// everything looks good!
				event.preventDefault();
			}
		});
		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		
		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
			callback: callbackFunction
		});
		
		//Search Box 
		$('a[href=".search"]').on("click", function(event) {
            event.preventDefault();
            $(".search").addClass("open");
            $('.search > form > input[type="search"]').focus();
        });
        $(".search, .search button.close").on("click keyup", function(event) {
            if (
              event.target == this ||
              event.target.className == "close" ||
              event.keyCode == 27
            ) {
              $(this).removeClass("open");
            }
        });
        $("form").on('submit',function(event) {
            event.preventDefault();
            return false;
        });
	});
})(jQuery);