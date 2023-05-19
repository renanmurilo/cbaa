$(document).ready(function() {
	 $('.slide-banners').addClass("owl-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
    });

    $('.slide-depoimentos').addClass("owl-carousel").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        loop: true,
    });

     $('.slide-filiais').addClass("owl-carousel").owlCarousel({
        dots: false,
        nav: true,
        loop: false,
        margin: 10,
        responsive: {
            0: {
                items: 3,
            },
            768:{
                items:3,
            },
            1024: {
              items: 7,
            }
        }
    });

    $('.slider-nossa-historia').addClass("owl-carousel").owlCarousel({
        items: 4,
        nav: true, 
        dots: false,
        loop:false,
        margin: 40,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        responsive: {
            0: {
                items: 2,
                margin: 10,
                autoplayHoverPause:false,
            },
            768:{
                items:2,
            },
            1024: {
              items: 4,
            }
        }
    });

    var owl = $('.slider-nossa-historia');
    owl.on("mousewheel", ".owl-stage", function (e) {
      if (e.originalEvent.wheelDelta > 0) {
        owl.trigger("prev.owl");
      } else {
        owl.trigger("next.owl");
      }
      e.preventDefault();
    });
})

var $homeSlider = $(".filtro-menu");

$(window).resize(function() {
  showHomeSlider();
});

function showHomeSlider() {
  if ($homeSlider.data("owlCarousel") !== "undefined") {
    if (window.matchMedia('(max-width: 767px)').matches) {
      initialHomeSlider();
    } else {
      destroyHomeSlider();
    }
  }
}
showHomeSlider();

function initialHomeSlider() {
  $homeSlider.addClass("owl-carousel").owlCarousel({
    items: 3,
    dots: false,
    nav: true,
    loop: false,
    margin: 5,
  });
}

function destroyHomeSlider() {
  $homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel");
}