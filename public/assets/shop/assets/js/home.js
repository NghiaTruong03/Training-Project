$('.slider_banner').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        },
        1300:{
            items: 1
        }
    }
})

$(document).on('click','.tag',function() {
    $('.tag').removeClass('tag-active');
    $(this).addClass('tag-active');
})
$(document).on('click','.box2_nav_bar_item',function() {
    $('.box2_nav_bar_item').removeClass('box2_nav_bar_item-active');
    $(this).addClass('box2_nav_bar_item-active');
})