// For Mega Menu

$('.navbar-toggle').click(function(event) {
	$('#organic-food-navigation').toggleClass('in');
	$('body').toggleClass('overflow');
	$('body').append('<div class="bg"></div>');
});

$('.remove').click(function(event) {
	$('#organic-food-navigation').toggleClass('in');
	$('body').toggleClass('overflow');
});

$(document).ready(function(){
	$('nav span').click(function(){
	  $(this).next().toggleClass('open');
	  $(this).parent().toggleClass('up');
	  $(this).toggleClass('icon-right-arrow');
	});
});



// For Product Sidebar


 function product_sidebar() {
 	$(document).ready(function(){
 		$('#sidebar .categories-widget ul span').click(function(){
 			$(this).next('ul').toggleClass('open');
 		});
 	});

 }












