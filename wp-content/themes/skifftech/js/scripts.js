(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		// HEADROOM
        $("header").headroom({
            "offset": 0,
            "tolerance": 5,
            "classes": {
                "initial": "headroom",
                "pinned": "headroom--pinned",
                "unpinned": "headroom--unpinned"
            }
        });

        // wpadminbar
        if($('#wpadminbar').length>0){
            $('.site-header').css('top',$('#wpadminbar').height());
        }

        //initializing [wow.js]
        var wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       50,          // default
                mobile:       true,       // default
                live:         true        // default
            }
        );
        wow.init();

        // slick nav intialization
        function createBodyLayer(){
            $('.right-navbar .nav').append("<div class='body-layer-menu'></div>");
            // $('.body-layer-menu').css('opacity',1);
            $('.body-layer-menu').fadeTo('300',1);
        }
        function removeBodyLayer(){
            $('.body-layer-menu').css('opacity','0');
            setTimeout(function () {
                $('.body-layer-menu').css('opacity','0');
            },150);

            setTimeout(function () {
                $('.body-layer-menu').remove();
            },250);

        }

        function slickNavInit(menu_element){
            $(menu_element).slicknav({
                'duration':0,
                'closeOnClick':true,
                'beforeOpen': function () {
                    createBodyLayer();
                    $('body').addClass('nav-opened');
                },
                'afterClose':function (){
                    $('body').removeClass('nav-opened');
                }
            });
        }
        slickNavInit('#primary-menu');

        $('.nav-button').click(function () {
            if($('body').hasClass('nav-opened')){
                removeBodyLayer();
            }
            $('#primary-menu').slicknav('toggle');
        });
        $(document).on('click','.body-layer-menu',function () {
            $('#primary-menu').slicknav('close');
            removeBodyLayer();
        });

        // swiper slider
        const swiper = new Swiper('.hero-slider', {
            // Optional parameters
            // direction: 'vertical',
            speed: 1000,
            spaceBetween: 30,
            autoplay:true,
            resistanceRatio : 0.65,
            // loop:true,
            watchSlidesProgress:true,
            watchSlidesVisibility:true,
            effect:'fade',

            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        document.addEventListener('DOMContentLoaded', function() {
            console.log('dom');
            var typed = new Typed('#typed', {
                stringsElement: '#banner-title',
                typeSpeed: 20,
                backSpeed: 20,
                startDelay: 1000,
                loop: false,
                loopCount: Infinity,
                onBegin: function(self) {
                    prettyLog('onBegin ' + self);
                },
                onComplete: function(self) {
                    prettyLog('onComplete ' + self);
                },
                preStringTyped: function(pos, self) {
                    prettyLog('preStringTyped ' + pos + ' ' + self);
                },
                onStringTyped: function(pos, self) {
                    prettyLog('onStringTyped ' + pos + ' ' + self);
                },
                onLastStringBackspaced: function(self) {
                    prettyLog('onLastStringBackspaced ' + self);
                },
                onTypingPaused: function(pos, self) {
                    prettyLog('onTypingPaused ' + pos + ' ' + self);
                },
                onTypingResumed: function(pos, self) {
                    prettyLog('onTypingResumed ' + pos + ' ' + self);
                },
                onReset: function(self) {
                    prettyLog('onReset ' + self);
                },
                onStop: function(pos, self) {
                    prettyLog('onStop ' + pos + ' ' + self);
                },
                onStart: function(pos, self) {
                    prettyLog('onStart ' + pos + ' ' + self);
                },
                onDestroy: function(self) {
                    prettyLog('onDestroy ' + self);
                }
            });
        });


        footerColorChangeOnDarkMode();
        $(document).on('click', '.wp-dark-mode-switcher', function () {
            footerColorChangeOnDarkMode();
        });

        function footerColorChangeOnDarkMode() {
            setTimeout(function () {
                if($('html').hasClass('wp-dark-mode-active')){
                    $('.site-footer.style-new p, .site-footer.style-new a, .site-footer.style-new p').css('color','#fff');
                }
            },200);
        }


        function prettyLog(str) {
            console.log('%c ' + str, 'color: green; font-weight: bold;');
        }


    });

} ( this, jQuery ));
