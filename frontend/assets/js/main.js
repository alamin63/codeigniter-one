(function($){"use strict";jQuery(document).ready(function($){if($('.bizes-nav').length){jQuery('.bizes-nav').meanmenu();}
if($('#welcome-slide').length){$('#welcome-slide').owlCarousel({autoplay:false,items:1,loop:true,autoplayHoverPause:false,smartSpeed:500,margin:0,nav:true,navText:['<i class="icofont icofont-arrow-left"></i>','<i class="icofont icofont-arrow-right"></i>'],dots:true,})}
if($('.img-carousle').length){$('.img-carousle').owlCarousel({autoplay:5000,loop:true,items:1,})}
$('.portfolio-wrap').imagesLoaded(function(){$('.filter-menu').on('click','button',function(){var filterValue=$(this).attr('data-filter');$grid.isotope({filter:filterValue});});var $grid=$('.portfolio-wrap').isotope({itemSelector:'.portfolio-item',percentPosition:true,masonry:{columnWidth:'.portfolio-item',}});});$('.filter-menu > button').on('click',function(event){$(this).siblings('.active').removeClass('active');$(this).addClass('active');event.preventDefault();});if($('.home-blog-wraper').length){$('.home-blog-wraper').owlCarousel({autoplay:5000,items:3,loop:true,autoplayHoverPause:false,smartSpeed:500,margin:10,nav:false,dots:true,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},768:{items:2,},1000:{items:3,}}})}
if($('.logo-wrap').length){$('.logo-wrap').owlCarousel({autoplay:5000,loop:true,autoplayHoverPause:false,smartSpeed:500,nav:false,dots:false,margin:20,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},768:{items:4,},1000:{items:5,}}})}
if($('.testimonial-wrap').length){$('.testimonial-wrap').owlCarousel({autoplay:5000,items:3,loop:true,autoplayHoverPause:false,smartSpeed:500,margin:0,nav:false,dots:true,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},768:{items:2,},1000:{items:3,}}})}
if($('.client-wraper').length){$('.client-wraper').owlCarousel({autoplay:false,items:3,loop:false,autoplayHoverPause:false,smartSpeed:500,margin:0,nav:false,dots:false,responsiveClass:true,responsive:{0:{items:1,},600:{items:2,},768:{items:2,},1000:{items:3,}}})}
if($('.counter').length){$('.counter').counterUp({delay:10,time:2000});}
if($('.venobox').length){$('.venobox').venobox();}
$.scrollUp({scrollText:'<i class="icofont icofont-arrow-up"></i>',easingType:'linear',scrollSpeed:900,animation:'fade'});});$(window).on('scroll',function(){if($(this).scrollTop()>1){$('.header-area.primary-header').addClass("scroll-header");}
else{$('.header-area.primary-header').removeClass("scroll-header");}});$(window).on('load',function(){jQuery(".preloader-wrap").fadeOut(500);});$(document).keydown(function(event){if(event.keyCode==123){return false;}
else if(event.ctrlKey&&event.shiftKey&&event.keyCode==73){return false;}});})(jQuery);