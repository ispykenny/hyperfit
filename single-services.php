<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php 
  $overview = get_field('show_overview'); 
  $howItWorks = get_field('show_how_it_works');
  $featuresAndBenefits = get_field('show_features_and_benefits');
  $faq = get_field('show_faq');
?>



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

<?php 
  if($overview) :
    get_template_part('partials/services-components/overview');
  endif;
?>

<?php 
  if($howItWorks) :
    get_template_part('partials/services-components/how-it-works'); 
  endif;
?>


<?php 
  if($featuresAndBenefits) :
    get_template_part('partials/services-components/features-benefits-two-col');
  endif;
?>

<?php 
  if($faq) : 
    get_template_part('partials/services-components/faq');
  endif;

?>


       


<?php endwhile; endif; wp_reset_postdata(); ?>


<?php get_template_part('partials/two-col-with-slider'); ?>
<?php get_template_part('partials/recent-blogs'); ?>
<?php get_template_part('partials/news-letter'); ?>

<div class="request-app-mobile">
  <div class="cta-parent-mobile">
    <?php $ctaLink = get_field('request_appointment_cta', 'options');?>
    <a href="<?php echo $ctaLink['link'];?>" class="cta" <?php echo $ctaLink['target'];?>>Request Appointment</a>
  </div>
</div>
<?php get_footer(); ?>