<!DOCTYPE html>
<?php wp_head(); ?>
<div class="grid-responsive" id="root">
<div class="grid-responsive__container">
<?php get_header(); ?>
<main id="main" class="main grid-responsive__column grid-responsive__column__col-10">
<hr class="main__hr">
<body <?php body_class(); ?>>
<?php
//* placing the contents of the pages///
if ( have_posts() ) :
?><section class="grid-responsive__row article__trip" id="post-<?php the_ID(); ?>">
<?php get_template_part('partials/content', 'frontpage');
wp_reset_postdata();
?>
</main>
<!-- sidebar -->
<?php get_sidebar(); ?>

</div>

<div id="helper_footer">
</div>
</div>
<!-- #main -->
<?php
get_footer();
