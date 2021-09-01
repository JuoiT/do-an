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

// Login Form 

// $(document).ready(function(){
//     $('input').blur(function(){
//         $(this).css({
//             'border': '1px solid red'
//         }),
//         $('.l_email_blur').html = 'Bạn chưa nhập !'
//     })
// })

// Form liên hệ
$('#form-lg').validate({
    rules: {
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            minlength: 8,
        }
    },

    messages: {
        email: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập tên !',
            email: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập đúng địa chỉ email !',
        },
        password: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập mật khẩu !',
            minlength: '<i class="fas fa-exclamation-circle"></i> Mật khẩu tối thiểu 8 kí tự !',
        },
    }
});


// Form liên hệ
$('#form-contact').validate({
    rules: {
        call_number: {
            required: true,
            number: true,
            minlength: 10,
        },
        expiry: {
            required: true,
        },
        card_code: {
            required: true,
            number: true,
            minlength: 8,
        }
    },

    messages: {
        call_number: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập số điện thoại !',
            number: '<i class="fas fa-exclamation-circle"></i> Số điện thoại không đúng !',
            minlength: '<i class="fas fa-exclamation-circle"></i> Số điện thoại tối thiểu là 10 chữ số !'
        },
        expiry: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa chọn ngày tháng !',
        },
        card_code: {
            required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập mã thẻ !',
            number: '<i class="fas fa-exclamation-circle"></i> Mã số thẻ định dạng không đúng !',
            minlength: '<i class="fas fa-exclamation-circle"></i> Mã thẻ tối thiểu 8 kí tự !',
        },
    }
});