<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $half = ($wp_query->current_post % 3 != 0); ?>

  <article <?php if (!$half) { echo "full-width"; } ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ($half) { ?> 
      <div class="pcc"> 
    <?php } ?>

      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        </a>
      <?php endif; ?>

      <span class="date">
        <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
          <?php the_date(); ?><!-- <?php the_time(); ?> -->
        </time>
      </span>

      <?php include 'post-sharing.php'; ?>

      <h2 class="post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>

      <?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
      <div class="entry-content digest">
        <?php the_content('Keep Reading'); ?>
      </div>

    <?php if ($half) { ?> 
      </div><!-- pcc -->
      <a class="more-link" href="<?php the_permalink(); ?>">Keep Reading</a>
    <?php  }  ?>

  </article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
