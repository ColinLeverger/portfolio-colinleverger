var t = true;

$(document).ready(function () {
    /* activate jquery isotope */
    var $container = $('#posts').isotope({
        itemSelector: '.item',
        isFitWidth: false,
        resizable: false,
        layoutMode: 'fitRows',
        filter: '*'
    });

    // filter items on button click
    $('#filters').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({filter: filterValue});
    });
});

$(window).on('scroll', function () {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 150;             // set to whatever you want it to be

    if (y_scroll_pos > scroll_pos_test && t) {
        $container.isotope({filter: "*"});
        t = false;
    }
});



