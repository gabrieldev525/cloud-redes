$(window).on('load', function() {
    var date = new Date();
    var years = date.getFullYear();

    $('#years').text(years);
});