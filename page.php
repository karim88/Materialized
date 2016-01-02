<?php get_header();

  if(have_posts()){
    while (have_posts()) : the_post();?>

      <div class="article">
        <h3><?php the_title(); ?></h3>
        <div class="the_content">
        <p>
          <?php the_content(); ?>
        </p>

        <hr>
        <p>
          <?php _e('Share this: ', 'kmaterialized'); ?><br>
          <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share this!">
            <img class="social-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/social/google-plus.png" alt="Plus this!" width="32" height="32" />
          </a>
          <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">
            <img class="social-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/social/facebook.png" alt="Share this!" width="32" height="32" />
          </a>
          <a target="_blank" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!">
            <img class="social-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/social/twitter.png" alt="Tweet this!" width="32" height="32" />
          </a>
        </p>
        </div>
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
      <?php echo __("OOPS Page not found!", "kmaterialized"); ?>
    </div>
  <?php }


get_footer(); ?>
