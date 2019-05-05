<?php /* Template Name: Blog Listing */ 
  $root = get_template_directory_uri();
  get_header();
  $featureMain = get_field('featured_blog_post_main'); 
  $featured2 = get_field('featured_blog_post_2');
  $featured3 = get_field('featured_blog_post_3');
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
    <div class="featured-post">
      <h2 class="featured-title">
        Featured Posts
      </h2>
      <div class="featured-grid">
        <div class="main-blog">
          <div class="card-full is-card">
            <a href="<?php the_permalink($featureMain->ID); ?>">
              <div class="card-full__element">
                <div class="card-content-area">
                  <div class="hr"></div>
                  <h3><?php echo $featureMain->post_title; ?></h3>
                  <div class="content-blurb">
                    <p><?php echo wp_trim_words( $featureMain->post_content, 40, '...' ); ?></p>
                  </div>
                </div>
                <div class="bg-el" data-bg-src="<?php the_field('featured_image', $featureMain->ID) ;?> "></div>
              </div>
            </a>
          </div>
        </div>
        <div class="additional-blog">
          <div class="card-mini is-card">
            <a href="<?php the_permalink($featured2->ID); ?>">
              <div class="card-mini__element">
                <div class="card-content-area">
                  <div class="hr"></div>
                  <h3><?php echo $featured2->post_title; ?></h3>  
                </div>
                <div class="bg-el" data-bg-src="<?php the_field('featured_image', $featured2->ID);?> "></div>
              </div>
            </a>
          </div>
          <div class="card-mini is-card">
            <a href="<?php the_permalink($featured3->ID); ?>">
              <div class="card-mini__element">
                <div class="card-content-area">
                  <div class="hr"></div>
                  <h3><?php echo $featured3->post_title; ?></h3>  
                </div>
                <div class="bg-el" data-bg-src="<?php the_field('featured_image', $featured3->ID);?> "></div>
              </div>
            </a> 
          </div>
        </div>
      </div>
    </div>  

  </div>
  <div class="blog-featured-strip"></div>
</section>

<section>
<div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="featured-post">
      <h2 class="featured-title">
        Blog Posts
      </h2>
      <div class="added-blogs">
        <?php $postLoop = New WP_Query(array(
          'post-type' => 'posts'
        )); ?>

        <?php if($postLoop->have_posts()) : while($postLoop->have_posts()) : $postLoop->the_post(); ?>
        
          <div class="blog-item">
            <div class="blog-item__content">
              <h3><?php the_title(); ?></h3>
              <div class="hr"></div>
              <div class="content-height">
                <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
              </div>
              <a href="<?php the_permalink();?>" class="cta">
                <span class="text">
                  <span class="text-el text-current">
                    Read More
                  </span>
                  <span class="text-el text-new">
                    Read More
                  </span>
                </span>
              </a>
            </div>
          </div>
          <?php 
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </div>
      
    </div>
  </div>
  <div class="spacer-large"></div>
  <div class="spacing spacing--lg"></div>
</section>

<?php get_template_part('partials/our-practice'); ?>

<?php get_template_part('partials/news-letter'); ?>
<?php 
  get_footer();
?>