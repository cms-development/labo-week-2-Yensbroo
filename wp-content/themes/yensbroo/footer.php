<?php wp_footer(); ?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <?php if(is_active_sidebar('footer-sidebar-1')) {
          dynamic_sidebar('footer-sidebar-1');
        } ?>
      </div>
      <div class="col-lg-3">
        <?php if(is_active_sidebar('footer-sidebar-2')) {
          dynamic_sidebar('footer-sidebar-2');
        } ?>
      </div>
      <div class="col-lg-3">
        <?php if(is_active_sidebar('footer-sidebar-3')) {
          dynamic_sidebar('footer-sidebar-3');
        } ?>
      </div>
    </div>
  </div>
</footer>
</body>

</html>