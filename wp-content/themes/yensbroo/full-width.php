<!-- header -->
<?php get_header(); ?>

<div class="section">
  <div class="container">
    <div class="row">
      <!-- als er posts zijn, loop door de posts, en geef de huidige post -->
      <?php if(have_posts()) : while(have_posts()) : the_post() ?>
      <div class="col-lg-8">
          <p><?php the_content() ?></p>
      </div>
      <!-- loop sluiten -->
      <?php endwhile; ?>

      <?php else : ?>
        <p>Geen posts</p>
      <!-- sluit de if-conditional -->
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>