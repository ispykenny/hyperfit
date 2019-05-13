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

<section>
  <div class="spacing spacing--lg"></div>
    <div class="inner">
      <div class="services-two-col">
        <div class="services-two-col__el has-request">
          <div class="request-box">
            <div class="request-box__inner content-block">
              <h1><?php the_field('request_box_title'); ?></h1>
              <div class="hr"></div>
              <p><?php the_field('request_box_blurb'); ?></p>
              <div class="cta-parent-services">
                <a href="<?php the_field('request_box_cta')['url']; ?>" class="cta">
                <span class="text">
                  <span class="text-el text-current">
                    <?php the_field('request_box_cta')['title']; ?>
                  </span>
                  <span class="text-el text-new">
                  <?php the_field('request_box_cta')['title']; ?>
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
        <div class="services-two-col__el has-cardstack is-full">
          <div class="card-services">
            <div class="card-services__inner">
              <?php the_content(); ?>
            </div>
          </div>
            <?php get_template_part('partials/share-to-social'); ?>
            <div class="cta-parent-social">
              <a href="<?php echo site_url('/services');?>" class="cta">
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
      </div>
    </div>
  <div class="blog-featured-strip"></div>
  <div class="spacing spacing--lg"></div>
</section>

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