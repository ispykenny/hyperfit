<?php $root = get_template_directory_uri(); ?>
<?php get_header(); 

$newCatArr = [];
?>

<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="hdr-content__el">
        <div class="hero-anime">  
          <?php
            $cat = get_the_category($post->ID);
            $stringy = sizeof($cat) > 1 ? ", " : " ";
            foreach($cat as $theCat) {
            $newCatArr[] = $theCat->name;
           } ?>
          <h4><span>Category:</span> <span id="category-name"><?php echo implode($stringy,$newCatArr); ?></span></h4>
        </div>
        <div class="hero-anime">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime"><p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p></div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php the_field('featured_image', $featureMain->ID) ;?> "></div>
  <div class="stripe"></div>
</header>


<section class="shimmy-top">
  <div class="inner">
    <article>
      <?php the_content(); ?>
    </article>

    <div class="social-share">
      <div class="social-share__el">
        <span id="share-on">Share: </span>
      </div>
      <div class="social-share__el">
        <ul>
          <li><a href="">
            <?php get_template_part('dist/assets/svgs/facebook'); ?>
          </a></li>
          <li><a href="">
            <?php get_template_part('dist/assets/svgs/twitter'); ?>
          </a></li>
          <li><a href="">
            <?php get_template_part('dist/assets/svgs/mail'); ?>
          </a></li>
        </ul>
      </div>
    </div>
    <div class="cta-parent-social">
      <a href="<?php echo site_url('/blog');?>" class="cta">
        <span class="text">
          <span class="text-el text-current">
            Go Back
          </span>
          <span class="text-el text-new">
            Go back
          </span>
        </span>
      </a>
    </div>
  </div>
  <div class="spacing spacing--lg"></div>
</section>





<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>