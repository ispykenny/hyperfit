<?php $root = get_template_directory_uri(); ?>
<?php get_header(); 

$newCatArr = [];
?>

<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="hdr-content__el">
        <div class="hero-anime">
          
          <?php
            $cat = get_the_category($post->ID);
            $stringy = sizeof($cat) > 1 ? ", " : " ";
            foreach($cat as $theCat) {
            array_push($newCatArr, $theCat->name);
           } ?>
          <h4><span>Category:</span> <span id="category-name"><?php echo implode($stringy,$newCatArr); ?></span></h4>
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime"><p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p></div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php the_field('featured_image', $featureMain->ID) ;?> "></div>
</header>


<section class="shimmy-top">
  <div class="inner">
    <article>
      <?php the_content(); ?>
    </article>

    <div class="social-share">
      <div class="social-share__el">
        <span id="share-on">Share: </span>
      </div>
      <div class="social-share__el">
        <ul>
          <li><a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
              <g id="facebook" transform="translate(-7 -2)">
                <path id="Path_13" data-name="Path 13" d="M18,2H15a5,5,0,0,0-5,5v3H7v4h3v8h4V14h3l1-4H14V7a1,1,0,0,1,1-1h3Z"/>
              </g>
            </svg>
          </a></li>
          <li><a href="">
            <svg xmlns="http://www.w3.org/2000/svg"  height="20" viewBox="0 0 18 14.681">
              <g id="twitter" transform="translate(-1 -2.99)">
                <path id="Path_14" data-name="Path 14" d="M19,3A8.918,8.918,0,0,1,16.431,4.25,3.665,3.665,0,0,0,10,6.7v.818A8.722,8.722,0,0,1,2.636,3.816S-.636,11.18,6.727,14.453A9.524,9.524,0,0,1,1,16.089c7.364,4.091,16.364,0,16.364-9.409A3.682,3.682,0,0,0,17.3,6,6.316,6.316,0,0,0,19,3Z" transform="translate(0)"/>
              </g>
            </svg>
          </a></li>
          <li><a href="">
            <svg xmlns="http://www.w3.org/2000/svg"  height="20" viewBox="0 0 22 18">
                <g id="mail" transform="translate(-1 -3)">
                  <path id="Path_17" data-name="Path 17" d="M4,4H20a2.006,2.006,0,0,1,2,2V18a2.006,2.006,0,0,1-2,2H4a2.006,2.006,0,0,1-2-2V6A2.006,2.006,0,0,1,4,4Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path id="Path_18" data-name="Path 18" d="M22,6,12,13,2,6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </g>
              </svg>
          </a></li>
        </ul>
      </div>
    </div>
    <div class="cta-parent-social">
      <a href="<?php echo site_url('/blog');?>" class="cta">
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
</section>





<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>