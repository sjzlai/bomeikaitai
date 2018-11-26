$(function(){
    var moveAc = function moveAc(){
        var bigScreen = $('.big>li');
        var smallScreen = $('.small>li');
        bigScreen.on('click',function(){
            // e.preventDefault();
            $(this).find('li').addClass('active');
            // $(this).siblings().removeClass('active');
            $(this).parent().siblings().find('li').removeClass('active');
        })
        smallScreen.on('click',function(){
            // e.preventDefault();
            $(this).addClass('active');
            // $(this).siblings().removeClass('active');
            $(this).parent().siblings().find('li').removeClass('active');
        })
    }
    moveAc();
}())