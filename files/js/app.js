$(".nav li").on("click", function(){
    $(".nav li").removeClass("active");
    $(this).addClass("active");
});

$(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$(function(){
    $('.carousel').carousel({
        interval: 1000,
        pause: false,
        wrap: false,
        keyboard: true
    });
});