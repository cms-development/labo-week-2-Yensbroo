<?php

function yensbroo_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js', array('jquery'));
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'yensbroo_enqueue_scripts' );

function yensbroo_widgets_init() {
  register_sidebar( array(
    'name' => __('Primary Sidebar', 'yensbroo'),
    'id' => 'sidebar_primary',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 1', 'yensbroo'),
    'id' => 'footer-sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 2', 'yensbroo'),
    'id' => 'footer-sidebar-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 3', 'yensbroo'),
    'id' => 'footer-sidebar-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action( 'widgets_init', 'yensbroo_widgets_init');

add_action('after_setup_theme', 'yensbroo_setup');
  if(! function_exists('yensbroo_setup') ):
    function yensbroo_setup() {
      register_nav_menu('Primary', __( 'Primary navigation', 'yensbroo'));
    } endif;

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function yensbroo_register_events() {
  $labels = array(
    /* __ is om het meertalig te maken*/
    'name' => __('Events', 'yensbroo'),
    'singular_name' => __('Event', 'yensbroo'),
    'add_new' => __('Add New Event', 'yensbroo'),
    'all_items' => __('All Events', 'yensbroo'),
    'add_new_item' => __('Add New Event', 'yensbroo'),
    'edit_item' => __('Edit Event', 'yensbroo'),
    'new_item' => __('New Event', 'yensbroo'),
    'view_item' => __('View Event', 'yensbroo'),
    'search_item' => __('Search Event', 'yensbroo'),
    'not_found' => __('Event not found', 'yensbroo'),
    'not_found_in_trash' => __('Event not found in the trash', 'yensbroo'),
    'parent_item_colon' => __('Parent Event', 'yensbroo'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'evenementen'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ),
    'taxonomies' => array(
      'post_tag'
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  register_post_type('event', $args);
}

add_action('init', 'yensbroo_register_events');

function yensbroo_register_articles() {
  $labels = array(
    /* __ is om het meertalig te maken*/
    'name' => __('Articles', 'yensbroo'),
    'singular_name' => __('Article', 'yensbroo'),
    'add_new' => __('Add New Article', 'yensbroo'),
    'all_items' => __('All Articles', 'yensbroo'),
    'add_new_item' => __('Add New Article', 'yensbroo'),
    'edit_item' => __('Edit Article', 'yensbroo'),
    'new_item' => __('New Article', 'yensbroo'),
    'view_item' => __('View Article', 'yensbroo'),
    'search_item' => __('Search Article', 'yensbroo'),
    'not_found' => __('Article not found', 'yensbroo'),
    'not_found_in_trash' => __('Article not found in the trash', 'yensbroo'),
    'parent_item_colon' => __('Parent Article', 'yensbroo'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'artikels'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
    ),
    'taxonomies' => array(
      'post_tag'
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  register_post_type('articles', $args);
}


add_action('init', 'yensbroo_register_articles');

function yensbroo_register_recipes() {
  $labels = array(
    /* __ is om het meertalig te maken*/
    'name' => __('Recipes', 'yensbroo'),
    'singular_name' => __('Recipe', 'yensbroo'),
    'add_new' => __('Add New Recipe', 'yensbroo'),
    'all_items' => __('All Recipes', 'yensbroo'),
    'add_new_item' => __('Add New Recipe', 'yensbroo'),
    'edit_item' => __('Edit Recipe', 'yensbroo'),
    'new_item' => __('New Recipe', 'yensbroo'),
    'view_item' => __('View Recipe', 'yensbroo'),
    'search_item' => __('Search Recipe', 'yensbroo'),
    'not_found' => __('Recipe not found', 'yensbroo'),
    'not_found_in_trash' => __('Recipe not found in the trash', 'yensbroo'),
    'parent_item_colon' => __('Parent Recipe', 'yensbroo'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'recepten'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
    ),
    'taxonomies' => array(
      'category',
    ),
    'menu_position' => 5,
    'exclude_from_search' => false,
    'register_meta_box_cb' => 'add_recipe_metaboxes'
  );

  register_post_type('recipe', $args);
}


add_action('init', 'yensbroo_register_recipes');

function alergenen_init() {
  register_taxonomy(
    'alergenen',
    'recipe',
    array(
      'label' => __('Alergenen'),
      'hierarchical' => true
    )
    );
}

add_action('init', 'alergenen_init');

function difficulty_init() {
  register_taxonomy(
    'difficulty',
    'recipe',
    array(
      'label' => __('Difficulty'),
      'hierarchical' => true
    )
    );
}

add_action('init', 'difficulty_init');

function province_init() {
  register_taxonomy(
    'Provincie',
    'event',
    array(
      'label' => __('Provincie'),
    )
    );
}

add_action('init', 'province_init');

function setting_init() {
  register_taxonomy(
    'Setting',
    'event',
    array(
      'label' => __('Setting'),
      'hierarchical' => true
    )
    );
}

add_action('init', 'setting_init');

function add_recipe_metaboxes()  {
  add_meta_box(
    'recipe_subtitle',
    'Subtitle',
    'recipe_subtitle_box',
    'recipe',
    'normal',
    'default'
  );

  add_meta_box(
    'recipe_ingredients',
    'Ingrediënten',
    'recipe_ingredients_box',
    'recipe',
    'normal',
    'default'
  );
}

add_action('add_meta_boxes', 'add_recipe_metaboxes');

function recipe_subtitle_box($post) {

  wp_nonce_field( basename( __FILE__), 'recipe_fields');

  $subtitle = get_post_meta( $post->ID, '_recipe_subtitle', true);

  echo '<label for="recipe_subtitle">' . __('Subtitle', 'yensbroo') . '</label>';
  echo '<input type="text" name="recipe_subtitle" value="' . $subtitle . '" class="widefat">';
}

function recipe_ingredients_box($post) {
  wp_nonce_field(plugin_basename(__FILE__), 'recipe_fields');

  $field_value = get_post_meta( $post->ID, '_recipe_ingredients', false);
  echo '<label for="recipe_ingredients">' . __('Ingredients', 'yensbroo') . '</label>';
  
  if(empty($field_value)) $field_value = array('');
  
  wp_editor($field_value[0], '_recipe_ingredients');
}



function recipe_save_postdata( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    die('1');
      return;
  }

  if ( ( isset ( $_POST['recipe_fields'] ) ) && ( ! wp_verify_nonce( $_POST['recipe_fields'], plugin_basename( __FILE__ ) ) ) ){
    die('2');    
    return;
  }

  if ( ! current_user_can( 'edit_post', $post_id ) ) {
    die('3');
    return;
  }    


  if( ! isset( $_POST['recipe_subtitle'])) {return; }
  if( ! isset( $_POST['_recipe_ingredients'])) {return; }
  

  $subtitle = sanitize_text_field($_POST['recipe_subtitle']);
  $ingredients = wp_kses_post($_POST['_recipe_ingredients']);

  // var_dump($subtitle); die();


  update_post_meta($post_id, '_recipe_ingredients', $ingredients);
  update_post_meta($post_id, '_recipe_subtitle', $subtitle);

}
add_action( 'save_post', 'recipe_save_postdata' );