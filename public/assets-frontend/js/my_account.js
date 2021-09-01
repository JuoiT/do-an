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


// Form Validate 
        $.validator.setDefaults({
            submitHandler: function() {
                alert("Đăng nhập thành công !");
            }
        });
    // Form Login
        $('#form-lg').validate({
            rules: {
                l_name: {
                    required: true,
                    minlength: 4,
    
                },
                l_password: {
                    required: true,
                    minlength: 8,
                }
            },
    
            messages: {
                l_name: {
                    required: '<i class="fas fa-times-circle"></i> Bạn chưa nhập tên !',
                    minlength: '<i class="fas fa-times-circle"></i> Tên tối thiểu 4 kí tự !'
                },
                l_password: {
                    required: '<i class="fas fa-times-circle"></i> Bạn chưa nhập mật khẩu !',
                    minlength: '<i class="fas fa-times-circle"></i> Mật khẩu tối thiểu 8 kí tự !',
                }
            }
        });
    
        // Form Register
        $('#form-register').validate({
            rules: {
                r_name: {
                    required: true,
                    minlength: 4,
                },
                r_email: {
                    required: true,
                    email: true,
                    
                },
                r_password: {
                    required: true,
                    minlength: 8,
    
                },
                r_p_password: {
                    required: true,
                    minlength: 8,
                    equalTo:" #confirm_password",
                }
            },

            messages: {
                r_name: {
                    required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập tên !',
                    minlength: '<i class="fas fa-exclamation-circle"></i> Tên tối thiểu 4 kí tự !',
                },
                r_email: {
                    required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập email !',
                    email: '<i class="fas fa-exclamation-circle"></i> Vui lòng nhập địa chỉ email hợp lệ !'
                },
                r_password: {
                    required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập mật khẩu !',
                    minlength: '<i class="fas fa-exclamation-circle"></i> Mật khẩu tối thiểu 8 kí tự !',
                },
                r_p_password: {
                    required: '<i class="fas fa-exclamation-circle"></i> Bạn chưa nhập mật khẩu !',
                    minlength: '<i class="fas fa-exclamation-circle"></i> Mật khẩu tối thiểu 8 kí tự !',
                    equalTo: 'Mật khẩu chưa trùng nhau , hãy thử lại !'
                },
            }
        });    
    
