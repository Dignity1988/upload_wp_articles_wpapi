<?php
 /*Footer template*/

 get_template_part('partials/form');
 ?>

<footer class="grid-responsive" id="footer ">
<div class="prefooter grid-responsive grid-responsive__column" id="prefooter">
<div class="grid-responsive__column grid-responsive__column__col-1">  <?php dynamic_sidebar("footer_column_1");?>
</div>
<div class="grid-responsive__column grid-responsive__column__col-4">
<?php dynamic_sidebar("footer_column_2");?>
</div>
<div class="grid-responsive__column__col-3">
<?php dynamic_sidebar("footer_column_3");?>

</div>
<div class="grid-responsive__column grid-responsive__column__col-4">

      <?php
      $query = new WP_Query(array(
        'posts_per_page'=>1,
        'post_type'=>'gallery',
        'orderby'=>'rand',
        'order'=>'ASC'));
      if ($query->have_posts()){
        while($query->have_posts()){
          $query->the_post();
      the_post_thumbnail();
        }
      }
      ?>



</div>
</div>
<div class="footer grid-responsive grid-responsive__column" id="copyright">
<?php dynamic_sidebar("copyright");?>
</div>
</footer>

<script>jQuery.noConflict();</script>
<?php wp_footer();?>

</body>
