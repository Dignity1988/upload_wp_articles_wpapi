<?php
global $post;
//* placing the contents of the pages///
if ( have_posts() ) :
  while(have_posts()):the_post();
  the_content();
  wp_reset_postdata();
  $query = new WP_Query(array(
    'posts_per_page'=>-1,
    'post_type'=>'slide',
    'orderby'=>'title',
    'order'=>'DSC'));
  if ($query->have_posts()){
    while($query->have_posts()){
      $query->the_post();
  ?>

<li class="slide"><?php get_the_post_thumbnail($post->id); ?>
<div class="slide__mask mask-text">
<h5><?php the_excerpt(); ?><br><br>
<? the_content()?></h4>
</div>
</li>

  <?php
}
}


    wp_reset_postdata();
?>
