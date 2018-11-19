$(function(){
    var moveAc = function moveAc(){
        var bigScreen = $('.big>li');
        var smallScreen = $('.small>li');
        bigScreen.on('click',function(e){
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        })
        smallScreen.on('click',function(e){
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        })
    }
    moveAc();
}())