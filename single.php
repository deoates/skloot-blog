<?php get_header(); ?>

    <main role="main">
    <!-- section -->
    <section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
          </a>
        <?php endif; ?>
        <!-- /post thumbnail -->

        <!-- post details -->
        <span class="date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?><!-- <?php the_time(); ?> -->
          </time>
        </span>
        <?php include "post-sharing.php"; ?>

        <!-- post title -->
        <h2 class="post-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <!-- /post title -->

        <div class="entry-content">
          <ul class="vertical-social">
            <li>
              <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="100px" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
            </li>
            <li>
              <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="gregskloot" data-related="gregskloot">Tweet</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </li>
            <li>
              <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
              <script type="IN/Share" data-url="<?php the_permalink(); ?>" data-counter="top"></script>
            </li>
            <li>
                <a id="email-share" href="mailto:?subject=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Share by Email">
                <img src="http://blog.netpulse.com/hubfs/blog-src/email-icon.png" width="48" height="auto"></a>
            </li>
          </ul>
          <?php the_content(); // Dynamic Content ?>
        </div>
        
        <!--<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?> -->

        <!--<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>-->

        <br><br>
        <h3 class="orange">Join the discussion</h3>

        <?php comments_template(); ?>

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->
    </main>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
