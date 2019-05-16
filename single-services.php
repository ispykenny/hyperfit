<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>




<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <div class="hdr-content__el">
        <div class="hero-anime">
          <h4>Services Offered</h4>
        </div>
        <div class="hero-anime">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime"><p><?php the_field('hero_blurb'); ?></p></div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php the_field('featured_image', $post->ID);?> "></div>
  <div class="stripe"></div>
</header>

<?php get_template_part('partials/services-components/overview'); ?>

<?php get_template_part('partials/services-components/how-it-works'); ?>


<?php get_template_part('partials/services-components/features-benefits-two-col'); ?>


<?php endwhile; endif; wp_reset_postdata(); ?>


<?php get_template_part('partials/two-col-with-slider'); ?>
<?php get_template_part('partials/recent-blogs'); ?>
<?php get_template_part('partials/news-letter'); ?>

<div class="request-app-mobile">
  <div class="cta-parent-mobile">
    <a href="" class="cta">Request Appointment</a>
  </div>
</div>
<?php get_footer(); ?>