$(document).ready(function () {

// Circle Scroll indicator

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 5 ) {
      $('.progress-indicator').fadeTo(.95, 1);
    } else {
      $('.progress-indicator').fadeTo(.12, 0);
    }
  });

  (function () {
    var $w = $(window);
    var $circ = $('.animated-circle');
    var $progCount = $('.progress-count');
    var $prog2 = $('.progress-indicator-2');

    var wh, h, sHeight;

    function setSizes() {
      wh = $w.height();
      h = $('body').height();
      sHeight = h - wh;
    }

    setSizes();

    $w.on('scroll', function () {
      var perc = Math.max(0, Math.min(1, $w.scrollTop() / sHeight));
      updateProgress(perc);
    }).on('resize', function () {
      setSizes();
      $w.trigger('scroll');
    });

    function updateProgress(perc) {
      var circle_offset = 69 * perc;
      $circ.css({
        "stroke-dashoffset": 69 - circle_offset
      });
      $progCount.html(Math.round(perc * 100) + "%");

      $prog2.css({width: perc * 100 + '%'});
    }
  }());

  // Shortcuts swiper links

  $(".swiper-container").each(function () {
    initSwiper(this);
  });

  $(".go-to-about-2").on("click", function () {
    $(".PageAboutSwiper")
      .data("swiper")
      .slideTo(1);
  });

  $(".go-to-about-resources").on("click", function () {
    $(".PageAboutSwiper")
      .data("swiper")
      .slideTo(4);
  });

  // Shortcuts sections links

  $(".go-to-opp").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageDoubleFirst").position().top});
  });

  $(".go-to-components").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageComponents").position().top});
  });

  $(".go-to-double-2").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageDoubleSecond").position().top});
  });

  $(".go-to-triple-2").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageTripleSecond").position().top});
  });

  $(".go-to-triple-3").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageTripleThird").position().top});
  });

  $(".go-to-contact, .footer-links .sendQuery").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: $(".PageContact").position().top});
  });

  // form checbox

  $(".c-check .cc-box").on("click", function () {
    var prop = $(this)
      .find("input")
      .prop("checked");

    if (prop) {
      $(this).removeClass("on");
      $(this)
        .find("input")
        .prop("checked", false);
    } else {
      $(this).addClass("on");
      $(this)
        .find("input")
        .prop("checked", true);
    }
  });

  $(".header-menu li").on("click", function () {
    var target = $(this).attr("data-target");
    $("html, body")
      .stop()
      .animate({scrollTop: $(target).position().top}, 500);

    if ($(window).width() <= 1024) {
      toggleMenu();
    }
  });

  $(window).scroll(function () {
    var selected = null;

    $(".parts > div").each(function () {
      if (selected) {
        return;
      }

      if ($(this).is(":in-viewport")) {
        selected = this;
        return;
      }
    });

    var dest = $(selected).attr("data-dest");
    $('.header-menu li[data-target="' + dest + '"]')
      .addClass("selected")
      .siblings()
      .removeClass("selected");
  });

  $(window).scroll(function () {
    if ($(window).scrollTop() > 108) {
      $(".header").addClass("header-min");
    } else {
      $(".header").removeClass("header-min");
    }
  });

  $(".header-ham").on("click", function () {
    toggleMenu();
  });

  $(".header-logo").on("click", function () {
    $("html, body")
      .stop()
      .animate({scrollTop: 0}, 1200);
  });
});

// Custom Swiper Slider settings

function initSwiper(element) {
  var swiper = new Swiper(element, {
    // effect: 'fade',
    pagination: {
      el: $(element).find(".swiper-pagination")[0],
      el: ".swiper-pagination",
      clickable: true
    },
    keyboard: {
      enabled: true
    },
    navigation: {
      nextEl: $(element).find(".swiper-button-next")[0],
      prevEl: $(element).find(".swiper-button-prev")[0]
    },
    autoHeight: true //$(window).width() < 768
  });

  swiper.on("slideChange", function () {
    var slide = $(element).find(".swiper-slide")[this.activeIndex];

    if ($(slide).hasClass("sc-blue-arrows-on")) {
      $(element).addClass("sc-blue-arrows");
    } else {
      $(element).removeClass("sc-blue-arrows");
    }

    if ($(element).data("sindex") != this.activeIndex) {
      $("html, body")
        .stop()
        .animate({scrollTop: $(element).position().top});
    }

    $(element).data("sindex", swiper.activeIndex);
  });

  $(element).data("swiper", swiper);
  $(element).data("sindex", swiper.activeIndex);
}

// Intro section remove selected status of navigation

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll <= 420) {
    $("li").removeClass("selected");
  }
});

function toggleMenu() {
  $(".header-ham").toggleClass("active");
  $(".header-blind").fadeToggle();
  $(".header-mob").toggleClass("header-mob-open");
}

// iziModals

$(function () {

  /* Instantiating iziModal */
  $("#modal-custom").iziModal({
    overlayClose: false,
    overlayColor: 'rgba(0, 0, 0, 0.6)'
  });

  /* JS inside the modal */

  $("#modal-custom").on('click', 'header a', function (event) {
    event.preventDefault();
    var index = $(this).index();
    $(this).addClass('active').siblings('a').removeClass('active');
    $(this).parents("div").find("section").eq(index).removeClass('hide').siblings('section').addClass('hide');

    if ($(this).index() === 0) {
      $("#modal-custom .iziModal-content .icon-close").css('background', '#ddd');
    } else {
      $("#modal-custom .iziModal-content .icon-close").attr('style', '');
    }
  });

  $("#modal-custom").on('click', '.submit', function (event) {
    event.preventDefault();

    var fx = "wobble",  //wobble shake
      $modal = $(this).closest('.iziModal');

    if (!$modal.hasClass(fx)) {
      $modal.addClass(fx);
      setTimeout(function () {
        $modal.removeClass(fx);
      }, 1500);
    }
  });

  // Terms PopUp

  $(document).on("click", ".open-terms", function (event) {
    event.preventDefault();
    $("#modal-terms").iziModal("open");
  });
  $("#modal-terms").iziModal({
    headerColor: "#58564c",
    width: "60%",
    // overlayColor: "rgba(0, 0, 0, 0.5)",
    fullscreen: true,
    transitionIn: "fadeInUp",
    transitionOut: "fadeOutDown"
  });

  // Privacy PopUp
  $(document).on("click", ".open-privacy", function (event) {
    event.preventDefault();
    $("#modal-privacy").iziModal("open");
  });
  $("#modal-privacy").iziModal({
    headerColor: "#58564c",
    width: "75%",
    // overlayColor: "rgba(0, 0, 0, 0.5)",
    fullscreen: true,
    transitionIn: "fadeInUp",
    transitionOut: "fadeOutDown"
  });
});

