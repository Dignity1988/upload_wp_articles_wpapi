<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php  wp_head(); ?>
<div class="grid-responsive" id="root">
<div class="grid-responsive__container">
<?php get_header(); ?>
<main id="main" class="main grid-responsive__column grid-responsive__column__col-10">
        <hr class="main__hr">
<?php
//* placing the contents of the pages///
if (have_posts()) :
while (have_posts()) : the_post();
get_template_part('partials/content','page');
if (is_front_page()):


  $query = new WP_Query(array(
    'posts_per_page'=>2,
    'post_type'=>'trip',
    'orderby'=>'title',
    'order'=>'DSC'));
  if ($query->have_posts()){
    while($query->have_posts()){
      $query->the_post();

  get_template_part('partials/content','trip');

      }
    }
  wp_reset_postdata();

endif;

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
