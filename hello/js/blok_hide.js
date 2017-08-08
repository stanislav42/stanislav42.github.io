$('.spoiler-body').hide();
$('.spoiler-title').click(function(){
    $(this).next().slideToggle();
});