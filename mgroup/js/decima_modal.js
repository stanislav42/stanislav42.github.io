// MODAL SUPERIOR-TECH
$(document).ready(function() {


(function( $ ){

$.fn.myPlugin = function() {

//////////////////////Клик по элементу в аттрибуте которого есть h1
$(this).click(function(e){
//var id_mobal_frame=$(this).attr("href");



if( typeof $(this).attr('h2') == 'undefined' ){
$('.modal_h2').html('Наш менеджер свяжется с вами в течение 15 минут');
}

else{$('.modal_h2').html($(this).attr('h2'));}




if($(this).attr('h1')=='target'){
		$('.modal_h1').html(  'Получить консультацию по пункту: <br> <b style="font-size:24px; color:#0775b0">' +  $(this).parent().parent('.dorab_container').find('.dorab_h1').text() +'</b>'   );
	}else{
		
		$('.modal_h1').html($(this).attr('h1'));
		
		}

$('.modal_background_frame .btn').val($(this).attr('btn'));

attrib = $('.modal_h1').html();


$('.modal_background_frame').css('margin-left', ($(window).innerWidth() - $('.modal_background_frame').width())/2 );
$('.modal_background_frame').css('margin-top', ($(window).innerHeight() - $('.modal_background_frame').height())/2 );
$('.modal_background_frame2').css('margin-top', ($(window).innerHeight() - $('.modal_background_frame2').height())/2 - 50 );


$('.modal_background').fadeIn();
$('.modal_background_frame').fadeIn(); 


$('.modal_background_frame').addClass("reserv");


});
//////////////////////Клик по элементу в аттрибуте которого есть h1
};})( jQuery );




$('div[h1]').myPlugin();

//$('.calculator .btn').mySelectionPlugin();//ISS
///////////////////////////////////////////////
///////////////////////////////////////////////
///////////////////////////////////////////////





//////////////////КЛИК ДЛЯ ОТКРЫТИЯ/////////////////
/*
$('.modal_z').click(function(){ 


if( typeof $(this).attr('h2') == 'undefined' ){
$('.modal_h2').html('Вам перезвонят через 12 мин');
}

$('.modal_h1').html($(this).attr('h1'));

$('.modal_background').fadeIn();
$('.modal_background_frame').fadeIn(); 





$('.modal_background_frame').css('margin-left', ($(window).innerWidth() - $('.modal_background_frame').width())/2 );
$('.modal_background_frame').css('margin-top', ($(window).innerHeight() - $('.modal_background_frame').height())/2 );


});
*/
//////////////////КЛИК ДЛЯ ОТКРЫТИЯ/////////////////

///////////Закрытие формы/////////////////

$('.modal_background').click(function(){ 
$('.modal_background').fadeOut(400, modalCleanUp);
$('.modal_background_frame').fadeOut(); 
});

$('.modal_exit').click(function(){ 
$('.modal_background').fadeOut(400, modalCleanUp);
$('.modal_background_frame').fadeOut(); 

});

function modalCleanUp() {
	$('.modal_h1').html('');
	$('.modal_h2').html('');
}

//////////////CLICK END////////////

});