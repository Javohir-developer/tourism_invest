(function ($) {
    'use strict';

    // Preloader
    $(window).on('load', function () {
        $('#preloader')
            .delay(1200)
            .fadeOut('slow', function () {
                $(this).remove();
            });
    });
})(window.jQuery);



$(document).ready(function(){
    $(".m-tooltip-right").click(function(){
        $(".wrapper").toggleClass("left-panel-closed");
    });
});

$( ".left-panel-ajax" ).click(function() {
    $("#viddet").val($(this).children().next().val());
});



$(document).ready(function() {
    $('#datatable1').dataTable();
});