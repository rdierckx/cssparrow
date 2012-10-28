if(!Modernizr.svg) {
   var imgs = $('img[data-fallback]');
   imgs.attr('src', imgs.data('fallback'));
}