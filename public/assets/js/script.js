
$("document").ready(function(e){

    /*================
	 Header
	==================*/

	// Sticky Menu

	var header1 = $('.site-header');
    var header2 = $('.site-header2');
	$(window).on('scroll', function () {

		if ($(window).scrollTop() > 450) {
			header1.addClass('sticky');
            header2.addClass('sticky');
		} else {
			header1.removeClass('sticky');
            header2.removeClass('sticky');
		}

	});

    /*================
	 Mobile Menu
	==================*/

	$('.toggle-button').click(function(){
		$(this).toggleClass('active');
		$('.menu-content').slideToggle();
	});

	if ($(window).width() < 1200){
		$('.sub-menu-toggle').click(function(){
			$(this).siblings('.sub-menu').slideToggle();
		});
	};

    /*===========
     Button
    =============*/

    $('.button').on('mouseenter', function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('span').css({top:y, left: x})
    })
    $('.button').on('mouseout', function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('span').css({top:y, left: x})
    })

    /*===========
     Hero Tab
    =============*/

    $(".tab-body").hide();
    $(".tab-body:first").show();

    $(".tab-navigation li").click(function() {
        $(".tab-body").hide();
        var activeTab = $(this).attr("rel");
        $("#"+activeTab).fadeIn();
          if($(this).attr("rel") == "tab2"){
              $('.tab-navigation').addClass('slide');
          }else{
              $('.tab-navigation').removeClass('slide');
          }
        $(".tab-navigation li").removeClass("active");
        $(this).addClass("active");
    });

    /*===========
     Service
    =============*/

    $('.service-carousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        center: true,
        dots: true,
        nav: false,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        responsiveClass: true,
        responsive:{
            0:{
                items: 1,
                center: false,
            },
            768:{
                items: 2,
                center: false,
            },
            992:{
                items: 3,
            },
            1920:{
                items: 3,
            }
        }
    });

    /*===========
     Venobox
    =============*/

    $('.venobox').venobox({
        numeratio: true,
        infinigall: true
    });
    
    /*===========
     Accordion
    =============*/

    $('.faq-list > li:eq(0) .title').addClass('active').next().slideDown();

    $('.faq-list .title').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.faq-list').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.faq-list').find('.title.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    /*===========
     Testimonial
    =============*/

    $('.testi-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        responsiveClass: true,
        responsive:{
            0:{
                nav: false,
            },
            600:{
                nav: false,
            },
            1000:{
                nav: false,
            }
        }
    });

    $('.testi2-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        dots: false,
        nav: true,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
        responsiveClass: true,
        responsive:{
            0:{
                nav: false,
            },
            600:{
                nav: false,
            },
            1000:{
                nav: true,
            }
        }
    });

    /*===========
     Counter
    =============*/

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    function checkIfInView() {
        $('.counter-box').each(function() {
            if (isElementInViewport(this)) {
                
                $('.count').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    },
    
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
    
                    });
                });

                // Optionally, you can unbind the scroll event if you only want to trigger once
                //$(window).off('scroll', checkIfInView);
            }
        });
        $('.counter-box2').each(function() {
            if (isElementInViewport(this)) {
                
                $('.count').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    },
    
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
    
                    });
                });

                // Optionally, you can unbind the scroll event if you only want to trigger once
                //$(window).off('scroll', checkIfInView);
            }
        });
    }
    $(window).on('scroll', checkIfInView);
    checkIfInView();

    /*===========
     Blog Post
    =============*/

    $('.blog-post-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        responsiveClass: true,
        responsive:{
            0:{
                items: 1,
                nav: true
            },
            768:{
                items: 2,
                nav: false
            },
            992:{
                items: 3,
            },
            1920:{
                items: 3,
                nav: true,
            }
        }
    });

    /*================
	 Progress Bar
	==================*/

    var counted3 = 0;
    $(window).scroll(function() {

        var p_item = $('.progress-item');

        if (p_item.length) {
            var oTop3 = p_item.offset().top - window.innerHeight;
        }

        if (counted3 == 0 && $(window).scrollTop() > oTop3) {

            $('.progress-per').each(function(){
                var $this = $(this);
                var per = $this.attr('per');
                $this.css("width",per+'%');
                $({animatedValue: 0}).animate({animatedValue: per},{
                    duration: 1000,
                    step: function(){
                        $this.attr('per', Math.floor(this.animatedValue) + '%');
                    },
                    complete: function(){
                        $this.attr('per', Math.floor(this.animatedValue) + '%');
                    }
                });
            });

            counted3 = 1;
        }
    });

    /*================
	 Related Case
	==================*/

    $('.related-case-list').owlCarousel({
        items: 3,
        loop: true,
        autoplay: true,
        margin: 30,
        dots: false,
        nav: false,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        responsiveClass: true,
        responsive:{
            0:{
                items: 1,
                center: false,
            },
            768:{
                items: 2,
                center: false,
            },
            992:{
                items: 3,
            },
            1920:{
                items: 3,
            }
        }
    });

    /*================
	 Search Popup
	==================*/

	if($('.search-icon').length) {
		$('.search-icon').on('click', function() {
			$('body').addClass('search-active');
		});
		$('.search-close').on('click', function() {
			$('body').removeClass('search-active');
		});
	}

	/*================
	 Back to Top
	==================*/

	if($('.prgoress_scrollup path').length){
		var progressPath = document.querySelector('.prgoress_scrollup path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		};
		updateProgress();
		$(window).on('scroll', updateProgress);
		var offset = 250;
		var duration = 550;
		jQuery(window).on('scroll', function () {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.prgoress_scrollup').addClass('active-progress');
			} else {
				jQuery('.prgoress_scrollup').removeClass('active-progress');
			}
		});
		jQuery('.prgoress_scrollup').on('click', function (event) {
			event.preventDefault();
			jQuery('html, body').animate({ scrollTop: 0 }, duration);
			return false;
		});
	}

});

/*============
 Preloader
==============*/

$(window).on('load', function() {
	$("#preloader").hide();
});
