<?php get_header(); ?>
  <div class="col m9 s12">
    <?php
    if(have_posts()){
      while (have_posts()) : the_post();?>
      <div class="center nav-posts">
          <?php $dir = (is_rtl())? 'right' : 'left'; ?>
          <?php $dir1 = (!is_rtl())? 'right' : 'left'; ?>
          <?php previous_post_link('<p class="waves-effect '.$dir.'">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
          <?php next_post_link( '<p class="waves-effect '.$dir1.'">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
      </div>
      <br>
        <div class="article">
          <?php the_post_thumbnail('banner-thumbnails') ?>
          <div class="post-content">
            <h3><?php the_title(); ?></h3>
              <div class="chip">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php
                  echo get_avatar(get_the_author_meta( 'ID' ), 24, $default, get_the_author . ' avatar', array('class' => 'avatar'));
                  echo get_the_author( );
                ?>
              </a>
              </div>
              <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?> | <?php _e("Posted in", 'materialized') ?>:
              <?php
                $categories = get_the_category();
                $separate = ', ';
                $result = '';

                if($categories){
                  foreach ($categories as $category) {
                    $result .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>' . $separate;
                  }
                  echo trim($result, $separate);
                }
              ?>
            <div class="the_content">
              <p class="">
                <?php
                    the_content();
                ?>

                <hr>
                <p>
                  <?php
                  if(has_tag()){
                    _e('Tagged with: ', 'materialized');
                    the_tags('<div class="chip waves-effect">', '</div><div class="chip waves-effect">', "</div>");
                  }
                  ?>
                </p>
                <!-- Scial Media -->
                <p>
                  <?php _e('Share this: ', 'materialized'); ?><br>
                  <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share this!">
                    <img class="social-icon" src="<?php becho esc_url( get_template_directory_uri() ); ?>/img/social/google-plus.png" alt="Plus this!" width="32" height="32" />
                  </a>
                  <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">
                    <img class="social-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/social/facebook.png" alt="Share this!" width="32" height="32" />
                  </a>
                  <a target="_blank" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!">
                    <img class="social-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/social/twitter.png" alt="Tweet this!" width="32" height="32" />
                  </a>
                </p>
              </p>
            </div>
          </div>

        </div>
        <div class="comments1">
          <?php
          if ( comments_open() || get_comments_number() ) :
    				comments_template();
          endif;
          ?>
        </div>

        <div class="center nav-posts">
            <?php previous_post_link('<p class="waves-effect '.$dir.'">%link</p>', __( 'Previous: ', 'materialized' ) . '%title', TRUE); ?>
            <?php next_post_link( '<p class="waves-effect '.$dir1.'">%link</p>', __( 'Next: ', 'materialized' ) . '%title', TRUE ); ?>
        </div>

        <?php endwhile;
    }
    else{?>
      <div class="container">
      <?php echo __("Post not found!", "materialized"); ?>
      </div>
    <?php } ?>
  </div>
  <div class="col m3 s12 widgets">

    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
<?php get_footer(); ?>
