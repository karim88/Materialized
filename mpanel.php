<?php
add_action('admin_menu', 'mpanel');

function mpanel($value='')
{
  add_theme_page('SEO', 'SEO', 'activate_plugins', 'slug_panel', 'display_page', '', 89);
}
function display_page($value='')
{
  if(isset($_POST['panel_update'])){
    if(!wp_verify_nonce($_POST['m_noncename'], 'mpanel')){
      die(__('Token not valid!', 'materialized'));
    }
    foreach ($_POST['options'] as $name => $value) {
      if(empty($value)){
        delete_option($name);
      }
      else{
        update_option($name, $value);
      }
    }
    ?>
    <div id="message" class="updated fade">
      <p>
        <?php _e('Options successfully saved!', 'materialized'); ?>
      </p>
    </div>
    <?php
  }
  ?>
  <div class="wrap theme-options-page">
    <div id="icon-options-general" class="icon32"></div>
    <h2>SEO</h2>
    <form class="" action="" method="post">
      <div class="theme-options-group">
        <table class="widefat options-table">
          <thead>
            <tr><th colspan="2">SEO</th></tr>
          </thead>
          <tbody>
            <tr><td>Author</td><td><input type="text" id="author" name="options[author]"  value="<?php echo get_option('author', ''); ?>"></td></tr>
            <tr><td>Copyright</td><td><input type="text" id="copyright" name="options[copyright]"  value="<?php echo get_option('copyright', ''); ?>"></td></tr>
            <tr><td>Keywords</td><td><input type="text" id="keywords" name="options[keywords]" value="<?php echo get_option('keywords', ''); ?>"></td></tr>
            <tr><td>Robots</td><td><input type="text" id="robots" name="options[robots]" placeholder="index, follow"  value="<?php echo get_option('robots', ''); ?>"></td></tr>
          </tbody>
        </table>
      </div>
      <input type="hidden" name="m_noncename" value="<?php echo wp_create_nonce('mpanel'); ?>">
      <p class="submit">
        <input type="submit" class="button-primary autowith" name="panel_update" value="<?php _e('Save', 'materialized') ?>">
      </p>
    </form>
  </div>
  <?php
}
