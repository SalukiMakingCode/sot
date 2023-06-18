$('.training-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fas fa-arrow-circle-left"></i>',
        '<i class="fas fa-arrow-circle-right"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

var owl = $('.owl-carousel');
owl.owlCarousel();

// Go to the next item
$('.next-btn').click(function () {
    owl.trigger('next.owl.carousel');
})

// Go to the previous item
$('.prev-btn').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
     owl.trigger('prev.owl.carousel', [300]);
})
    