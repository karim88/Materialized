<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>
    <div class="center nav-posts">
        <?php $dir = (is_rtl())? 'right' : 'left'; ?>
        <?php $dir1 = (!is_rtl())? 'right' : 'left'; ?>
        <?php previous_post_link('<p class="waves-effect '.$dir.'">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
        <?php next_post_link( '<p class="waves-effect '.$dir1.'">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
    </div>
      <div class="article">
        <p class="center"><?php the_post_thumbnail('banner-thumbnails') ?></p>
        <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>

          <div class="chip">
            <?php
              echo get_avatar(get_the_author_meta( 'ID' ), 24, $default, get_the_author . ' avatar', ['class' => 'avatar']);
              echo get_the_author( );
            ?>
          </div>

        <p>
          <?php
              the_content();
          ?>
        </p>
      </div>
      <div class="center nav-posts">
          <?php previous_post_link('<p class="waves-effect '.$dir.'">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
          <?php next_post_link( '<p class="waves-effect '.$dir1.'">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
      </div>

      <?php endwhile;
  }
  else{
    echo __("Post not found!", "materialized");
  }


get_footer(); ?>
