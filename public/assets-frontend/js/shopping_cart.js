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
    $('html, body').animate({scrollTop :0}, 1000);
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

// Xóa sản phẩm
$('.del').click(function(){
    $(this).parent().css('display','none');
})