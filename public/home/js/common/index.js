$(function(){
    $(window).resize(function() {  
        var wB = $('.img_big').width();
        var wS = $('.img_mask');
        wS.css({
            width:wB
        })
    })
    var maskBig = function(){
        var wBig = $('.img_big').width();
        var wSmall = $('.img_mask');
        wSmall.css({
            width:wBig
        })
    }
    maskBig();
}())