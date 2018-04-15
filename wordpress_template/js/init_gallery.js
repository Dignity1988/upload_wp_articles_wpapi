jQuery(document).ready(function() {
 jQuery(document).on('click', '.lightboxgallery-gallery-item', '.lightboxgallery-gallery-item', function(event) {
    event.preventDefault();
    jQuery(this).lightboxgallery({
      showCounter: true,
      showTitle: true,
      showDescription: true
    });
  });
});
