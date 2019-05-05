<?php 
  /* Template Name: Our Practice */
  $root = get_template_directory_uri();
  get_header();
?>
<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <div class="hdr-content__el">
        <div class="hero-anime">
          <h4><?php the_field('hero_sub_title'); ?></h4>
        </div>
        <div class="hero-anime">
          <h1><?php the_field('hero_title'); ?></h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime"><p><?php the_field('hero_blurb'); ?></p></div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php the_field('hero_background');?> "></div>
  <div class="stripe"></div>
</header>


<section id="team--info">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1>The Faces Behind Hyperfit MD.</h1>
      <span class="hr"></span>
    </div>
  </div>
  <div class="spacing spacing--md"></div>
  <div class="blog-featured-strip"></div>



<?php 
  $theOwners = get_field('the_owners');

  foreach($theOwners as $owners) : ?>
<div class="intro-deck">
  <div class="inner">
    <div class="two-col-about">
      <div class="two-col-about__inner has-image">
        <figure class="about-image">
          <div class="image-nest-about bg-el" data-bg-src="<?php echo $owners['image']; ?>">
          </div>
        </figure>
      </div>
      <div class="two-col-about__inner has-blurb">
        <div class="about-blurb">
          <div class="blurb-info">
            <h2><?php echo $owners['name']; ?></h2>
            <div class="hr"></div>
            <h4><?php echo $owners['job_title']; ?></h4>
          </div>
          <div class="blurb-content">
            <p><?php echo wp_trim_words( $owners['about_info'], 40, '...' ); ?> </p>
          </div>
          <div class="blurb-content-full">
            <?php echo $owners['about_info']; ?>
          </div>
          <a href="" class="read-more-cta modal-trigger">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)"/></svg></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<div class="spacing spacing--lg"></div>
</section>



<?php get_template_part('partials/our-practice'); ?>

<?php get_template_part('partials/recent-blogs'); ?>

<?php get_template_part('partials/news-letter'); ?>

<?php get_footer(); ?>