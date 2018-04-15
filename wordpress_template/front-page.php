<!DOCTYPE html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head(); ?>
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
    while(have_posts()):the_post();
    the_content();
  endwhile;
  endif;
    wp_reset_postdata();
?><section class="grid-responsive__row main__slider">
<ul id="slides" class="">
<?php
  global $post;
  $query = new WP_Query(array(
    'posts_per_page'=>-1,
    'post_type'=>'slider'));
  if ($query->have_posts()){
    while($query->have_posts()){
      $query->the_post();
      echo '<li class="slide">';
the_post_thumbnail();
echo '<div class="slide__mask mask-text"><p>';
the_excerpt();echo '<br>';echo '</p></div></li>';
}
}
?>
</ul><?php
    $query = new WP_Query(array(
      'posts_per_page'=>2,
      'post_type'=>'trip',
      'orderby'=>'date',
      'order'=>'ASC'));
    if ($query->have_posts()){
      while($query->have_posts()){
        $query->the_post();
        /*поход*/
  ?>
        <section class="grid-responsive__row article__trip" id="post-<?php the_ID();?>">
        <div class="grid-responsive__column__col-7  article__photo"><?php the_post_thumbnail(); ?></div>
        <div class="grid-responsive__column__col-6 article__trip">
        <article class="article">
        <h6 class="article__title">
        <span class="article__title article__title-meta"><?php the_title(); ?></span> <br>     <date class="article__date"><?php the_field('date'); ?></date>
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


get_template_part('partials/form');?>
</main>
<!-- sidebar -->
<?php
 get_sidebar();
wp_reset_postdata();?>
</div>
<div id="helper_footer">
</div>
</div>
</div>
<!-- #main -->
<?php
get_footer();
