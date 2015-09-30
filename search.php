<?php get_header();


  if(have_posts()){
  ?>
  <h3><span class="white-text blue slug"><?php _e('Search result for: ', 'materialized'); the_search_query(); ?></span></h3>
    <div class="row">
    <?php
    while (have_posts()) : the_post();
      get_template_part('content', get_post_format());
    endwhile;?>
  </div>
<?php
  }
  else{
     _e("Content not found!", 'matarialized');
  }

get_footer(); ?>
