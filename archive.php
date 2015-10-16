<?php get_header(); ?>
  <div class="col m9 s12">
  <?php if(have_posts()){
    ?>

    <h3><span class="white-text blue slug"><?php
    if(is_category()){
      single_cat_title();
    }
    elseif(is_tag()){
      single_tag_title();
    }
    elseif (is_author()) {
      the_post();
      printf(__('Archive: %s', 'materialized'), get_the_author());
      rewind_posts();
    }
    elseif (is_day()) {
      printf(__('Daily Archives: %s', 'materialized'), get_the_date());
    }
    elseif (is_month()) {
      printf(__('Monthly Archives: %s', 'materialized'), get_the_date('F Y'));
    }
    elseif (is_year()) {
      printf(__('Yearly Archives: %s', 'materialized'), get_the_date('Y'));
    }
    else {
      # code...
    }
     ?></span></h3>
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
    ?>
    <div class="card-panel not-found">

    <?php
       _e("Content not found!", 'matarialized');
  } ?>
    </div>
  </div>
  <div class="col m3 s12 widgets">

    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
  <div class="col m12 s12">
    <?php the_posts_pagination([
      'screen_reader_text' => ' ',
      ]); ?>
  </div>
<?php get_footer(); ?>
