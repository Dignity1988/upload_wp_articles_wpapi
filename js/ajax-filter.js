
jQuery(document).on('change', '#category', '.gallery__filter-button', function(){

var category_name = jQuery(this).val();
var ajaxurl="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=gallery_name";
jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "gallery_name", gallery_name: category_name, },
        success: function(output) {
                     jQuery('.gallery').html(output);
                     return false;
                 },
        error: function(error){
        console.log(error);
        },
    });
});
jQuery(document).on('change', '#date', '.gallery__filter-button', function(){
var post_tag= jQuery(this).val();

var ajaxurl="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=gallery_date";
jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "gallery_date", gallery_date: post_tag },
        success: function(output) {
                     jQuery('.gallery').html(output);
                     return false;
                 },
        error: function(error){
        console.log(error);
        },
    });
}
);
