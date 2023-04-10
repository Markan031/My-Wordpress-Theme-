(function ($) {
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
      this.postCarousel();
      this.CompaniesCorousel();
    }

    initiateCarousel() {
      $(".front-page-main-carousel").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
      });
    }
    postCarousel() {
      $(".front-page-posts-carousel").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        centerPadding: "0",
        responsive: [
          {
            breakpoint: 901,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 651,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    }
    CompaniesCorousel() {
      $(".front-page-companies-carousel").slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        centerPadding: "0",
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    }
  }

  new SlickCarousel();
})(jQuery);
