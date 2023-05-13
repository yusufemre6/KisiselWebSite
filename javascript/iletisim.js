function calculateRowHeights() {
    var bodyHeight = $('body').outerHeight();
    var row1Height = $('.row-1').outerHeight();
    var row3Height = $('.row-3').outerHeight();
    var row2Height = bodyHeight - row1Height - row3Height;
    $('.row-2').css('height', row2Height + 'px');
  }

  $(document).ready(function() {
    calculateRowHeights();
  });

  $(window).resize(function() {
    calculateRowHeights();
  });