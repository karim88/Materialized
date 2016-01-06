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
      ?>
      <div class="card-panel not-found">
      <?php
       _e("Content not found!", 'materialized');
?>
</div>
    <?php
  }
    ?>
  </div>
  <div class="hide-on-small-only col m3 s12 widgets">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
  <div class="col m12 s12">
    <?php the_posts_pagination(array(
      'screen_reader_text' => ' ',
    )); ?>
  </div>

<?php get_footer(); ?>
