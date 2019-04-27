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


<?php 
  get_footer();
?>