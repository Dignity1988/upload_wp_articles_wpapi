

  <?php the_content(); ob_start();
  $query = new WP_Query( array(
  'post_type' => 'trip',
  'posts_per_page' => 999999,
  'order' => 'DSC',
  'orderby'=> 'date',
  'orderby' => 'title',
  ) );
  if ($query->have_posts()){
  while ($query->have_posts()) : $query->the_post(); ?>
  <section class="grid-responsive__row article__trip" id="post-<?php the_ID(); ?>">
  <div class="grid-responsive__column__col-7"><img class="article__img  img_responsive" src="./img/1.jpg"><?php the_post_thumbnail(); ?></div>
  <div class="grid-responsive__column__col-6">
  <h6 class="article__title"><date><?php// get_field('срок похода');?></date>
  <span class="article__title article__title-meta"><?php the_title(); ?></span>
  </h6>
  <p class="article_text">
  <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Читать далее</a>
  </p>
  <button class="article__button button__square-more">Хочу</button>
  </div>
  </section>
  <?php endwhile;wp_reset_postdata(); ?>
  <?php ob_get_clean();
  }?>
