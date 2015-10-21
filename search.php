<?php get_header();?>
  <div class="col s12 m9">
  <?php
  if(have_posts()){
  ?>
  <h3><span class="white-text blue slug"><?php _e('Search result for: ', 'materialized'); the_search_query(); ?></span></h3>
    <div class="row grid">
    <?php
    while (have_posts()) : the_post();
      get_template_part('content', get_post_format());
    endwhile;?>
  </div>
<?php
  }
  else{
     _e("Content not found!", 'matarialized');
  }?>

  <div class="col m12 s12">
    <?php the_posts_pagination(array(
      'screen_reader_text' => ' ',
      )); ?>
  </div>
  </div>
  <div class="col m3 s12 widgets">

    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
  <div class="col m12 s12">
    <?php the_posts_pagination(array(
      'screen_reader_text' => ' ',
      )); ?>
  </div>
<?php get_footer(); ?>
