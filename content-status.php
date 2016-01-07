<div class="col m6 s12 grid-item">
  <div class="card-panel teal darken-1 waves-effect waves-block">
    <span class="info">
    <?php $dir = (!is_rtl())? 'right' : 'left'; ?>
    <i class="material-icons tiny">edit</i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized-wp'); the_time('G:i'); ?>
    </span><a class="white-text <?php echo $dir ?>" href="<?php echo get_comment_link() ?>"><i class="material-icons">comment</i>
      <?php echo get_comments_number();?></a>
    <a href="<?php the_permalink(); ?>">
    <div class="white-text row status">
      <div class="col m3 s3">
        <?php
          echo get_avatar(get_the_author_meta( 'ID' ), 64, $default, get_the_author . ' avatar', array('class' => 'status-img'));
        ?>
      </div>
      <div class="col s8 m8">
        <?php
          the_excerpt();
        ?>
      </div>
    </div>
    </a>
  </div>
</div>
