



  <!DOCTYPE html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php  wp_head(); ?>
  <div class="grid-responsive" id="root">
  <div class="grid-responsive__container">
  <?php get_header(); ?>
  <main id="main" class="main grid-responsive__column grid-responsive__column__col-10">
    <div class="overlay"></div>
          <hr class="main__hr">
  <?php
  //* placing the contents of the pages///
  if (have_posts()) :
  while (have_posts()) : the_post();
  ?><div class="gallery__filter"  id="filter">
      <button name="category" value="без-рубрики" class="gallery__filter-list">Разное</button>
      <select class="trip__filter-list" action="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=filter">
      <?php
      foreach ($posttags as $post_tag) {
      echo '<option type="button" value="'.$post_tag->name.'" class="trip__filter-button" name="category">'.$post_tag->name.'</option><option disabled selected>Дата</option>';
      }
    ?></select><?php

      $category = get_terms('category');

    ?>
        <select class="gallery__filter-list grid-responsive__column__col-3" action="http://new.whiteraven.org.ua/wp-admin/admin-ajax.php?action=filter">
        <?php




        foreach ($category as $catVal) {
        echo '<option type="button" value="'.$catVal->name.'" class="gallery__filter-button" name="category">'.$catVal->name.'</option>';
        }
      ?><option disabled selected>Путешествие</option>
    </select></div><?php
      $query = new WP_Query(array(
        'posts_per_page'=>20,
        'post_type'=>'trip',
        'orderby'=>'title',
        'order'=>'DSC'));
      if ($query->have_posts()){
        while($query->have_posts()){
          $query->the_post();
    ?>
          <section class="grid-responsive__row article__trip" id="post-<?php the_ID(); ?>">
          <div class="grid-responsive__column__col-7  article__photo"><?php the_post_thumbnail(); ?></div>
          <div class="grid-responsive__column__col-6 article__trip">
          <article class="article">
          <h6 class="article__title">
          <span class="article__title article__title-meta"><?php the_title(); ?></span> <br><date class="article__date"><?php the_field('date'); ?></date>
          </h6>
          <p class="article_text">
          <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Читать далее</a>
          </p>
          <button value="<?php the_title(); ?>" class="article__button button__square-more">Хочу</button>
          </div>
          </article>
          </section>
          <?php
        }
      }
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
  ?>
            </select>
          <field><input type="submit" class="form__field-submit"  id="submit" value="Отправить" name="отправить"></field>
  </fieldset>

  </div>
  </div>
<?php
  endwhile;
  endif;
  wp_reset_postdata();
  ?>
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
