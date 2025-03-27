document.addEventListener("DOMContentLoaded", function () {
  var fullbanner = new Swiper(".fullbanner-home", {
    loop: true,
    pagination: {
      el: ".fullbanner-home .swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
  });
  var top20 = new Swiper(".top-20__slider", {
    loop: true,
    navigation: {
      nextEl: ".top-20__slider .swiper-button-next",
      prevEl: ".top-20__slider .swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
  var sideBanner = new Swiper(".side-banner", {
    loop: true,
    pagination: {
      el: ".side-banner .swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
  });
  var wpcf7Elm = document.querySelector( '.wpcf7' );
   
  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    alert( "Cadastro efetuado com sucesso!" );
  }, false );

  if (document.getElementById("home")) {
    document.querySelector("footer #newsletter").style.display = "none";
}
});
