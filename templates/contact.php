<?php 
  /* Template Name: Contact */
  $root = get_template_directory_uri();
  get_header();
?>
<header class="contact-header">
  <div class="inner">
    <div class="hdr-content">
      <div class="hdr-content__el">
        <div class="hero-anime">
          <h1><?php the_field('hero_title'); ?></h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime">
          <p><?php the_field('hero_blurb'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php the_field('hero_background'); ?>"></div>
</header>


<section>
  <div class="inner">
    <div class="two-col-contact">
      <div class="two-col-contact__el">
        <div class="spacing spacing--lg"></div>
        <?php the_field('info_blurb'); ?>
        <ul class="contact-info-list">
          <li>
          <a href="<?php the_field('address_link', 'options');?>">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
              <g id="pin_drop" transform="translate(-609.5 -3209.5)">
                <rect id="Path" width="24" height="24" stroke-width="1" fill="rgba(0,0,0,0)" stroke="rgba(0,0,0,0)" transform="translate(610 3210)"/>
                <path id="Icon" d="M629,3232H615v-2h14v2Zm-7-3h0a38.272,38.272,0,0,1-3-3.812c-1.369-2-3-4.863-3-7.187a6,6,0,0,1,12,0c0,2.325-1.631,5.192-3,7.187a38.272,38.272,0,0,1-3,3.812Zm0-15a4,4,0,0,0-4,4c0,.663.288,3.193,4,7.91.937-1.2,4-5.3,4-7.91A4,4,0,0,0,622,3214Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,622,3220Z" fill="#87b840" stroke="rgba(0,0,0,0)" stroke-width="1"/>
              </g>
            </svg>
          </span>
          <span class="local-text">
            <?php the_field('address', 'options'); ?>
          </span>
          </a>
          </li>
          <li>
          <a href="tel:<?php the_field('phone_number', 'options');?>">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g id="stay_primary_portrait" transform="translate(-338 -1304)">
                  <rect id="Path" width="24" height="24" transform="translate(338 1304)" fill="rgba(0,0,0,0)"/>
                  <path id="Icon" d="M355,1327H345a2,2,0,0,1-1.99-2v-18a2,2,0,0,1,1.99-2l10,.01a2,2,0,0,1,2,1.99v18A2,2,0,0,1,355,1327Zm-10-18v14h10v-14Z" fill="#87b840"/>
                </g>
              </svg>
              <span class="local-text">
                <?php the_field('phone_number' , 'options'); ?>
              </span>

            </span>
          </a>
          </li>
        </ul>
        <div class="map map-desktop">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.188434325075!2d-73.06512188483529!3d41.21766391446297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e87498672933ed%3A0xaa132082bcfd65e!2s88%20Noble%20Ave%20%23105%2C%20Milford%2C%20CT%2006460!5e0!3m2!1sen!2sus!4v1567653168411!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <hr>
        <h4>Follow Us</h4>
        <ul class="follow-contact">
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
      <div class="two-col-contact__el">
        <div class="contact-form">
          <div class="contact-logo">
            <img src="<?php the_field('logo', 'options') ;?>" alt="">
          </div>
          <?php echo do_shortcode('[wpforms id="231" title="false" description="false"]'); ?>
        </div>
        <div class="map map-mobile">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.188434325075!2d-73.06512188483529!3d41.21766391446297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e87498672933ed%3A0xaa132082bcfd65e!2s88%20Noble%20Ave%20%23105%2C%20Milford%2C%20CT%2006460!5e0!3m2!1sen!2sus!4v1567653168411!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      
    </div>
  </div>
  <div class="blog-featured-strip"></div>
  <div class="spacing spacing--lg"></div>
</section>


<?php get_template_part('partials/two-col-with-slider'); ?>


<?php get_template_part('partials/recent-blogs'); ?>

<?php get_footer(); ?>