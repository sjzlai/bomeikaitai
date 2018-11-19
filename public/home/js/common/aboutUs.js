$(function(){
    var readMore = function readMore(){
        var readDown = $('.read_more');
        var readUp = $('.read_up');
        readDown.on('click',function(){
            $(this).parent().find('.vam_detail').removeClass('max_height');
            $(this).next().removeClass('hidden');
            $(this).addClass('hidden');
        })
        readUp.on('click',function(){
            $(this).parent().find('.vam_detail').addClass('max_height');
            $(this).prev().removeClass('hidden');
            $(this).addClass('hidden');
        })
    }
    readMore();
}())