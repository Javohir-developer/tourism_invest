$(document).ready(function () {

    $('.print').on('click', function () {

        $('.print_block').printThis({
            importCSS: true,
        });
    });

});