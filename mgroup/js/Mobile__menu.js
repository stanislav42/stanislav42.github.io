$('.burger_deluxe').on('click',function() {

  $(this).toggleClass('open');
  $('.overlay').toggleClass('open');
  
});

$('.link-item-mob').on('click',function() {
  $('.burger_deluxe').toggleClass('open');
  $('.overlay').toggleClass('open');
  
});