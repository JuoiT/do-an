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



$(window).resize(function() {
    product_sidebar();
});
$(window).ready(function() {
    product_sidebar();
});


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

// With JQuery
// $("#price-range").slider({});

// Without JQuery
var slider = new Slider('#price-range', {});



$(document).ready(function() {

    jQuery('#grid').click(function() {
        jQuery(this).addClass('active');
        jQuery('#list-btn').removeClass('active');
    });

    jQuery('#list-btn').click(function() {
        jQuery(this).addClass('active');
        jQuery('#grid').removeClass('active');
    });

    $('#list-btn').click(function(event) {
        event.preventDefault();
        $('#products .item').addClass('list-group-item');
    });
    $('#grid').click(function(event) {
        event.preventDefault();
        $('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');
    });
});
