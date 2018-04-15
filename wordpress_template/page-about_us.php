

<!DOCTYPE html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php  wp_head(); ?>
<div class="grid-responsive" id="root">
<div class="grid-responsive__container">
<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div class="overlay"></div>
  <main id="main" class="main grid-responsive__column grid-responsive__column__col-10">
  <hr class="main__hr">
  <?php
  global $post;
  //* placing the contents of the pages///
  if ( have_posts() ) :
    while(have_posts()): the_post();

?>

  <?php     the_content();?>

  <?php
  endwhile;
  endif;
  wp_reset_postdata();
  ?>
  <div class="grid-responsive__column__col-12 fixed-container">
  <div id="form">
<fieldset class="form__field">
  <legend class="form__field-intro"> Для того, чтобы отправить заявку на участие в походе заполните поля ниже</legend><div class="form__field-close">x</div>
  <field class="form__field-email "> <input placeholder="EMAIL" class="form_field form_field-text" value="" id="email" type="email" required></field>
    <field class="form__field-name"> <input placeholder="Ф.И.О" class="form_field form_field-text" type="text" id="name"></field>
  <select name="trip" class="form__field-trip">
<?php
  echo '<option name="trip" class="trip" value="'.get_the_title($post->id).'" class="trip__request-button" name="trip_name">'.get_the_title($post->id).'</option><option selected>Название похода</option>'




      ?>;
          </select>
        <field><input type="submit" class="form__field-submit"  id="submit" value="Отправить" name="отправить"></field>
</fieldset>

</div>
  </div>
  </main>

<!-- sidebar -->
<?php  get_sidebar(); ?>
</div>

<div id="helper_footer">
</div>
</div>

<!-- #main -->
<?php
get_footer();
