jQuery(function($) {
    $("#phone,#phone2").mask("+7 (999) 999-9999");
});
$(document).ready(function() {
    $('.spoiler_links').click(function() {
        if ($(this).next('.spoiler_body').css("display") == "none") {
            $('.spoiler_body').hide('normal');
            $(this).next('.spoiler_body').toggle('normal');
        } else $('.spoiler_body').hide('normal');
        return false;
    });
});