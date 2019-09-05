<?php /* template name: Default Page Template */ 
  $root = get_template_directory_uri();
  get_header();
  if(have_posts()) : 
    while(have_posts()) : the_post();
?>

<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <div class="hdr-content__el">
        <div class="hero-anime">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php echo get_the_post_thumbnail_url();?> "></div>
  <div class="stripe"></div>
</header>

<section class="default-block">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <article>
      <?php the_content(); ?>
    </article>
  </div>
  <div class="spacing spacing--lg"></div>
</section>



<?php 
    endwhile;
  endif;
  wp_reset_postdata();
  get_footer();
?>
