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
              <h1><?php the_field('request_box_title'); ?></h1>
              <div class="hr"></div>
              <p><?php the_field('request_box_blurb'); ?></p>
              <div class="cta-parent-services">
                <?php $theUrl = get_field('request_box_cta'); ?>
                <a href="<?php echo $theUrl['url']; ?>" class="cta">
                <span class="text">
                  <span class="text-el text-current">
                    <?php echo $theUrl['title']; ?>
                  </span>
                  <span class="text-el text-new">
                    <?php echo $theUrl['title']; ?>
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
          <?php 
            $services = New WP_Query(array(
              'post_type' => 'services'
            ));
            if($services->have_posts()) : while($services->have_posts()) : $services->the_post();
          ?>
            <div class="card-services">
              <div class="icon-nest">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
              </div>
              <div class="card-services__inner is-center">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <div class="hr"></div>
                <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                <div class="cta-parent-card">
                  <a href="<?php the_permalink();?>" class="cta">
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
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  <div class="blog-featured-strip"></div>
  <div class="spacing spacing--lg"></div>
</section>


<?php get_template_part('partials/two-col-with-slider'); ?>
<?php get_template_part('partials/recent-blogs'); ?>
<?php get_template_part('partials/news-letter'); ?>

<div class="request-app-mobile">
  <div class="cta-parent-mobile">
    <a href="" class="cta">Request Appointment</a>
  </div>
</div>
<?php get_footer(); ?>