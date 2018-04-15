
jQuery(document).on('change', '#category', '.trip__filter-button', function(){

var category_name = jQuery(this).val();
var ajaxurl="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=trip_name";
jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "trip_name", category_name: category_name },
        success: function(output) {
                     jQuery('.category-trip').html(output);
                     return false;
                 },
        error: function(error){
        console.log(error);
        },
    });
}
);
jQuery(document).on('change', '#date', '.trip__filter-button', function(){

var post_tag= jQuery(this).val();
var ajaxurl="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=trip_date";
jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "trip_date", post_tag: post_tag },
        success: function(output) {
                     jQuery('.category-trip').html(output);
                     return false;
                 },
        error: function(error){
        console.log(error);
        },
    });
}
);
