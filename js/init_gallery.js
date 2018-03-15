jQuery(function($) {
 $('.lightboxgallery-gallery-item').click(function(event) {
    event.preventDefault();
    $(this).lightboxgallery({
      showCounter: true,
      showTitle: true,
      showDescription: true
    });
  });
});
