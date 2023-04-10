/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00
-------------------------------------------------------------------------------- */
(function() {

    "use strict";

    var Glow = {
        init: function() {
            this.Basic.init();
        },

        Basic: {
            init: function() {

                this.preloader();
                this.BackgroundImage();
                this.Animation();
                this.MobileMenu();
                this.scrollTop();
                this.CarouselSLiderJS();
                this.DemoFilter();
                this.CircleProgress();

            },
            preloader: function (){
                jQuery(window).on('load', function(){
                    jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
                })
            },
            BackgroundImage: function (){
                $('[data-background]').each(function() {
                    $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
                });
            },
            Animation: function (){
                if($('.wow').length){
                    var wow = new WOW(
                        {
                            boxClass:     'wow',
                            animateClass: 'animated',
                            offset:       0,
                            mobile:       true,
                            live:         true
                        }
                    );
                    wow.init();
                }
                jQuery('.thx_video_box').magnificPopup({
                    disableOn: 200,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false,
                });
            },
            MobileMenu: function (){
                $('.thx_open_mobile_menu').on("click", function() {
                    $('.mobile_menu_wrap').toggleClass("mobile_menu_on");
                });
                $('.thx_open_mobile_menu').on('click', function () {
                    $('body').toggleClass('mobile_menu_overlay_on');
                });
                if($('.mobile_menu li.dropdown ul').length){
                    $('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>');
                    $('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
                        $(this).prev('ul').slideToggle(500);
                    });
                }
                $(".dropdown-btn").on("click", function () {
                    $(this).toggleClass("toggle-open");
                });
                $('.main-navigation ul li a , .thx-banner-btn a').on("click", function(){
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name="DCSext.Level"' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top -50
                            }, 1000);
                            return false;
                        }
                    }
                });
                jQuery(window).on('scroll', function() {
                    if (jQuery(window).scrollTop() > 250) {
                        jQuery('.thx-header-section').addClass('sticky-on')
                    } else {
                        jQuery('.thx-header-section').removeClass('sticky-on')
                    }
                });
            },
            /**
             *
             */
            scrollTop: function (){
                $(window).on("scroll", function() {
                    if ($(this).scrollTop() > 200) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').on("click", function()  {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            },
            DemoFilter: function (){
                jQuery(window).on('load', function(){
                    $('.filtr-container').imagesLoaded ( function(){});
                    var filterizd = $('.filtr-container');

                    if(filterizd.length) {
                        filterizd.filterizr({

                        });
                        $('.filtr-button').on('click', function() {

                            $('.filtr-button.filtr-active').removeClass('filtr-active');
                            $(this).addClass('filtr-active');
                        });
                    }
                });

            },
            CircleProgress: function (){
                if($('.thx-count-box').length){
                    $('.thx-count-box').appear_c(function(){
                        var $t = $(this),
                            n = $t.find(".thx-count-text").attr("data-stop"),
                            r = parseInt($t.find(".thx-count-text").attr("data-speed"), 10);
                        if (!$t.hasClass("counted")) {
                            $t.addClass("counted");
                            $({
                                countNum: $t.find(".thx-count-text").text()
                            }).animate({
                                countNum: n
                            }, {
                                duration: r,
                                easing: "linear",
                                step: function() {
                                    $t.find(".thx-count-text").text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $t.find(".thx-count-text").text(this.countNum);
                                }
                            });
                        }
                    },{accY: 0});
                };
                if($('.dial').length){
                    $('.dial').appear_c(function(){
                        var elm = $(this);
                        var color = elm.attr('data-fgColor');
                        var perc = elm.attr('value');
                        var thickness = elm.attr('thickness');
                        elm.knob({
                            'value': 0,
                            'min':0,
                            'max':100,
                            'skin':'tron',
                            'readOnly':true,
                            'thickness':thickness,
                            'dynamicDraw': true,
                            'displayInput':false
                        });
                        $({value: 0}).animate({ value: perc }, {
                            duration: 3500,
                            easing: 'swing',
                            progress: function () { elm.val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    },{accY: 0});
                }
            },
            CarouselSLiderJS: function (){
                $('.thx-video-item-slider').slick({
                    infinite: false,
                    slidesToShow: 1,
                    autoplay: false,
                    slidesToScroll: 1,
                    dots: false,
                    nav: true,
                    autoplaySpeed: 5000,
                    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
                    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                });
                $('.inner-page-slider').slick({
                    centerMode: true,
                    dots: false,
                    nav: true,
                    centerPadding: '0px',
                    variableWidth: true,
                    slidesToShow: 1,
                    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
                    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
                    responsive: [
                        {
                            breakpoint: 1450,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 850,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1
                            }
                        }
                    ]
                });


            },

        }
    };
    jQuery(document).ready(function (){
        Glow.init();
    });

})();
