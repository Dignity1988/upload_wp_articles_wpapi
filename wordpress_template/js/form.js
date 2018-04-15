jQuery(document).ready(function(){
jQuery(".article__button").click(function(){
jQuery( "#form" ).toggle( "slow" );
jQuery( ".overlay" ).fadeToggle( "fast" );
}  );
jQuery(".form__field-close").click(function(){
jQuery( "#form" ).toggle( "slow" );
jQuery( ".overlay" ).fadeToggle( "fast" );});
jQuery(document).on('click', '#submit', function(e){
e.preventDefault();
var adminajaxurl="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=formtrip";
var email=jQuery('#email').val();
var name=jQuery('#name').val();
var phone=jQuery('#phone').val();
var trip=jQuery('.article__button').val();
if (email.length > 0){

jQuery.ajax({
type:"POST",
url:adminajaxurl,
data: {"action": "formtrip", email: email, name: name, trip: trip, phone: phone},
success:function(output){alert('Ваше письмо отправлено. Мы ответим вам в ближайшее время');console.log(output);jQuery( "#form" ).toggle( "slow" );
jQuery( ".overlay" ).fadeToggle( "fast" );
}

});
}
else {
  alert('Пожалуйста заполните поле "EMAIL" для валидации формы')
}
});
});
