<div class="col m6 s12 grid-item">
  <div class="card-panel light-blue darken-4 waves-effect waves-block">
    <div class="card-content">
    <h4 class="white-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <span class="info">
    <i class="material-icons tiny">music_note</i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    @ <?php the_time('j F, Y'); _e(' at ', 'materialized'); the_time('G:i'); ?>
    </span>
    <span class="white-text audio-post">
      <?php the_content(); ?>
    </span>
    </div>
    <div class="card-action">
      <?php $dir = (!is_rtl())? 'right' : 'left'; ?>
       <a class="white-text read-more waves-effect waves-light light-blue darken-4 btn-flat" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'materialized' ); ?></a><a class="white-text <?php echo $dir ?>" href="<?php echo get_comment_link() ?>"><i class="material-icons">comment</i>
         <?php echo get_comments_number();?></a>
    </div>
  </div>
</div>
