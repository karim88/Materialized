<div class="col m6 s12 grid-item">
  <div class="card-panel blue darken-1 waves-effect waves-block">
    <span class="info">
    <?php $dir = (!is_rtl())? 'right' : 'left'; ?>
    <i class="material-icons tiny">link</i> <a class="white-text" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized-wp'); the_time('G:i'); ?>
    </span><a class="white-text <?php echo $dir ?>" href="<?php echo get_comment_link() ?>"><i class="material-icons">comment</i>
      <?php echo get_comments_number();?></a>

    <p class="white-text">
      <a class="white-text" href="<?php echo get_the_content(); ?>" target="_blank"><img class="site-logo" src="http://www.google.com/s2/favicons?domain=<?php echo get_the_content(); ?>" alt="siteweb favicon" /> <?php the_title(); ?></a>
    </p>
  </div>
</div>
