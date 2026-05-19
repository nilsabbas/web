$('#owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000, // Initial autoplay duration of 10 seconds
    nav: true,
    items: 2,
    responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1000: { items: 2 }
    }
}).on('click', '.owl-nav button', function() {
    var owl = $('#owl-carousel').data('owl.carousel');
    owl.settings.autoplayTimeout = 10000; // Reset autoplay duration to 10 seconds
    owl.trigger('stop.owl.autoplay');
    owl.trigger('play.owl.autoplay', [10000]);
});
