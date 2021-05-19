$(document).ready(function() {
    App.init();
});

$( "#invest-region_id" ).change(function() {
    var city = $(this).val();
    console.log(city);
    $.ajax({
        url: "../invest/cite?region=" + city,
        type: "get",
        success: function (response) {
            $('#invest-city_id').html(response);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});