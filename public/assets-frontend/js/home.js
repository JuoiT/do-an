// Quay về top
$(window).scroll(function(){
    var h = $(this).scrollTop();
    if(h > 300){
        $('.back-top').fadeIn();
    }
    else{
        $('.back-top').fadeOut();
    }
})

$('.back-top').click(function () { 
    $('html, body').animate({scrollTop :0}, 5000);
});

/* Hiển thị menu hover */
$('.language').click(function (){
   $('.select-lg').toggle();
   $('.select-lg').css('z-index', '1000');
});

$('.drop-down').click(function (){
    $('.money').toggle();
    $('.money').css('z-index', '1000');
 });

 $('.account').click(function (){
    $('.list-account').toggle();
    $('.list-account').css('z-index', '1000');
 });

// Menu mobile 
$('.nav-mobile').click(function (){
    $('.menu-mobile').toggle(function(){
        $('html').css('overflow-y','hidden');
        $('.nav-overlay').css('position','fixed');
    });
});

$('.remove').click(function(){
    $('.menu-mobile').css('display', 'none');
    $('html').css('overflow-y','unset');
    $('.nav-overlay').css('position','unset');
});

// Menu cấp 2
$('#show-menu-shop').click(function (){
    $('.mega-menu-shop').toggle();
});

$('#show-menu-organic').click(function (){
    $('.mega-menu-organic').toggle();
});

$('#show-menu-page').click(function (){
    $('.mega-menu-page').toggle();
});



// Slide cho banner 
$('.owl-carousel.owl-banner').owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    autoplay:true,
    autoplayTimeout:5000,
    nav: true,
    navText: [
    '<i class="fal fa-chevron-left next-page next-left">',
    '<i class="fal fa-chevron-right next-page next-right">'
    ] 
});


// Slide cho product
$('.owl-carousel.owl-product').owlCarousel({
    loop:true,
    margin: 15,
    dots: false,
    // autoplay:true,
    // autoplayTimeout:5000,
    nav: true,
    navText: [
    '<i class="fal fa-chevron-left btn-prev">',
    '<i class="fal fa-chevron-right btn-next">'
    ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})

// Slide cho brands
$('.owl-brands.owl-carousel').owlCarousel({
    loop:true,
    dots: false,
    autoplay:true,
    autoplayTimeout:4000,
    nav: true,
    navText: [
    '<i class="fal fa-chevron-left brands-prev">',
    '<i class="fal fa-chevron-right brands-next">'
    ],
    responsive: {
        0:{
            items: 2,
        },
        500:{
            items: 3,
        },
        1024:{
            items: 5,
        },

    },
})

