
// This is the function that loads animations as needed
// Remove class must be 1 second after or CSS must be altered in fade-in animation

jQuery(document).ready(function( $ ) {

  $('.second').addClass('not-active');
	
  setTimeout(function () {
    $('.second').addClass('fade-in');}, 1000
  );
  setTimeout(function () {
    $('.second').removeClass('not-active');}, 2000
  );
	
});
