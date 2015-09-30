<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>
    <div class="center nav-posts">
        <?php previous_post_link('<p class="waves-effect left">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
        <?php next_post_link( '<p class="waves-effect right">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
    </div>
      <div class="article">
        <p class="center"><?php the_post_thumbnail('banner-thumbnails') ?></p>
        <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>

          <div class="chip">
            <img class="avatar" src="images/yuna.jpg" alt="avatar">
            <?php echo get_the_author( ); ?>
          </div>

        <p>
          <?php
              the_content();
          ?>
        </p>
      </div>
      <div class="center nav-posts">
          <?php previous_post_link('<p class="waves-effect left">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
          <?php next_post_link( '<p class="waves-effect right">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
      </div>

      <?php endwhile;
  }
  else{
    echo __("Post not found!", "materialized");
  }


get_footer(); ?>
