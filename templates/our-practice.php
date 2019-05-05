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


<section>
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1>The Faces Behind Hyperfit MD.</h1>
      <span class="hr"></span>
    </div>
  </div>
  <div class="spacing spacing--md"></div>
  <div class="blog-featured-strip"></div>



<?php for($i = 0; $i < 2; $i++ ) : ?>
<div class="intro-deck">
  <div class="inner">
    <div class="two-col-about">
      <div class="two-col-about__inner has-image">
        <figure class="about-image">
          <div class="image-nest-about bg-el" data-bg-src="https://hyperfitmd.com/wp-content/uploads/2017/09/Dr._Guglin_Photo_2.png">

          </div>
        </figure>
      </div>
      <div class="two-col-about__inner has-blurb">
        <div class="about-blurb">
          <h2>Chargles Guglin</h2>
          <div class="hr"></div>
          <h4>MD, F.A.C.S OWNER</h4>
          <p>Dr. Charles Guglin MD FACS was born and raised in Rochester, NY.  After receiving a BS from SUNY at Albany, NY he went on to medical school at the University of Pittsburgh School of Medicine. </p>
          <a href="" class="read-more-cta">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)"/></svg></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endfor; ?>
<div class="spacing spacing--lg"></div>
</section>



<?php get_template_part('partials/our-practice'); ?>

<?php get_template_part('partials/news-letter'); ?>

<?php get_footer(); ?>