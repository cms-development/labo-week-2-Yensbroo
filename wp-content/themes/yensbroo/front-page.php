<?php get_header(); ?>
<div class="container">
  <h1>Recent posts</h1>
  <?php $posts = wp_get_recent_posts(array('numberposts' => 2)) ?>
  <?php foreach($posts as $post): ?>
  <div class="row">
    <div class="card mb-4 col-lg-7">
      <div class="card-header">
        <?= $post['post_title'] ?>
      </div>
      <div class="card-body">
        <p>
          <?= $post['post_content'] ?>
        </p>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <?php endforeach; ?>
  <h1>Fun to know</h1>
  <?php $customquery = new WP_Query(array('category_name' => 'weetjes', 'posts_per_page' => 2)); ?>
  <?php if ($customquery->have_posts()) : while($customquery->have_posts()) : $customquery->the_post() ?>
  <div class="card mb-4 col-lg-7">
    <div class="card-header">
      <?php the_title() ?>
    </div>
    <div class="card-body">
      <p>
        <?php the_content() ?>
      </p>
    </div>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
  <?php endif ?>
</div>
<?php get_footer(); ?>