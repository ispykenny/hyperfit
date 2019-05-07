<?php 
  /* Template Name: Services Landing */
  get_header();
  $root = get_template_directory_uri();
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
      <div class="services-two-col">
        <div class="services-two-col__el has-request">
          <div class="request-box">
            <div class="request-box__inner content-block">
              <h1>Request Appointment</h1>
              <div class="hr"></div>
              <p>We are proud to offer age management and preventative care treatments to enhance the lives.</p>
              <div class="cta-parent-services">
                <a href="" class="cta">
                <span class="text">
                  <span class="text-el text-current">
                    Book Now
                  </span>
                  <span class="text-el text-new">
                    Book Now
                  </span>
                </span>
                </a>
              </div>
            </div>
            <div class="social-request-box">
                <ul>
                  <li id="follow-rb">Follow Us</li>
                  <?php $socialLinksFooter = get_field('social_links', 'options');
                    foreach($socialLinksFooter as $sslF) { ?>
                    <li>
                      <a href="<?php echo $sslF['link'];?>" target="_blank">
                        <?php  get_template_part('dist/assets/svgs/'.$sslF['icon']); ?>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
          </div>
        </div>
        <div class="services-two-col__el has-cardstack">
          <?php for($i = 0; $i < 9; $i++) : ?>
            <div class="card-services">
              <div class="icon-nest">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
              </div>
              <div class="card-services__inner is-center">
                <h4 class="card-title">Card Title</h4>
                <div class="hr"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aut nihil voluptatibus deleniti minima.</p>
                <div class="cta-parent-card">
                  <a href="" class="cta">
                  <span class="text">
                    <span class="text-el text-current">
                      Learn More
                    </span>
                    <span class="text-el text-new">
                      Learn More
                    </span>
                  </span>
                  </a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  <div class="blog-featured-strip"></div>
</section>



<?php get_template_part('partials/recent-blogs'); ?>
<?php get_template_part('partials/news-letter'); ?>

<div class="request-app-mobile">
  <div class="cta-parent-mobile">
    <a href="" class="cta">Request Appointment</a>
  </div>
</div>
<?php get_footer(); ?>