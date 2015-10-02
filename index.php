<?php get_header(); ?>
  <div class="col m9 s12">
    <?php
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
    ?>
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
