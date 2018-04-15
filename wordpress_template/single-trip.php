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
  <main id="main" class="main grid-responsive__column grid-responsive__column__col-10 article">
  <hr class="main__hr">
  <?php
  global $post;
  //* placing the contents of the pages///
  if ( have_posts() ) :
    while(have_posts()):the_post();?>




  <div class="grid-responsive__column__col-13 article__title">
  <?php  the_title(); ?>
  </div>

  <div class="grid-responsive__column__col-13 article__review-text">
    <div class="article__img">  <?php the_post_thumbnail(); ?>
</div>
 <?php the_content(); ?>
</div>

<?php   wp_reset_postdata();
?>

<?php get_template_part('partials/form'); ?>

  </main>

<!-- sidebar -->
<?php
endwhile;
endif;
 get_sidebar(); ?>
</div>

<div id="helper_footer">
</div>
</div>
  </div>
<!-- #main -->
<?php
get_footer();
