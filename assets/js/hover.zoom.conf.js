$(function () {


    $('.blue').hoverZoom({
        overlayColor: '#3498db',
        zoom: 0
    });

    $('.green').hoverZoom({
        overlayColor: '#4CAF50',
        zoom: 0
    });

    $('.pink').hoverZoom({
        overlayColor: '#bd2e75',
        zoom: 0
    });

    $('.black').hoverZoom({
        overlayColor: '#2f2f2f',
        zoom: 0
    });

    $('.alizarin').hoverZoom({
        overlayColor: '#e74c3c',
        zoom: 0
    });

    /* USAGE

     $('#pink').hoverZoom({
     overlay: true, // false to turn off (default true)
     overlayColor: '#2e9dbd', // overlay background color
     overlayOpacity: 0.7, // overlay opacity
     zoom: 25, // amount to zoom (px)
     speed: 300 // speed of the hover
     });

     */

});

$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });
});

$(function () {
    new Waypoint({
        element: document.getElementById('skills-bar'),
        handler: function () {
            $('.progress .progress-bar').progressbar();
        },
        offset: 400
    })
});



