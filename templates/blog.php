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
      <div class="added-blogs">
        <?php for($i = 0; $i < 8; $i++) { ?>
          <div class="blog-item">
            <div class="blog-item__content">
              <h3>Blog Title</h3>
              <div class="hr"></div>
              <div class="content-height">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, asperiores.</p>
              </div>
              <a href="" class="cta">
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
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="spacer-large"></div>
</section>

<section>
  <div class="inner inner-most">
    <div class="has-max is-center content-block is-over hr-large-btm">
      <h3 class="is-green">Our Practice.</h3>
      <h1 class="is-white">So, Why Us?</h1>
      <span class="hr"></span>
    </div>

    <div class="four-column-icon-section">
      <div class="icon-section-element">
        <div class="icon-section-element__inner">
          <div class="four-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
          </div>
        </div>
        <div class="icon-section-element__inner">
          <p>Title</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quam. Minus sed accusamus consequatur delectus?</p>
        </div>
      </div>
      <div class="icon-section-element">
        <div class="icon-section-element__inner">
          <div class="four-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
          </div>
        </div>
        <div class="icon-section-element__inner">
          <p>Title</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quam. Minus sed accusamus consequatur delectus?</p>
        </div>
      </div>
      <div class="icon-section-element">
        <div class="icon-section-element__inner">
          <div class="four-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
          </div>
        </div>
        <div class="icon-section-element__inner">
          <p>Title</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quam. Minus sed accusamus consequatur delectus?</p>
        </div>
      </div>
      <div class="icon-section-element">
        <div class="icon-section-element__inner">
          <div class="four-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
          </div>
        </div>
        <div class="icon-section-element__inner">
          <p>Title</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quam. Minus sed accusamus consequatur delectus?</p>
        </div>
      </div>
    </div>
    <div class="center view-all">
      <a href="" class="cta">
        <span class="text">
          <span class="text-el text-current">
            View All Services
          </span>
          <span class="text-el text-new">
            View All Services
          </span>
        </span>
      </a>
    </div>
  </div>
  <div class="bg-el overlay-dark" data-bg-src="<?php echo "$root/dist/assets/images/AdobeStock_169801804_Preview.jpeg"; ?>"></div>
  <div class="slant-green"></div>
</section>

<section>
<div class="spacer-large"></div>
  <div class="inner">
    <div class="form-signup">
      <div class="is-center push-btm">
        <h3>Join our Newsletter</h3>
      </div>
      <form action="">
        <div class="form-el is-flexed-input">
          <div class="el-nest">
            <input type="email" id="email-signup">
            <label for="email-signup">Email Address</label>
          </div>
          <div class="el-nest has-btn-form">
            <button type="submit" class="cta">Subscribe</button>
          </div>
          
        </div>

      </form>
    </div>
  </div>
  <div class="spacer-large"></div>
</section>
<?php 
  get_footer();
?>