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
                  echo get_avatar(get_the_author_meta( 'ID' ), 24, $default, get_the_author . ' avatar', ['class' => 'avatar']);
                  echo get_the_author( );
                ?>
              </a>
              </div>
              <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?> | <?php _e("Posted in", materialized) ?>:
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
