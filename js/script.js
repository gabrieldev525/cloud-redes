$(window).on('load', function() {
    var date = new Date();
    var years = date.getFullYear();

    $('#years').text(years);
});

$(window).on("scroll", function() {
    var y = $(window).scrollTop();

    //alert("ola");

    if(y >= $(window).height() / 3) {
        $("#menu").addClass("menu-style");
        $("#menu a").css('color', '#000');
    } else {
        $("#menu").removeClass("menu-style");
        $("#menu a").css('color', '#fff');
    }
});