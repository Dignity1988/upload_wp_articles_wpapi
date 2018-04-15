<?php
/*Raven theme functions */
add_theme_support( 'post-thumbnails' );
function raven_setup(){
  if( function_exists('acf_add_options_page') ) {

  	$option_page = acf_add_options_page(array(
  		'page_title' 	=> 'Theme General Settings',
  		'menu_title' 	=> 'Theme Settings',
  		'menu_slug' 	=> 'theme-general-settings',
  		'capability' 	=> 'edit_posts',
  		'redirect' 	=> false
  	));

  }
if ( function_exists( 'add_theme_support' ) ) {

    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    // additional image sizes
    // delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)


    $defaults = array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );}}

add_action('after_theme_setup','raven_setup');

add_theme_support( 'custom-logo', array(
   'header-text' => array( 'site-title', 'site-description' ),
) );


/* Enqueue scripts and styles.*/
function raven_scripts()  {
wp_enqueue_script( 'jQuery1', get_template_directory_uri() . '/js/jquery.js');
wp_enqueue_script('g_init', get_template_directory_uri() . '/js/init_gallery.js', array( ), null, true);
wp_enqueue_style( 'raven', get_stylesheet_uri() );
wp_enqueue_script('ajaxform', get_template_directory_uri() . '/js/form.js' ,array(), null, true);
wp_localize_script( 'ajaxfrom', 'formtrip', array( 'ajaxurl' => admin_url( 'admin-ajax.php/?action=formtrip')));
if (is_front_page()){


wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array( ), null, true );
}
if (is_page( 'gallery' )){
wp_enqueue_script( 'gallery', get_template_directory_uri() . '/js/gallery.js', array(  ), null, false);
wp_enqueue_style( 'addstyle', get_template_directory_uri() . '/styles/site.css',1, true);
wp_enqueue_script('ajax', get_template_directory_uri() . '/js/ajax-filter.js' ,array(), null, true);
wp_localize_script( 'ajax', 'category_date', array( 'ajaxurl' => admin_url( 'admin-ajax.php/?action=gallery_category_date')));
wp_localize_script( 'ajax', 'category_name', array( 'ajaxurl' => admin_url( 'admin-ajax.php/?action=gallery_category_name')));
}
if (is_page( 'reports' )){
wp_enqueue_script('ajax_trip', get_template_directory_uri() . '/js/ajax-filter-trip.js' ,array(), null, true);
wp_localize_script( 'ajax_trip', 'trip_date', array( 'ajaxurl' => admin_url( 'admin-ajax.php/?action=trip_date')));
wp_localize_script( 'ajax_trip', 'trip_name', array( 'ajaxurl' => admin_url( 'admin-ajax.php/?action=trip_name')));
}


wp_enqueue_script( 'jivo', get_template_directory_uri() . '/js/jivo.js', array( ), null, true );
wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array( ), null, true );
}
add_action( 'wp_enqueue_scripts', 'raven_scripts' );



/*add custom trip*/

// Register Custom trip
// Register Custom trip

// Register Custom Post Type

/*remove actions to clean wp_head*/
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action( 'wp_head', 'wp_resource_hints', 2 );//remove dns prefech
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // remove emojis
remove_action( 'wp_print_styles', 'print_emoji_styles' );   // remove emojis

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // remove the / and previous post links

remove_action('wp_head', 'feed_links', 2); // remove rss feed links
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); // remove the REST API link
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // remove oEmbed discovery links
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 ); // remove the REST API link from HTTP Headers

remove_action( 'wp_head', 'wp_oembed_add_host_js' ); // remove oEmbed-specific javascript from front-end / back-end

remove_action('rest_api_init', 'wp_oembed_register_route'); // remove the oEmbed REST API route
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10); // don't filter oEmbed results


