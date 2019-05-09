<?php $root = get_template_directory_uri(); ?>

<div class="social-share">
  <div class="social-share__el">
    <span id="share-on">Share: </span>
  </div>
  <div class="social-share__el">
    <ul>
      <li><a class="btn-social" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">
        <?php get_template_part('dist/assets/svgs/facebook'); ?>
      </a></li>
      <li><a class="btn-social" href="http://twitter.com/share?url=<?php the_permalink() ;?>">
        <?php get_template_part('dist/assets/svgs/twitter'); ?>
      </a></li>
      <li><a class="btn-social" href="mailto:?subject=Check This Out&amp;body=<?php the_permalink();?>">
        <?php get_template_part('dist/assets/svgs/mail'); ?>
      </a></li>
    </ul>
  </div>
</div>