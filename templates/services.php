<?php 
  /* Template Name: Services Landing */
  get_header();
  $root = get_template_directory_uri();
  $hasFeatured = get_field('has_featured_services');
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

<?php if($hasFeatured) : ?>
<section>
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
			<h3 class="on-green"><?php the_field('features_sub_title'); ?></h3>
			<h1><?php the_field('features_title'); ?></h1>
			<span class="hr"></span>
			<p><?php the_field('features_blurb'); ?></p>
		</div>

    <div class="featured-offerings">
      <div class="blog-block">
        <div class="blog-slide-parent">
          <?php 
            $featured = get_field('featured_services'); 
            foreach($featured as $postE) :
            $base = $postE['featured_service'];
            $postIdS = $base->ID;
            $title = get_the_title($postIdS);
            $blurb = $base->post_content;
          ?>
             <div class="manage-number is-reversed blog-slide-item">
              <div class="image-column two-col-num">
                <div class="image-nest">
                  <div class="image-el bg-el no-overlay" data-bg-src="<?php the_field('featured_image', $postIdS) ;?>"></div>
                  <div class="bar-image"></div>
                </div>
              </div>
              <div class="text-block-column two-col-num">
                <h3><?php echo $title; ?></h3>
                <span class="hr"></span>
                <p><?php echo wp_trim_words( $blurb, 30, '...' ); ?></p>
                <div class="manage-num-btn read-more">
                  <a href="<?php echo get_the_permalink($postIdS);?>" class="read-more-cta">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)"/></svg></span></a>
                </div>
              </div>
            </div>

        <?php endforeach; ?>
        </div>
        <div class="btn-group">
          <button class="next prev">
            <?php get_template_part('dist/assets/svgs/arrow-left'); ?>
          </button>
          <button class="next">
            <?php get_template_part('dist/assets/svgs/arrow-right'); ?>
          </button>
        </div>
      </div>
    </div>

    
  
  </div>
  <?php if($hasFeatured) :  ?>
  <div class="blog-featured-strip"></div>
  <?php endif; ?>
</section>

<?php endif; ?>
<section>
  <div class="spacing spacing--lg"></div>
    <div class="inner">
      <div class="services-two-col">
        <div class="services-two-col__el has-request">
          <div class="request-box">
            <div class="request-box__inner content-block">
              <h1><?php the_field('request_box_title', $post->ID); ?></h1>
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
  <?php if(!$hasFeatured) :  ?>
  <div class="blog-featured-strip"></div>
  <?php endif; ?>
  <div class="spacing spacing--lg"></div>
</section>


<?php get_template_part('partials/two-col-with-slider'); ?>
<?php get_template_part('partials/recent-blogs'); ?>
<?php get_template_part('partials/news-letter'); ?>

<div class="request-app-mobile">
  <div class="cta-parent-mobile">
    <?php $ctaLink = get_field('request_appointment_cta', 'options');?>
    <a href="<?php echo $ctaLink['url'];?>" class="cta" target="<?php echo $ctaLink['target'];?>"><?php echo $ctaLink['title']; ?></a>
  </div>
</div>
<?php get_footer(); ?>


