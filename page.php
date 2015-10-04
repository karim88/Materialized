<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>

      <div class="article">
        <h3><?php the_title(); ?></h3>

        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="comments1">
        <?php
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>
      </div>

    <?php endwhile;
  }
  else{
    ?>
    <div class="card-panel not-found">
      <?php echo __("OOPS Page not found!", "materialized"); ?>
    </div>
  <?php }


get_footer(); ?>
