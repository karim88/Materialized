<div class="col m5 s12 grid-item">
  <div class="card">
    <div class="card-image waves-effect waves-block">
    <a href="<?php the_permalink(); ?>">
      <?php
      if(has_post_thumbnail()){
        the_post_thumbnail('small-thumbnails');
      }
      else{ ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/default-image.png" alt="<?php the_title(); ?>" width="100%" height="100%"/>
      <?php } ?>
      <span class="card-title blue darken-3"> <?php the_title(); ?></span>
    </a>
    </div>
    <div class="card-content">
      <span class="info">
      <i class="material-icons tiny">image</i>
      <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?> | <?php _e('By', 'materialized') ?>: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php _e("Posted in", materialized) ?>: <?php
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
      </span>
      <p>
        <?php the_excerpt(); ?>
      </p>
    </div>
    <div class="card-action blue darken-3">
       <a class="white-text read-more waves-effect blue darken-3 btn-flat" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'materialized' ); ?></a>
    </div>
  </div>
</div>
