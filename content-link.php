<div class="col m5 s12 grid-item">
  <div class="card-panel yellow waves-effect waves-block">
    <span class="info blue-text">
    <i class="material-icons tiny">link</i> <a class="blue-text" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?>
    </span>

    <p class="white-text">
      <a href="<?php echo get_the_content(); ?>" target="_blank"><img src="http://www.google.com/s2/favicons?domain=<?php echo get_the_content(); ?>" alt="siteweb favicon" /> <?php the_title(); ?></a>
    </p>
  </div>
</div>
