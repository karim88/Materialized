<?php get_header();

  if(have_posts()){
  ?>
    <div class="row grid">
    <?php
    while (have_posts()) : the_post();
      get_template_part('content', get_post_format());
    endwhile;
    ?>
  </div>
<?php
  }
  else{
     _e("Content not found!", 'matarialized');
  }
  wp_link_pages();
get_footer(); ?>
