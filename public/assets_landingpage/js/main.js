(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  //   $(window).scroll(function () {
  //     if ($(this).scrollTop() > 300) {
  //       $(".sticky-top").addClass("bg-nav shadow-sm").css("top", "0px");
  //     } else {
  //       $(".sticky-top").removeClass("bg-nav shadow-sm").css("top", "-150px");
  //     }
  //   });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").css({
        "background-color": "#c50303", // Ganti "blue" dengan warna yang diinginkan
        "box-shadow": "0 4px 6px rgba(0, 0, 0, 0.1)", // Tambahkan shadow jika diperlukan
        top: "0px",
      });
    } else {
      $(".sticky-top").css({
        "background-color": "transparent", // Kembali ke warna awal
        "box-shadow": "none", // Hilangkan shadow jika ada
        top: "-150px",
      });
    }
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    items: 1,
    autoplay: true,
    smartSpeed: 1000,
    dots: true,
    loop: true,
    nav: true,
    navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
  });
})(jQuery);
