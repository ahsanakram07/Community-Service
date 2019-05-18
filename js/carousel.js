$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

var owl = $('#mycarousel');
owl.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:false,
    dots:true,
    animateOut: 'fadeOut',
});

var owl = $('#carouselprod');
owl.owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    dots:false,
    autoplayTimeout:4000,
    autoplayHoverPause:false,
    animateOut: 'fadeOut',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            loop:true,
            autoplay:true,
            dots:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:false
        },
        768:{
            items:3,
            loop:true,
            autoplay:true,
            dots:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:false
        }
    }
});