var menu = [];
jQuery('.halloween_shopswiper-slide').each( function(index){
    menu.push( jQuery(this).find('.halloween_shopslide-inner').attr("data-text") );
});
var interleaveOffset = 0.5;
var swiperOptions = {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    pagination: {
        el: '.halloween_shopswiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.halloween_shopswiper-button-next',
        prevEl: '.halloween_shopswiper-button-prev',
    },
    on: {
        progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                var slideProgress = swiper.slides[i].progress;
                var innerOffset = swiper.width * interleaveOffset;
                var innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".halloween_shopslide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
        },

        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },

        setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".halloween_shopslide-inner").style.transition =
                speed + "ms";
            }
        }
    }
};
var swiper = new Swiper(".halloween_shopswiper-container", swiperOptions);






