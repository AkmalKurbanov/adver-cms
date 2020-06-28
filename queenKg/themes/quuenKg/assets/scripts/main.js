"use strict";
$(document).ready(function () {
  $(".slider-1").owlCarousel({
    loop: !0,
    margin: 10,
    autoplay: !0,
    autoplayTimeout: 7e3,
    responsive: {
      0: {
        items: 1
      }
    }
  }),  $(".slider__partners").owlCarousel({
    loop: !0,
    margin: 10,
    autoplay: !0,
    autoplayTimeout: 4e3,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2
      },
      768: {
        items: 4
      },
      960: {
        items: 6
      }
    }
  }), $(".header__info").on("click", function () {
    $(".header__menu").toggleClass("is-active")
  }), $('a[href^="#"]').click(function () {
    var o = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(o).offset().top + 20
    }, 1e3)
  }), $(".scroll__up").on("click", function () {
    var o = $("#banner");
    $("html, body").animate({
      scrollTop: $(o).offset().top
    }, 1e3)
  }), $(window).scroll(function () {
    var o = $(".services").offset().top - 50;
    $(window).scrollTop() > o ? $(".scroll__up").css({
      right: "0.5%"
    }) : $(".scroll__up").stop(!0).css({
      right: "-100%"
    })
  }), $(".header__link").on("click", function () {
    $(".header__menu").removeClass("is-active")
  })
});