<?php /* Template Name: Blog Listing */ 
  $root = get_template_directory_uri();
  get_header();
?>

<header class="standard-header">
  <div class="inner">
    <div class="hdr-content">
      <div class="hdr-content__el">
        <div class="hero-anime">
          <h4>Our Blogs for You</h4>
          <h1>General Content for you</h1>
        </div>
        <div class="hr"></div>
        <div class="hero-anime"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, id quia ex debitis doloremque harum architecto laudantium sit veritatis distinctio?</p></div>
      </div>
    </div>
  </div>
  <div class="bg-el par" data-bg-src="<?php echo "$root/dist/assets/images/hero.jpeg";?> "></div>
</header>


<section>
  <div class="inner">
    <div class="featured-post">
      <h2 class="featured-title">
        Featured Posts
      </h2>
      <div class="featured-grid">
        <div class="main-blog">
          <div class="card-full is-card">
            <a href="">
              <div class="card-full__element">
                <div class="card-content-area">
                  <h3>Blog Title Main</h3>
                </div>
                <div class="bg-el" data-bg-src="<?php echo "$root/dist/assets/images/hero.jpeg";?> "></div>
              </div>
            </a>
          </div>
        </div>
        <div class="additional-blog">
          <div class="card-mini is-card">
            <a href="">
              <div class="card-mini__element">
                <div class="card-content-area">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, error.</h3>  
                </div>
                <div class="bg-el" data-bg-src="<?php echo "$root/dist/assets/images/hero.jpeg";?> "></div>
              </div>
            </a>
          </div>
          <div class="card-mini is-card">
            <a href="">
              <div class="card-mini__element">
                <div class="card-content-area">
                  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, error.</h3>  
                </div>
                <div class="bg-el" data-bg-src="<?php echo "$root/dist/assets/images/hero.jpeg";?> "></div>
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
  <div class="inner">
    <div class="featured-post">
      <h2 class="featured-title">
        Blog Posts
      </h2>
    </div>
  </div>
</section>


<?php 
  get_footer();
?>