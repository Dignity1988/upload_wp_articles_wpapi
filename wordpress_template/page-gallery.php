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
<div class="overlay"></div>
<section class="gallery">
<?php
$category = get_terms('category');
//* placing the contents of the pages///
if (have_posts()) :
while (have_posts()) : the_post();
$query = new WP_Query(array(
  'posts_per_page'=>10,
  'post_type'=>'gallery',
  'orderby'=>'rand',
  'tag'=>'',
  'category_name'=>'Без-рубрики',
  'order'=>'DSC'));
if ($query->have_posts()){
  $t = wp_get_post_tags($post->ID);

  $category = get_terms('category');
$posttags = get_terms('post_tag');

?><div class="gallery__filter">
    <button name="tag" value="Без-рубрики" class="gallery__filter-list">Все</button>
    <select id="date" class="gallery__filter-list">
    <?php
    foreach ($posttags as $post_tag) {
    echo '<option type="button" value="'.$post_tag->name.'" class="gallery__filter-button" name="category">'.$post_tag->name.'</option>';
    }
  ?><option disabled selected>Дата</option></select><?php

    $category = get_terms('category');

  ?>
      <select id="category" class="gallery__filter-list grid-responsive__column__col-3">
      <?php




      foreach ($category as $catVal) {
      echo '<option type="button" value="'.$catVal->name.'" class="gallery__filter-button" name="category">'.$catVal->name.'</option>';
      }
    ?><option disabled selected>Местность</option>
  </select></div><?php



while($query->have_posts()){
$query->the_post();
?>
<a class="lightboxgallery-gallery-item" target="_blank" href="<?php the_post_thumbnail_url(); ?>" data-title="<?php the_field('date');?>&nbsp;<?php the_field('place'); ?>" data-alt="<?php the_field('date');?>&nbsp;<? the_field('place'); ?>" data-desc="<?php the_excerpt(); ?>">
          <div>
          <?php the_post_thumbnail(); ?>
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title"><?php the_title()?></span>
            </div>
          </div>
        </a>
<?php
}
}
//custom category name

endwhile;
endif;
wp_reset_postdata();
the_content();

wp_reset_postdata();
?>

</section>


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
