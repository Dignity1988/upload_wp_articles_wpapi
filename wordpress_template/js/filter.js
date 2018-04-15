jQuery(document).ready(function($){
jQuery('#filter').submit(function(e){
var e=preventDefault();
var x=jQuery('#filter').serializeArray();
var formurl=jQuery('#filter').attr('action');
$.ajax({
action: 'filter',
type : "POST",
data : x,
dataType : "json",
url:  formurl,
success: function(data),
error : function(jqXHR, textStatus, errorThrown){
alert(jqXHR + " :: " + textStatus + " :: " + errorThown);
}
});
}}
