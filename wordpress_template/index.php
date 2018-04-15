<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php  wp_head(); ?>
<div class="grid-responsive" id="root">
<div class="grid-responsive__container">
<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php
//* placing the contents of the pages///
if ( have_posts() ) :
while ( have_posts() ) : the_post();
if ( is_home()) :
get_template_part( 'template-parts/', 'frontpage' );
elseif ( !is_front_page() ) :
get_template_part( 'template-parts/', 'page' );
endif;
endwhile;
else :
get_template_part( 'template-parts/', 'none' );
endif;
wp_reset_postdata();
?>

<!-- sidebar -->
<?php  get_sidebar(); ?>
</div>

<div id="helper_footer">
</div>
</div>
  </div>
<!-- #main -->
<?php
get_footer();
