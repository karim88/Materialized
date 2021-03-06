<div class="col m6 s12 grid-item">
  <div class="card-panel teal waves-effect waves-block">
    <span class="info">
    <?php $dir = (!is_rtl())? 'right' : 'left'; ?>
    <i class="material-icons tiny">add</i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized-wp'); the_time('G:i'); ?>
    </span><a class="white-text <?php echo $dir ?>" href="<?php echo get_comment_link() ?>"><i class="material-icons">comment</i>
      <?php echo get_comments_number();?></a>
    <a href="<?php the_permalink(); ?>">
    <span class="white-text">
      <?php the_excerpt(); ?>
    </span>
    </a>
  </div>
</div>
