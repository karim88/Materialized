<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>

      <div class="article">
        <h3><?php the_title(); ?></h3>

        <p>
          <?php the_content(); ?>
        </p>
      </div>
    <?php endwhile;
  }
  else{
    echo __("Page not found!", "materialized");
  }


get_footer(); ?>
