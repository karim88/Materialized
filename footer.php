</div> <!-- end of main row -->
  <footer class="hide-on-small-only page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12 widgets">
          <?php dynamic_sidebar('sidebar-2'); ?>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
    <?php bloginfo('copyright'); ?> &copy; <?php echo date('Y'); ?>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>
