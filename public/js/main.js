$(document).ready(function(){
    $('#op_0').click(function(){
        $('html, body').animate({
            scrollTop: $('#main').offset().top
        }, 1000);
    })

    $('#op_1').click(function(){
        $('html, body').animate({
            scrollTop: $('#main2').offset().top
        }, 1000);
    })
})