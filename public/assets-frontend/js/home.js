new WOW().init();



$('.new-arrivals-slider').owlCarousel({
    loop: true,
    margin: 24,
    items: 4,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 750,
    autoplayHoverPause: true,
    nav: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        575: {
            items: 2,
        },
        992: {
            items: 3,
        },
        1340: {
            items: 4,
        }
    }
});

$(".owl-prev").html('<i class="icon-angle-right"></i>');
$(".owl-next").html('<i class="icon-angle-right"></i>');

$('.brand-slider').owlCarousel({
    loop: true,
    margin: 60,
    nav: true,
    items: 6,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 750,
    center: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
        },
        576: {
            items: 3,
        },
        865: {
            items: 4,
        },
        992: {
            items: 5,
        },
        1340: {
            items: 6,
        }
    }
});
$(".owl-prev").html('<i class="icon-angle-right"></i>');
$(".owl-next").html('<i class="icon-angle-right"></i>');

$('.deal-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    autoplay: false,
    autoplayTimeout: 3000,
    smartSpeed: 750,
    center: true
});



function Dropdown(seletor) {
    var Selected = $(seletor);
    var Drop = $(seletor + '-drop');
    var DropItem = Drop.find('li');

    Selected.click(function() {
        Selected.toggleClass('open');
        Drop.toggle();
    });

    Drop.find('li').click(function() {
        Selected.removeClass('open');
        Drop.hide();

        var item = $(this);
        Selected.html(item.html());
    });

    DropItem.each(function() {
        var code = $(this).attr('data-code');

        if (code != undefined) {
            var countryCode = code.toLowerCase();
            $(this).find('img').addClass('flagstrap-' + countryCode);
        }
    });
}
Dropdown('#country');



$(window).resize(function() {
    get_max_div_height();
});
$(window).ready(function() {
    get_max_div_height();
});

function get_max_div_height() {
    if (window.matchMedia('(min-width: 767px)').matches) {
        $(".equal-height").removeAttr("style");
        var heights = $(".equal-height").map(function() {
                return $(this).height();
            }).resize(),
            maxHeight = Math.max.apply(null, heights);
        $(".equal-height").height(maxHeight);
    } else {

        $(".equal-height").removeAttr("style");

    }
}

// *************** SearchBar ***************

$(document).ready(function() {
    $('.search-inner a').click(function() {
        $('.searchbox').toggleClass('open');
        $('body').toggleClass('overflow');
    });
    $('.cross').click(function() {
        $('.searchbox').removeClass('open');
        $('body').removeClass('overflow');
    });
});



filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

$(document).ready(function() {
    $('#myBtnContainer .btn').click(function() {
        $('#myBtnContainer .btn').removeClass("active");
        $(this).addClass("active");
    });
});