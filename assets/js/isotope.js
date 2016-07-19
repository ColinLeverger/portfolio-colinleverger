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



