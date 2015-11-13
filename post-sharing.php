<ul class="post-sharing">
  <li>
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
      <i class="icon-fb"></i>
      <span class="count"><?php echo pssc_facebook() ?></span>
    </a>
  </li>
  <li>
    <a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>">
      <i class="icon-twitter"></i>
      <span class="count"><?php echo pssc_twitter() ?></span>
    </a>
  </li>
  <li>
    <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php get_the_excerpt(); ?>">
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
