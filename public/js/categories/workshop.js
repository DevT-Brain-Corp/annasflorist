// workshoptext
$(window).on('load', function(){
  $('.workshoptextbg2 .workshop').each(function(i) {
    setTimeout(function() {
      $('.workshoptextbg2 .workshop').eq(i).addClass('showup');
    }, 400 * (i+1));
  });
});
// end workshoptext

// fotocatalog6
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();

  if(wScroll > $('.fotocatalog6').offset().top - 500 ){
    $('.fotocatalog6 .snip1477').each(function(i) {
      setTimeout(function() {
        $('.fotocatalog6 .snip1477').eq(i).addClass('showup');
      }, 300 * (i+1));
    });
  }

  if(wScroll > $('.dokumentasivideo').offset().top - 500 ){
    $('.dokumentasivideo .dokumentasivideo2').each(function(i) {
      setTimeout(function() {
        $('.dokumentasivideo .dokumentasivideo2').eq(i).addClass('showup');
      }, 300 * (i+1));
    });
  }

});
// end fotocatalog6
