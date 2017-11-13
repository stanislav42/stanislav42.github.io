document.createElement('HEADER');
document.createElement('FOOTER');
document.createElement('ASIDE');
document.createElement('ARTICLE');
document.createElement('MARK');
Function.prototype.clone = function() { var that = this; var temp = function temporary() { return that.apply(this, arguments); }; for (key in this) { temp[key] = this[key]; } return temp; };
$(document).ready(function() {
    $(function() { $('a[rel*=leanModal]').leanModal({ top: 120, closeButton: ".modal_close" }); });
    $('input[data-placeholder], textarea[data-placeholder]').each(function() { var placeholder = $(this).attr('data-placeholder'); if ((($(this).val() !== undefined) && ($(this).val().length > 0)) && ($(this).val() != placeholder)) { $(this).removeClass('placeholder'); } else { $(this).val(placeholder);
            $(this).addClass('placeholder'); } $(this).focusin(function() { $(this).removeClass('placeholder'); if (($(this).val() === undefined) || ($(this).val() == placeholder)) { $(this).val(''); } });
        $(this).focusout(function() { if (($(this).val() === undefined) || ($(this).val() == '') || ($(this).val() == placeholder)) { $(this).val(placeholder);
                $(this).addClass('placeholder'); } }); });
    $('form').submit(function() { $(this).find('input[data-placeholder], textarea[data-placeholder]').each(function() { var placeholder = $(this).attr('data-placeholder');
            $(this).removeClass('placeholder'); if (($(this).val() === undefined) || ($(this).val() == placeholder)) { $(this).val(''); } }); });
    var set_slide = function(selector, slide) {
        $(selector).each(function() {
            var position = slide * 400 + 300;
            var block = $(this);
            var shift = function() { block.css('background-position', '0 ' + position + 'px');
                position -= 100; }
            setTimeout(shift, 60);
            setTimeout(shift, 120);
            setTimeout(shift, 180);
            setTimeout(shift, 240);
        });
    }
    var time = new Date();
    var target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
    target_time = target_time.valueOf() + 1000 * 60 * 60 * 24;
    var tick = function(init) { if (init == undefined) { init = false; } var current_time = new Date();
        current_time = current_time.valueOf(); if (current_time > target_time) { var time = new Date();
            target_time = new Date(time.getFullYear(), time.getMonth(), time.getDate());
            target_time = target_time.valueOf() + 1000 * 60 * 60 * 24; } var time_diff = Math.floor((target_time - current_time) / 1000); var second_2 = time_diff % 10;
        time_diff = Math.floor(time_diff / 10); var second_1 = time_diff % 6;
        time_diff = Math.floor(time_diff / 6); var minute_2 = time_diff % 10;
        time_diff = Math.floor(time_diff / 10); var minute_1 = time_diff % 6;
        time_diff = Math.floor(time_diff / 6); var hour_2 = Math.floor(time_diff / 10); var hour_1 = time_diff % 10;
        set_slide('div.secondPlay', second_2); if ((second_2 == 9) || init) { set_slide('div.second6Play', second_1); if ((second_1 == 5) || init) { set_slide('div.minutePlay', minute_2); if ((minute_2 == 9) || init) { set_slide('div.minute6Play', minute_1); if ((minute_1 == 5) || init) { set_slide('div.hourPlay', hour_1); if ((hour_2 == 9) || init) { set_slide('div.hour2Play', hour_2); } } } } } }
    tick(true);
    setInterval(tick, 1000);
    $('.scroll-animate').each(function() { var block = $(this);
        $(window).scroll(function() { var top = block.offset().top; var bottom = block.height() + top;
            top = top - $(window).height(); var scroll_top = $(this).scrollTop(); if ((scroll_top > top) && (scroll_top < bottom)) { if (!block.hasClass('animate')) { block.addClass('animate');
                    block.trigger('animateIn'); } } else { block.removeClass('animate');
                block.trigger('animateOut'); } }); });
    $('.achi em').each(function() { $(this).attr('data-number', parseInt($(this).text())); });
    $('.achi').on('animateIn', function() { $(this).find('em').each(function() { var count = parseInt($(this).attr('data-number')); var block = $(this); var timeout = null; var step = 1;
            timeout = setInterval(function() { if (step == 17) { block.text(count.toString());
                    clearInterval(timeout); } else { block.text((Math.floor(count * step / 17)).toString());
                    step++; } }, 60); }); });
    $('.yellow .wrap, .for_u .wrap, .hww .wrap, .blue .wrap, .blue_v2, .clients .wrap').on('animateIn', function() { var inter = 0;
        $(this).find('.anim').each(function() { var block = $(this);
            setTimeout(function() { block.css('opacity', 1);
                block.css('transform', 'scale(1.0, 1.0)'); }, inter * 100);
            inter++; }); }).on('animateOut', function() { $(this).find('.anim').each(function() { $(this).css('opacity', 0.01);
            $(this).css('transform', 'scale(1.5, 1.5)'); }); });
});
var __amount;
var startValue = 0;
var minValue = 0;
var maxValue = 60;
var activePlan;
var cost = { 'sol': 300, 'artist': 500, 'transport': 500, 'profit': 5000, 'plan': { 'lite': 0, 'medium': 20000, 'max': 30000, 'vip': 50000, 'turn': 0 } };

function updateAll() {
    var amount = __amount.val();
    if (typeof amount == 'undefined') return;
    if (!amount.toString().length) return;
    amount = Math.max(amount, minValue);
    __amount.val(amount);
    var isArtist = $('#artist').prop('checked');
    var isTransport = $('#haveauto').prop('checked');
    $('.passed').find('a').each(function(index, value) { if ($(value).attr('plan') != activePlan) { $(value).removeClass('active'); } else { $(value).addClass('active'); } });
    var costPlan = cost['plan'][activePlan];
    var costArtist = amount * (!isArtist ? cost['artist'] : 0);
    var costTransport = amount * (!isTransport ? cost['transport'] : 0);
    var costSol = amount * cost['sol'];
    var profit = amount * cost['profit'] - costSol - costTransport - costArtist;
    var turn = amount * cost['profit']
    $('#summ').text(profit);
    $('#turn').text(turn);
    $('#costArtist').text(costArtist);
    $('#costTransport').text(costTransport);
    $('#costSol').text(costSol);
}
$(document).ready(function() {
    __amount = $('#amount');
    activePlan = 'lite';
    $("#amount").keyup(function(eventObject) { updateAll(); });
    $("#artist").click(function(eventObject) { updateAll(); });
    $("#haveauto").click(function(eventObject) { updateAll(); });
    $('.passed').find('a').click(function(eventObject) { activePlan = $(this).attr('plan');
        updateAll(); })
    updateAll();
    $('.area').each(function() { $(this).addClass('hidden_area'); });
    var i;
    var gap = 200;
    var animateDuration = 500;
    var areasElements = $('.area');
    var areas = {};
    for (i = 0; i < areasElements.length; ++i) { area = $(areasElements[i]);
        areas[i] = {};
        areas[i]['area'] = area;
        areas[i]['done'] = false; }
    var action = function() { for (i in areas) { if ($(document).scrollTop() >= areas[i]['area'].offset().top - $(window).height() + gap) { if (false === areas[i]['done']) { areas[i]['done'] = true;
                    areas[i]['area'].animate({ 'opacity': 1 }, animateDuration, 'linear'); } } } };
    $(document).scroll(function() { action(); });
    action();
});