<?php
?>
<div class="grid-responsive__column__col-12 fixed-container">
<div id="form">
<fieldset class="form__field">
<legend class="form__field-intro"> Для связи с нами заполниете пожалуйста следующие поля</legend><div class="form__field-close">x</div>
<field class="form__field-email "><input placeholder="Укажите ваш контактный телефон" class="form_field form_field-text" value="" id="phone" name="phone" required><label for="phone"><small>Предпочтительнее Вайбер<img class="form-icon" src="/wp-content/uploads/2018/04/viber-icon-3.png" width="10" height="10" alt="Viber"> или Whats App<img src="/wp-content/uploads/2018/04/Whatsapp_icon-icons.com_66931.png" width="15" height="15" class="form-icon" alt="Whatsapp"><sup>*<sup></small>     </label></field>

<field class="form__field-email "> <input placeholder="EMAIL" class="form_field form_field-text" value="" id="email" type="email" required></field>
<field class="form__field-name"> <input placeholder="Ф.И.О" class="form_field form_field-text" type="text" id="name"></field>
<select name="trip" class="form__field-trip">
<?php
echo '<option name="trip" class="trip" value="Гималаи" class="trip__request-button" name="trip_name">Гималаи</option><option name="trip" class="trip" value="Гималаи" class="trip__request-button" name="trip_name">Крым</option><option disabled selected>Название похода</option>'
?>;
</select>
<field><input type="submit" class="form__field-submit"  id="submit" value="Отправить" name="отправить"></field>
</fieldset>
</div>
</div>
<?php
