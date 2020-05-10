$(document).ready(function () {
    // $('.modal-fee').modal('show');
});
var window_size = window.innerWidth;
$(window).on('load',function () {
    toggle_faq();
});
$(window).scroll(function () {
    var window_sizescroll = $(window).width();
    if(window_sizescroll >= 992){
        scroll_events();
    }else{
        
    }
});
function scroll_events(){
    var scroll_top = $(window).scrollTop();
    var animation_name = ' animated fadeInDown';
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    if(scroll_top > 100){
        $('header').addClass(animation_name+' fixed-head');
    }else{
        $('header').removeClass(animation_name+' fixed-head');
    }
}
function toggle_faq(){
    $('.list-faq a.ques').on('click',function(){
        $(this).parent('.list-faq').children('.ans').stop().slideToggle(300);
        $(this).find('.fa').toggleClass('fa-chevron-down');
        $(this).find('.fa').toggleClass('fa-chevron-up');
    });
}