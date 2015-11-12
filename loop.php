<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php edit_post_link('Edit this post'); ?>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post details -->
		<span class="date">
			<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
				<?php the_date(); ?><!-- <?php the_time(); ?> -->
			</time>
		</span>
    
    <ul class="post-sharing">
      <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
          <i class="icon-fb"></i>
          <span class="count"><?php echo pssc_facebook() ?></span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/home?status=<?php the_permalink(); ?>">
          <i class="icon-twitter"></i>
          <span class="count"><?php echo pssc_twitter() ?></span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php get_the_excerpt(); ?>">
          <i class="icon-linkedin"></i>
          <span class="count"><?php echo pssc_linkedin() ?></span>
        </a>
      </li>
      <li>
        <a href="mailto:?&subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>">
          <i class="icon-email"></i>
        </a>
      </li>
    </ul>

		<!-- post title -->
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!--<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>-->

		<?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
    <div class="entry-content digest">
      <?php the_content('Keep Reading'); ?>
    </div>
    

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
