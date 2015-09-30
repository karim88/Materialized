<form class="" id="searchform" action="<?php home_url('/'); ?>" method="get" role="search">
  <div class="rom">
    <div class="col s8 m8">
      <input type="text" name="s" id="s" value="" placeholder="<?php the_search_query(); ?>">
    </div>
    <div class="col s4 m4">
      <input class="btn-large blue-text waves-blue waves-effect grey lighten-5" type="submit" name="searchsubmit" id="searchsubmit" value="<?php _e('Search', 'materialized'); ?>">
    </div>
  </div>

</form>
