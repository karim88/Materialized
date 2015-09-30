<div class="col m5 s12 grid-item">
  <div class="card-panel teal waves-effect waves-block">
    <span class="info">
    <i class="material-icons tiny">add</i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?>
    </span>
    <a href="<?php the_permalink(); ?>">
    <span class="white-text">
      <?php the_excerpt(); ?>
    </span>
    </a>
  </div>
</div>