/*end remove meta actions*/
function custom_post_type() {
  $labels = array(
    'name'                  => _x( 'trips', 'Post Type General Name', 'raven' ),
    'singular_name'         => _x( 'trip', 'Post Type Singular Name', 'raven' ),
    'menu_name'             => __( 'походы', 'raven' ),
    'name_admin_bar'        => __( 'походы', 'raven' ),
    'archives'              => __( 'Item Archives', 'raven' ),
    'attributes'            => __( 'Item Attributes', 'raven' ),
    'parent_item_colon'     => __( 'Parent Item:', 'raven' ),
    'all_items'             => __( 'All Items', 'raven' ),
    'add_new_item'          => __( 'Add New Item', 'raven' ),
    'add_new'               => __( 'Add New', 'raven' ),
    'new_item'              => __( 'New Item', 'raven' ),
    'edit_item'             => __( 'Edit Item', 'raven' ),
    'update_item'           => __( 'Update Item', 'raven' ),
    'view_item'             => __( 'View Item', 'raven' ),
    'view_items'            => __( 'View Items', 'raven' ),
    'search_items'          => __( 'Search Item', 'raven' ),
    'not_found'             => __( 'Not found', 'raven' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'raven' ),
    'featured_image'        => __( 'Featured Image', 'raven' ),
    'set_featured_image'    => __( 'Set featured image', 'raven' ),
    'remove_featured_image' => __( 'Remove featured image', 'raven' ),
    'use_featured_image'    => __( 'Use as featured image', 'raven' ),
    'insert_into_item'      => __( 'Insert into item', 'raven' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'raven' ),
    'items_list'            => __( 'Items list', 'raven' ),
    'items_list_navigation' => __( 'Items list navigation', 'raven' ),
    'filter_items_list'     => __( 'Filter items list', 'raven' ),
  );
  $args = array(
    'label'                 => __( 'trip', 'raven' ),
    'description'           => __( 'походы', 'raven' ),
    'labels'                => $labels,
    'supports'              => array(  'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),//add all s
    'taxonomies' => array('category', 'trip', 'post_tag'),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'trip',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
);

	register_post_type( 'trip', $args );

}
add_action( 'init', 'custom_post_type', 0 );



function custom_slide() {
  $labels = array(
    'name'                  => _x( 'slider', 'Post Type General Name', 'raven' ),
    'singular_name'         => _x( 'slider', 'Post Type Singular Name', 'raven' ),
    'menu_name'             => __( 'слайдер', 'raven' ),
    'name_admin_bar'        => __( 'слайдер', 'raven' ),
    'archives'              => __( 'Item Archives', 'raven' ),
    'attributes'            => __( 'Item Attributes', 'raven' ),
    'parent_item_colon'     => __( 'Parent Item:', 'raven' ),
    'all_items'             => __( 'All Items', 'raven' ),
    'add_new_item'          => __( 'Add New Item', 'raven' ),
    'add_new'               => __( 'Add New', 'raven' ),
    'new_item'              => __( 'New Item', 'raven' ),
    'edit_item'             => __( 'Edit Item', 'raven' ),
    'update_item'           => __( 'Update Item', 'raven' ),
    'view_item'             => __( 'View Item', 'raven' ),
    'view_items'            => __( 'View Items', 'raven' ),
    'search_items'          => __( 'Search Item', 'raven' ),
    'not_found'             => __( 'Not found', 'raven' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'raven' ),
    'featured_image'        => __( 'Featured Image', 'raven' ),
    'set_featured_image'    => __( 'Set featured image', 'raven' ),
    'remove_featured_image' => __( 'Remove featured image', 'raven' ),
    'use_featured_image'    => __( 'Use as featured image', 'raven' ),
    'insert_into_item'      => __( 'Insert into item', 'raven' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'raven' ),
    'items_list'            => __( 'Items list', 'raven' ),
    'items_list_navigation' => __( 'Items list navigation', 'raven' ),
    'filter_items_list'     => __( 'Filter items list', 'raven' ),
  );
  $args = array(
    'label'                 => __( 'слайдер', 'raven' ),
    'description'           => __( 'слайдер', 'raven' ),
    'labels'                => $labels,
    'supports'              => array(  'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),//add all s
    'taxonomies' => array('category', 'slider', 'post_tag'),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'slider',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
);

	register_post_type( 'slider', $args );

}
add_action( 'init', 'custom_slide', 1 );



//unregister_post_type('slide');

function custom_gallery() {
  $labels = array(
    'name'                  => _x( 'gallery', 'Post Type General Name', 'raven' ),
    'singular_name'         => _x( 'gallery', 'Post Type Singular Name', 'raven' ),
    'menu_name'             => __( 'Галлерея', 'raven' ),
    'name_admin_bar'        => __( 'Галлерея', 'raven' ),
    'archives'              => __( 'Item Archives', 'raven' ),
    'attributes'            => __( 'Item Attributes', 'raven' ),
    'parent_item_colon'     => __( 'Parent Item:', 'raven' ),
    'all_items'             => __( 'All Items', 'raven' ),
    'add_new_item'          => __( 'Add New Item', 'raven' ),
    'add_new'               => __( 'Add New', 'raven' ),
    'new_item'              => __( 'New Item', 'raven' ),
    'edit_item'             => __( 'Edit Item', 'raven' ),
    'update_item'           => __( 'Update Item', 'raven' ),
    'view_item'             => __( 'View Item', 'raven' ),
    'view_items'            => __( 'View Items', 'raven' ),
    'search_items'          => __( 'Search Item', 'raven' ),
    'not_found'             => __( 'Not found', 'raven' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'raven' ),
    'featured_image'        => __( 'Featured Image', 'raven' ),
    'set_featured_image'    => __( 'Set featured image', 'raven' ),
    'remove_featured_image' => __( 'Remove featured image', 'raven' ),
    'use_featured_image'    => __( 'Use as featured image', 'raven' ),
    'insert_into_item'      => __( 'Insert into item', 'raven' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'raven' ),
    'items_list'            => __( 'Items list', 'raven' ),
    'items_list_navigation' => __( 'Items list navigation', 'raven' ),
    'filter_items_list'     => __( 'Filter items list', 'raven' ),
  );
  $args = array(
    'label'                 => __( 'Галлерея', 'raven' ),
    'description'           => __( 'Галлерея', 'raven' ),
    'labels'                => $labels,
    'supports'              => array(  'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),//add all s
  'taxonomies' => array('category', 'gallery', 'post_tag'),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
    'rest_base'             => 'gallery',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
);

	register_post_type( 'gallery', $args );

}
add_action( 'init', 'custom_gallery', 4 );

add_action('init', 'demo_add_default_boxes');

function demo_add_default_boxes() {
    register_taxonomy_for_object_type('category', 'gallery');
    register_taxonomy_for_object_type('gallery', 'gallery');
}

/**
* Add REST API support to an already registered taxonomy.
*/
add_action( 'init', 'my_custom_taxonomy_rest_support', 25 );
function my_custom_taxonomy_rest_support() {
  global $wp_taxonomies;

  //be sure to set this to the name of your taxonomy!
  $taxonomy_name = 'trip';

  if ( isset( $wp_taxonomies[ $taxonomy_name ] ) ) {
    $wp_taxonomies[ $taxonomy_name ]->show_in_rest = true;
    $wp_taxonomies[ $taxonomy_name ]->rest_base = $taxonomy_name;
    $wp_taxonomies[ $taxonomy_name ]->rest_controller_class = 'WP_REST_Terms_Controller';
  }


}


//menu
require_once get_template_directory() . '/menu.php';

register_nav_menus( array(
	'main' => __( 'main', 'raven' ),
) );


function raven_sidebars(){
if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'social',
       'id'            => 'social',
    'before_widget' => '<div class = "header__social__contacts">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}
if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'banner',
       'id'            => 'banner',
    'before_widget' => '<div class="sidebar-main__banner">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}

if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'footer_column_1',
       'id'            => 'footer_column_1',
    'before_widget' => '<div class = "footer_column_1">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}

if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'footer_column_2',
       'id'            => 'footer_column_2',
    'before_widget' => '<div class = "footer_column_2">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}

if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'footer_column_3',
    'id'            => 'footer_column_3',
    'before_widget' => '<div class = "footer_column_3">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}

if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'footer_column_4',
       'id'            => 'footer_column_4',
    'before_widget' => '<div class = "footer_column_4">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}



if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'name' => 'copyright',
       'id'            => 'copyright',
    'before_widget' => '<div class = "copyright">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);}
}
add_action('after_setup_theme','raven_sidebars');




add_action('wp_ajax_formtrip', 'formtrip');
add_action('wp_ajax_nopriv_formtrip', 'fromtrip');

function fromtrip(){
$trip = $_POST['trip'];
$email = $_POST['name'];
$name = $_POST['email'];
$phone = $_POST['phone'];
//sneding sms api

echo $trip;
echo $email;
echo $name;



$msg = $email . '- электронная почта' . $name . '- от кого' . $trip . ' телефон:' . $phone . 'Спасибо';  // Message






   $to = "admin@whiteraven.org.ua";
   $subject = "Письмо с сайта whiteraven";
   $message = $msg;
   $from = "admin@whiteraven.org.ua";
   $headers = "From:" . $from;
   wp_mail($to, $subject, $message, $headers);
   $output="Mail Sent.";
   echo $output;
wp_die();
}

//filter trips by date
add_action('wp_ajax_trip_date', 'trip_date');
add_action('wp_ajax_nopriv_trip_date', 'trip_date');
  function trip_date(){
    $category = get_terms('category');//custom category name
     $posttags = get_terms('post_tag');//custom tag name
       ?>
       <div class="gallery__filter">
       <form class="gallery__filter-form" >
                 <button name="category" value="без-рубрики" class="trip__filter-list">Все</button>
     <select class="trip__filter-list" id="date">
     <?php
     foreach ($posttags as $post_tag) {
     echo '<option type="button" value="'.$post_tag->name.'" class="trip__filter-button" name="post_tag">'.$post_tag->name.'</option>';
     }
     ?>
     <option disabled selected>Дата</option></select>
    <select id="category" class="trip__filter-list">
       <?php
       foreach ($category as $catVal) {
       echo '<option type="button" value="'.$catVal->name.'" class="trip__filter-button" name="category">'.$catVal->name.'</option>';
       }?>
       <option class="trip__filter-button" disabled selected>Местность</option>
   </select>
       </div>

       <?php

     wp_reset_postdata();
         $query = new WP_Query(array(
           'posts_per_page'=>5,
           'post_type'=>'trip',
           'tag'=>$_POST['post_tag'],
           'orderby'=>'random'));

     if ($query->have_posts()){
       while($query->have_posts()){
         $query->the_post();


//custom category name

ob_start();


    ?>
          <section class="grid-responsive__row article__trip" id="post-<?php the_ID(); ?>">
          <div class="grid-responsive__column__col-7  article__photo"><?php the_post_thumbnail(); ?></div>
          <div class="grid-responsive__column__col-6 article__trip">
          <article class="article">
          <h6 class="article__title">
          <span class="article__title article__title-meta"><?php the_title(); ?></span> <br><date class="article__date"><?php the_field('date'); ?></date>
          </h6>
          <p class="article_text">
          <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Читать далее</a>
          </p>
          <a href="<?php the_permalink(); ?>" class="article__button button__square-more">Подробнее</a>
          </div>
          </article>
          </section>
          <?php
        }
      }
      wp_reset_postdata();
echo ob_get_clean();


wp_die();
}

//filter the posts by categoryname//
add_action('wp_ajax_trip_name', 'trip_name');
add_action('wp_ajax_nopriv_trip_name', 'trip_name');
  function trip_name(){
    $category = get_terms('category');//custom category name
     $posttags = get_terms('post_tag');//custom tag name
       ?>
       <div class="gallery__filter">
       <form class="gallery__filter-form" >
                 <button name="category" value="без-рубрики" class="trip__filter-list">Все</button>
     <select class="trip__filter-list" id="category">
     <?php
     foreach ($posttags as $post_tag) {
     echo '<option type="button" value="'.$post_tag->name.'" class="trip__filter-button" name="post_tag">'.$post_tag->name.'</option>';
     }
     ?>
     <option disabled selected>Дата</option></select>
    <select id="category" class="trip__filter-list">
       <?php
       foreach ($category as $catVal) {
       echo '<option type="button" value="'.$catVal->name.'" class="trip__filter-button" name="category">'.$catVal->name.'</option>';
       }?>
       <option class="trip__filter-button" disabled selected>Местность</option>
   </select>
       </div>

       <?php

     wp_reset_postdata();
         $query = new WP_Query(array(
           'posts_per_page'=>5,
           'post_type'=>'trip',
           'category_name'=>$_POST['category_name'],
           'orderby'=>'random'));

     if ($query->have_posts()){
       while($query->have_posts()){
         $query->the_post();


//custom category name

ob_start();


    ?>
          <section class="grid-responsive__row article__trip" id="post-<?php the_ID(); ?>">
          <div class="grid-responsive__column__col-7  article__photo"><?php the_post_thumbnail(); ?></div>
          <div class="grid-responsive__column__col-6 article__trip">
          <article class="article">
          <h6 class="article__title">
          <span class="article__title article__title-meta"><?php the_title(); ?></span> <br><date class="article__date"><?php the_field('date'); ?></date>
          </h6>
          <p class="article_text">
          <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Читать далее</a>
          </p>
          <a href="<?php the_permalink(); ?>" class="article__button button__square-more">Подробнее</a>
          </div>
          </article>
          </section>
          <?php
        }
      }
      wp_reset_postdata();
echo ob_get_clean();


wp_die();
}

/*fiiltering gallery by date ajax*/
add_action('wp_ajax_gallery_date', 'gallery_date');
add_action('wp_ajax_nopriv_gallery_date', 'gallery_date');
function gallery_date(){
$category = get_terms('category');//custom category name
$posttags = get_terms('post_tag');//custom tag name
?>
<div class="gallery__filter">
<form class="gallery__filter-form">
<button name="category" value="Без-рубрики" class="gallery__filter-list">Все</button>
<select class="gallery__filter-list" id="date">
<?php
foreach ($posttags as $post_tag) {
echo '<option type="button" value="'.$post_tag->name.'" class="gallery__filter-button" name="category">'.$post_tag->name.'</option>';
}
?>
<option disabled selected>Дата</option></select>


 <select id="category"  class="gallery__filter-list">
    <?php

    foreach ($category as $catVal) {
    echo '<option type="button" value="'.$catVal->name.'" class="gallery__filter-button" name="category">'.$catVal->name.'</option>';
    }?>
    <option class="gallery__filter-button" disabled selected>Местность</option>
</select>
    </div>
    </div>
    <?php

wp_reset_postdata();
//custom category name


  $query = new WP_Query(array(
    'posts_per_page'=>5,
    'post_type'=>'gallery',
    'orderby'=>'random',
    'tag'=>$_POST['gallery_date'],
    'order'=>'ASC'));


if ($query->have_posts()){
while($query->have_posts()){
$query->the_post();
ob_start();



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

echo ob_get_clean();
wp_die();
}
/*fiiltering gallery by name ajax*/
add_action('wp_ajax_gallery_name', 'gallery_name');
add_action('wp_ajax_nopriv_gallery_name', 'gallery_name');
function gallery_name(){
$category = get_terms('category');//custom category name
$posttags = get_terms('post_tag');//custom tag name
?>
<div class="gallery__filter">
<form class="gallery__filter-form">
<button name="category" value="Без-рубрики" class="gallery__filter-list">Все</button>
<select class="gallery__filter-list" id="date">
<?php
foreach ($posttags as $post_tag) {
echo '<option type="button" value="'.$post_tag->name.'" class="gallery__filter-button" name="category">'.$post_tag->name.'</option>';
}
?>
<option disabled selected>Дата</option></select>


 <select id="category"  class="gallery__filter-list">
    <?php



    foreach ($category as $catVal) {
    echo '<option type="button" value="'.$catVal->name.'" class="gallery__filter-button" name="category">'.$catVal->name.'</option>';
    }?>
    <option class="gallery__filter-button" disabled selected>Местность</option>
</select>
    </div>
    </div>
    <?php


//custom category name
if (isset($_POST['gallery_name'])){

  $query = new WP_Query(array(
    'posts_per_page'=>5,
    'post_type'=>'gallery',
    'orderby'=>'random',
    'category_name'=>$_POST['gallery_name'],
    'order'=>'ASC'));
}

if ($query->have_posts()){
while($query->have_posts()){
$query->the_post();
ob_start();

//if is set one of the categoru filter values the launch diferent wp_Query assignment!!!!!!

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
wp_reset_postdata();
echo ob_get_clean();
wp_die();
}
