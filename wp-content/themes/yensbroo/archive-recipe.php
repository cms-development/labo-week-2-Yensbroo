

<?php get_header(); ?>

<div class="container">
  <div class="row">
  <?php do_action('show_beautiful_filters'); ?>
</div>
  <div class="row">
    <?php 
    $args = array(
      'post_type'=> 'recipe'
    );
    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
    <div class="mb-4 p-3 col-md-4">
      <div class="recipe_card">
      <?php 
        $image = get_field('image');
        if( !empty($image) ): ?>
	      <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <div class="card-body">
          <a class="card-text" href="<?php echo get_permalink($post->ID, false); ?>">
            <?php the_title(); ?>
          </a>
          <p class="difficulty"><?php
            $terms = get_the_terms( $post->ID , 'difficulty' );
            foreach ( $terms as $term ) {
            echo $term->name;
            }
          ?></p>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</div>