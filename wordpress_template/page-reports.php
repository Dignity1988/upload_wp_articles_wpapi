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
          <section class="category-trip">


  <?php
  //* placing the contents of the pages///
  if (have_posts()) :
    $category = get_terms('category');//custom category name
     $posttags = get_terms('post_tag');//custom tag name
  while (have_posts()) : the_post();

      $query = new WP_Query(array(
        'posts_per_page'=>5,
        'post_type'=>'trip',

        'orderby'=>'rand',
        'order'=>'DSC'));
      if ($query->have_posts()){


          ?><div class="gallery__filter">
              <button name="category" value="без-рубрики" class="trip__filter-list">Все</button>
              <select class="trip__filter-list" id="date" >
              <?php
              foreach ($posttags as $post_tag) {
              echo '<option type="button" value="'.$post_tag->name.'" class="gallery__filter-button" name="post_tag">'.$post_tag->name.'</option>';
              }
            ?><option disabled selected>Дата</option></select><?php

              $category = get_terms('category');

            ?>
                <select id="category" class="trip__filter-list grid-responsive__column__col-3">
                <?php




                foreach ($category as $catVal) {
                echo '<option type="button" value="'.$catVal->name.'" class="gallery__filter-button" name="category">'.$catVal->name.'</option>';
                }
              ?><option disabled selected>Местность</option>
            </select></div><?php





        while($query->have_posts()){
          $query->the_post();
    ?>
    <section class="grid-responsive__row article__review" id="post-<?php the_ID(); ?>">
    <article class="article">
    <div class="grid-responsive__column__col-7 article__review-photo"><?php the_post_thumbnail(); ?></div>
    <div class="grid-responsive__column__col-6 article__review-text">

    <h6 class="article__title">
      <?php the_title(); ?>
</h6>
    <h5 class="article__text_guide"><?php the_field('date'); ?></h5>

    <p class="article__text"><?php the_excerpt(); ?></p>

    <a href="<?php the_permalink();?>" class="button__square-more">подробнее</a>
    </div>
    </article>
    </section>
          <?php
        }
      }




    ?>
        </section>

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
