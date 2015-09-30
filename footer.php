
  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
