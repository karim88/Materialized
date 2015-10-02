<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>

      <div class="">
        <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>

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
