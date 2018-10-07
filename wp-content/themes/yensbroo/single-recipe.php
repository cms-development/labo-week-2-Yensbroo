<?php get_header(); ?>

<div class="container  bg_white">
  <div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <div class="col-lg-5">
      <?php 
        $image = get_field('image');
        if( !empty($image) ): ?>
      <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
    <div class="col-lg-5">
      <h2>
        <?php the_title() ?>
      </h2>
      <h5>
        <?php
          $subtitle = get_post_meta($post->ID, '_recipe_subtitle', false);

          foreach($subtitle as $key => $value) {
            echo $value;
          }
        ?>
      </h5>
    </div>
  </div>
  <section class="recipe_content">
    <div class="row">
      <div class="col-lg-3 ingredients">
        <h4>Ingrediënten</h4>
        <?php 
      $ingredients = get_post_meta( $post->ID, '_recipe_ingredients', false );
      foreach ($ingredients as $key => $value ) {
        echo $value;
      } 
    ?>
      </div>
      <div class="col-lg-9 recipe">
        <h4>Recept</h4>
        <?php the_content() ?>
      </div>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  </section>
</div>