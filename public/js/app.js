/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

//  AOS.init({
//     duration: 800,
//     easing: 'slide'
// });
(function ($) {
  "use strict";

  var isMobile = {
    Android: function Android() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function BlackBerry() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function iOS() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function Opera() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function Windows() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function any() {
      return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
    }
  };
  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });

  var fullHeight = function fullHeight() {
    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function () {
      $('.js-fullheight').css('height', $(window).height());
    });
  };

  fullHeight(); // loader

  var loader = function loader() {
    setTimeout(function () {
      if ($('#ftco-loader').length > 0) {
        $('#ftco-loader').removeClass('show');
      }
    }, 1);
  };

  loader(); // Scrollax

  $(window).stellar();

  var carousel = function carousel() {
    $('.carousel-car').owlCarousel({
      center: true,
      loop: true,
      autoplay: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
    $('.carousel-car2').owlCarousel({
      center: true,
      loop: true,
      autoplay: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
    $('.carousel-testimony').owlCarousel({
      center: true,
      loop: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  };

  carousel();
  $('nav .dropdown').hover(function () {
    var $this = $(this); // 	 timer;
    // clearTimeout(timer);

    $this.addClass('show');
    $this.find('> a').attr('aria-expanded', true); // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');

    $this.find('.dropdown-menu').addClass('show');
  }, function () {
    var $this = $(this); // timer;
    // timer = setTimeout(function(){

    $this.removeClass('show');
    $this.find('> a').attr('aria-expanded', false); // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');

    $this.find('.dropdown-menu').removeClass('show'); // }, 100);
  });
  $('#dropdown04').on('show.bs.dropdown', function () {
    console.log('show');
  }); // scroll

  var scrollWindow = function scrollWindow() {
    var whiteLogo = "/images/gm_logo_white.png";
    var blackLogo = "/images/gm_logo_blue.png";
    $(window).scroll(function () {
      var $w = $(this),
          st = $w.scrollTop(),
          navbar = $('.ftco_navbar'),
          sd = $('.js-scroll-wrap'),
          logo = $('#logo_nav')[0];

      if (st > 150) {
        if (!navbar.hasClass('scrolled')) {
          navbar.addClass('scrolled');
          $('#logo_nav')[0].src = blackLogo;
        }
      }

      if (st < 150) {
        if (navbar.hasClass('scrolled')) {
          navbar.removeClass('scrolled sleep');
          $('#logo_nav')[0].src = whiteLogo;
        }
      }

      if (st > 350) {
        if (!navbar.hasClass('awake')) {
          navbar.addClass('awake');
        }

        if (sd.length > 0) {
          sd.addClass('sleep');
        }
      }

      if (st < 350) {
        if (navbar.hasClass('awake')) {
          navbar.removeClass('awake');
          navbar.addClass('sleep');
        }

        if (sd.length > 0) {
          sd.removeClass('sleep');
        }
      }
    });
  };

  scrollWindow();
  var isMobile = {
    Android: function Android() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function BlackBerry() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function iOS() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function Opera() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function Windows() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function any() {
      return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
    }
  };

  var counter = function counter() {
    $('#section-counter, .hero-wrap, .ftco-counter').waypoint(function (direction) {
      if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
        $('.number').each(function () {
          var $this = $(this),
              num = $this.data('number');
          console.log(num);
          $this.animateNumber({
            number: num,
            numberStep: comma_separator_number_step
          }, 7000);
        });
      }
    }, {
      offset: '95%'
    });
  };

  counter();

  var contentWayPoint = function contentWayPoint() {
    var i = 0;
    $('.ftco-animate').waypoint(function (direction) {
      if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
        i++;
        $(this.element).addClass('item-animate');
        setTimeout(function () {
          $('body .ftco-animate.item-animate').each(function (k) {
            var el = $(this);
            setTimeout(function () {
              var effect = el.data('animate-effect');

              if (effect === 'fadeIn') {
                el.addClass('fadeIn ftco-animated');
              } else if (effect === 'fadeInLeft') {
                el.addClass('fadeInLeft ftco-animated');
              } else if (effect === 'fadeInRight') {
                el.addClass('fadeInRight ftco-animated');
              } else {
                el.addClass('fadeInUp ftco-animated');
              }

              el.removeClass('item-animate');
            }, k * 50, 'easeInOutExpo');
          });
        }, 100);
      }
    }, {
      offset: '95%'
    });
  };

  contentWayPoint(); // navigation

  var OnePageNav = function OnePageNav() {
    $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function (e) {
      e.preventDefault();
      var hash = this.hash,
          navToggler = $('.navbar-toggler');
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, 'easeInOutExpo', function () {
        window.location.hash = hash;
      });

      if (navToggler.is(':visible')) {
        navToggler.click();
      }
    });
    $('body').on('activate.bs.scrollspy', function () {
      console.log('nice');
    });
  };

  OnePageNav(); // magnific popup
  //    $('.image-popup').magnificPopup({
  //    type: 'image',
  //    closeOnContentClick: true,
  //    closeBtnInside: false,
  //    fixedContentPos: true,
  //    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
  //     gallery: {
  //      enabled: true,
  //      navigateByImgClick: true,
  //      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  //    },
  //    image: {
  //      verticalFit: true
  //    },
  //    zoom: {
  //      enabled: true,
  //      duration: 300 // don't foget to change the duration also in CSS
  //    }
  //  });
  //  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
  //    disableOn: 700,
  //    type: 'iframe',
  //    mainClass: 'mfp-fade',
  //    removalDelay: 160,
  //    preloader: false,
  //    fixedContentPos: false
  //  });
  //    $('#book_pick_date,#book_off_date').datepicker({
  //      'format': 'm/d/yyyy',
  //      'autoclose': true
  //    });
  //    $('#time_pick').timepicker();
})(jQuery);

/***/ }),

/***/ 4:
/*!***********************************!*\
  !*** multi ./resources/js/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/diego/wa/gmtheme/resources/js/app.js */"./resources/js/app.js");


/***/ })

/******/ });