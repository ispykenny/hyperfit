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
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1>The Faces Behind Hyperfit MD.</h1>
      <span class="hr"></span>
    </div>
  </div>
</section>


<?php for($i = 0; $i < 2; $i++ ) : ?>
<section>
  <div class="inner">
    <div class="two-col-about">
      <div class="two-col-about__inner has-image">
        <figure class="about-image">
          <img src="https://hyperfitmd.com/wp-content/uploads/2017/09/Dr._Guglin_Photo_2.png" alt="">
        </figure>
      </div>
      <div class="two-col-about__inner has-blurb">
        <div class="about-blurb">
          <h2>Chargles Guglin</h2>
          <div class="hr"></div>
          <h4>MD, F.A.C.S OWNER</h4>
          <p>Dr. Charles Guglin MD FACS was born and raised in Rochester, NY.  After receiving a BS from SUNY at Albany, NY he went on to medical school at the University of Pittsburgh School of Medicine. </p>
        </div>
      </div>
    </div>
  </div>
</section>





<?php endfor; ?>


<?php get_footer(); ?>