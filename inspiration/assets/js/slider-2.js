$('.autoplay').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
  		autoplaySpeed: 2000
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        arrows: false,
        autoplay: true,
  		autoplaySpeed: 2000
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
  		autoplaySpeed: 2000
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});