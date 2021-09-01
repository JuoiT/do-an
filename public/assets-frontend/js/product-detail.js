// Quay về top
$(window).scroll(function () {
    var h = $(this).scrollTop();
    if (h > 300) {
        $('.back-top').fadeIn();
    }
    else {
        $('.back-top').fadeOut();
    }
})
$('.back-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1000);
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

// JavaScript
// function change_image(image){
//     var scr_img = image.src;
//     document.getElementById('slide').src = scr_img;
// }

// Jquery
$('.img-child').click(function(){
    var src_img = this.src;
    $('.slide').attr('src', src_img);
});

// Content select Pc
$('.list-item-1').click(function(){
    $('.descriptions').css('display','block');
    $('.reviews').css('display','none');
    $('.list-item').css('border','1px solid #549843');
    $('.list-item-2').css('border','1px solid #fff');

});
$('.list-item-2').click(function(){
    $('.reviews').css('display','block');
    $('.descriptions').css('display','none');
    $('.list-item-1').css('border','1px solid #fff');
    $('.list-item-2').css('border','1px solid #549843');
});

// Content select Mobile
$('#btn-1').click(function(){
    $('.des-mobile').toggle();
    // Màu chữ và border thay đổi khi click
    $('#btn-1').css({
        'color': '#549843',
        'border': '1px solid #549843'
    });
    $('#btn-2').css({
        'color': '#000',
        'border': '1px solid #ccc'
    });
    // Thay đổi hướng chiều mũi tên
    $('#change-value-1').toggleClass('fa-sort-up');
})
$('#btn-2').click(function(){
    $('.rev-mobile').toggle();
    // Màu chữ và border thay đổi khi click
    $('#btn-2').css({
        'color': '#549843',
        'border': '1px solid #549843'
    });
    $('#btn-1').css({
        'color': '#000',
        'border': '1px solid #ccc'
    });
    // Thay đổi hướng chiều mũi tên
    $('#change-value-2').toggleClass('fa-sort-up');
})

// Form PC
$('#form-review-pc').validate({
        rules: {
            name: {
                required: true,
                minlength: 4,

            },
            email: {
                required: true,
                email: true,
            },
            comment: {
                required: true,
                minlength: 20,
            }

        },
        messages: {
            name: {
                required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập tên !',
                minlength: '<i class="fas fa-exclamation-circle"></i> Tên tối thiểu 4 kí tự !'
            },
            email: {
                required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập gmail !',
                email: '<i class="fas fa-exclamation-circle"></i> Định dạng email không hợp lệ vui lòng kiểm tra lại  !',
            },
            comment: {
                required: '<i class="fas fa-exclamation-circle"></i> Vui lòng để lại đánh giá sản phẩm !',
                minlength: '<i class="fas fa-exclamation-circle"></i> Đánh giá tối thiểu 20 kí tự !',
            }
        }
});
// Form Mobile
$('#form-review-mobile').validate({
    rules: {
        name: {
            required: true,
            minlength: 4,

        },
        email: {
            required: true,
            email: true,
        },
        comment: {
            required: true,
            minlength: 20,
        }

    },
    messages: {
        name: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập tên !',
            minlength: '<i class="fas fa-exclamation-circle"></i> Tên tối thiểu 4 kí tự !'
        },
        email: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập gmail !',
            email: '<i class="fas fa-exclamation-circle"></i> Định dạng email không hợp lệ vui lòng kiểm tra lại  !',
        },
        comment: {
            required: '<i class="fas fa-exclamation-circle"></i> Vui lòng để lại đánh giá sản phẩm !',
            minlength: '<i class="fas fa-exclamation-circle"></i> Đánh giá tối thiểu 20 kí tự !',
        }
    }
});

// Số lượng sản phẩm 
$('.plus').click(function(){
    $('.value').val( parseInt($('.value').val()) + 1);
});

$('.minus').click(function(){
    var value_a = $('.value').val();
    if(value_a > 0){
        $('.value').val( parseInt($('.value').val()) - 1);
    }
});



// Danh sách sản phẩm slide 
$('.owl-product').owlCarousel({
    dots: false,
    loop: true,
    nav: true,
    navText:[
        '<i class="fal fa-chevron-left next-page next-left">',
        '<i class="fal fa-chevron-right next-page next-right">'
    ],
    responsive:{
        0:{
            items:1
        },
        426:{
            items: 2
        },
        769:{
            items: 3

        }
    }
});