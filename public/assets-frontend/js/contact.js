new WOW().init();



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



$(window).resize(function() {
    get_max_div_height();
});
$(window).ready(function() {
    get_max_div_height();
});

function get_max_div_height() {
    if (window.matchMedia('(min-width: 768px)').matches) {
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
