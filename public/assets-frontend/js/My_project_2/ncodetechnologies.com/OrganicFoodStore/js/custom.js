/*
Template Name    : Oganic - Organic Food Responsive Store Template for HTML5 and Bootstrap 3
Version          : 1.0.0
Author           : Ashish Shah
Author URI       : http://ncodetechnologies.com//
Created.         : September 2018
File Description : Main js file of the template

// ------------------------------------------ //
//              Table Of Content              //
// ------------------------------------------ //

1. Flag selector
2. Searchbar
3. Menu
4. New arrival
5. Best Deal Carousel
6. Brand Carousel
7. Equal height
8. Go to Top
9. Expertese Filter
10. Quality Filter
11. Responsible Filter
12. Farmer Carousel
13. Accordion
14. Product Accordian
15. Related Product Carousel
16. Tabbing
17. Responsive Tab
18. SmoothRotation
19. Gallery with Tabing
20. Site Loader
21. Deal of the day Filter
22. Custom Quantity button
23. List Grid View Change

*/
$(function() {
    'use strict';
    //////---------------1. Flag selector -------------///////
	function flagSelector(){
        function Dropdown(seletor) {
            var Selected = $(seletor);
            var Drop = $(seletor + '-drop');
            var DropItem = Drop.find('li');

            Selected.on('click', function() {
                Selected.toggleClass('open');
                Drop.toggle();
            });

            Drop.find('li').on('click', function() {
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
    };

    //////---------------2. Searchbar -------------///////
    function searchBar() {
        $('.search-inner a').on('click', function() {
            $('.searchbox').toggleClass('open');
            $('body').toggleClass('overflow');
        });
        $('.cross').on('click', function() {
            $('.searchbox').removeClass('open');
            $('body').removeClass('overflow');
        });
    };

    //////---------------3. Menu-------------///////
    function navMenu() {
        $('.navbar-toggle').on('click', function(event) {
            $('#organic-food-navigation').toggleClass('in');
            $('body').toggleClass('overflow');
            $('body').append('<div class="bgFixed"></div>');
        });

        $('.remove').on('click', function(event) {
            $('#organic-food-navigation').toggleClass('in');
            $('body').toggleClass('overflow');
            $(".bgFixed").remove();
        });
        $('nav .navbar-nav span').on('click', function() {
            $(this).next().toggleClass('open');
            $(this).parent().toggleClass('up');
            $(this).toggleClass('icon-right-arrow');
			$(this).toggleClass('icon-angle-down');
            $(this).toggleClass('add-to-cart');
        });
    };

    //////---------------4. New arrival -------------///////
    function arrivalCarousel() {
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

        $(".owl-prev").html('<i class="icon-right-arrow"></i>');
        $(".owl-next").html('<i class="icon-right-arrow"></i>');
    };
    //////---------------5. Best Deal Carousel -------------///////
    function bestdealCarousel() {
        $('.deal-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 750,
            center: true
        });
    };
    //////---------------6. Brand Carousel -------------///////
    function brandCarousel() {
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
        $(".owl-prev").html('<i class="icon-right-arrow"></i>');
        $(".owl-next").html('<i class="icon-right-arrow"></i>');
    };
    //////---------------7. Equal height -------------///////
    function equalHeight() {
        $('.blog-list-detail').matchHeight()
        $('.equal-height').matchHeight()
    };

    //////---------------8. Go to Top -------------///////
    function topScroll() {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    };
    //////---------------9.Expertese Filter -------------///////
    function expSlider() {
        $('#Expertese').slider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
    };

    //////---------------10.Quality Filter -------------///////
    function qltSlider() {
        $('#Quality').slider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
    };

    //////---------------11.Responsible Filter -------------///////
    function resSlider() {
        $('#Responsible').slider({
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
    };
    //////---------------12. Farmer Carousel -------------///////
    function farmerCarousel() {
        $('.our-farmer').owlCarousel({
            loop: true,
            margin: 40,
            items: 3,
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
                }
            }
        });
        $(".owl-prev").html('<i class="icon-right-arrow"></i>');
        $(".owl-next").html('<i class="icon-right-arrow"></i>');
    };

    //////---------------13. Accordion -------------///////
    function panelAcc() {
        jQuery('#accordion h4[data-toggle="collapse"]').on('click', function() {
            jQuery('#accordion h4[data-toggle="collapse"]').removeClass('collapsed');
            $(this).addClass('collapsed');
        });

        $('#accordion .panel-heading').on('click', function() {
            $('#accordion .panel-heading').removeClass("add");
            $(this).toggleClass("add");
        });
    };

    //////---------------14. Product Accordian-------------///////

    function productSidebar() {
        $('#sidebar .categories-widget ul span').on('click', function() {
            $(this).next('ul').toggleClass('open');
        });
    };
    //////---------------15. Related Product Carousel -------------///////	
    function rproductCarousel() {
        $('.related-product-slider').owlCarousel({
            loop: true,
            margin: 24,
            items: 4,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 750,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                576: {
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

        $(".owl-prev").html('<i class="icon-right-arrow"></i>');
        $(".owl-next").html('<i class="icon-right-arrow"></i>');
    };
    //////---------------16. Tabbing -------------///////
    function listAcc() {
        // Since there's no list-group/tab integration in Bootstrap
        $('.list-group-item').on('click', function(e) {
            var previous = $(this).closest(".list-group").children(".active");
            previous.removeClass('active'); // previous list-item
            $(e.target).addClass('active'); // activated list-item
        });
    };
    //////---------------17. Responsive Tab -------------///////
    function responsiveTab() {
        RESPONSIVEUI.responsiveTabs();
    };

    //////---------------18. SmoothRotation -------------///////
    function smoothRotation() {
        $(window).on('load', function() {
            $('.sp-wrap').smoothproducts();
        });
    };

    //////---------------19. Gallery with Tabing -------------///////
    function tabGallery() {
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
                weight: function(itemElem) {
                    var weight = $(itemElem).find('.weight').text();
                    return parseFloat(weight.replace(/[\(\)]/g, ''));
                }
            }
        });

        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };
        // bind filter button click
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({
                filter: filterValue
            });
        });

        // bind sort button click
        $('#sorts').on('click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            $grid.isotope({
                sortBy: sortByValue
            });
        });

        // change is-checked class on buttons
        $('#filters').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    };
    //////---------------20. Site Loader -------------///////
    function loader() {
        $('#loading').delay(2000).fadeOut('slow');
    };

    // Dom Ready
    $(function() {
        flagSelector();
        navMenu();
        arrivalCarousel();
        bestdealCarousel();
        equalHeight();
        brandCarousel();
        searchBar();
        topScroll();
        expSlider();
        qltSlider();
        resSlider();
        farmerCarousel();
        panelAcc();
        productSidebar();
        rproductCarousel();
        listAcc();
        responsiveTab();
        smoothRotation();
        tabGallery();
        loader();


    });

});

//////---------------21. Deal of the day Filter -------------///////
filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
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
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
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

$('#myBtnContainer .btn').on('click', function() {
    $('#myBtnContainer .btn').removeClass("active");
    $(this).addClass("active");
});

//////---------------22. Custom Quantity button -------------///////
$('.btn-number').on('click', function(e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val(), 10);
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val(), 10) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val(), 10) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function() {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').on('change', function() {

    minValue = parseInt($(this).attr('min'), 10);
    maxValue = parseInt($(this).attr('max'), 10);
    valueCurrent = parseInt($(this).val(), 10);

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }



});


//////---------------23. List Grid View Change ---------------//////
jQuery('#grid').on('click', function() {
    jQuery(this).addClass('active');
    jQuery('#list-btn').removeClass('active');
});

jQuery('#list-btn').on('click', function() {
    jQuery(this).addClass('active');
    jQuery('#grid').removeClass('active');
});

$('#list-btn').on('click', function(event) {
    event.preventDefault();
    $('#products .item').addClass('list-group-item');
});
$('#grid').on('click', function(event) {
    event.preventDefault();
    $('#products .item').removeClass('list-group-item');
    $('#products .item').addClass('grid-group-item');
});