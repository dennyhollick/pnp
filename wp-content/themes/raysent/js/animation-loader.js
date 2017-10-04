
// This is the function that loads animations as needed
// Remove class must be 1 second after or CSS must be altered in fade-in animation

jQuery(document).ready(function( $ ) {

  // This loads the text after SVGs have animated for 2s

  $('.second').addClass('not-active');
	
  setTimeout(function () {
    $('.second').addClass('fade-in');}, 1000
  );
  setTimeout(function () {
    $('.second').removeClass('not-active');}, 2000
  );
  $('.third').addClass('not-active');

  setTimeout(function () {
    $('.third').addClass('fade-in');}, 3000
  );
  setTimeout(function () {
    $('.third').removeClass('not-active');}, 5000
  );


  // This will calculate the distance between the main title and your mouse

  (function() {
    
    var mX, mY, distance,
        $distance = $('#distance span'),
        $element  = $('#Layer_1');

    function calculateDistance(elem, mouseX, mouseY) {
        return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
    }

    function calculateBrightness (distance) {
      var maxDist = 800;
      var precentageOfMaxDist = (800 - distance) / 800;
      if (precentageOfMaxDist > .10) {
        return precentageOfMaxDist;
      } else {
        return .10;
      }
    }

    $(document).mousemove(function(e) {  
        mX = e.pageX;
        mY = e.pageY;
        distance = calculateDistance($element, mX, mY);
        var brightness = calculateBrightness(distance);
        var shadowString = "drop-shadow(rgba(255, 255, 255, " + brightness + ") 0px 0px 6px) "
        var shadowStringConcat = shadowString + shadowString + shadowString;
        $element.attr('style', 'filter: ' + shadowStringConcat);
    });

})();
	
});
