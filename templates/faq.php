<?php 
  /* Template Name: Faqs */
  $root = get_template_directory_uri();
  get_header();
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

<section class="mini-nav">
  <div class="mini-nav-el">
    <div class="inner">
      <ul id="nav-nav">
        <li><a href="#item-0">Appointments</a></li>
        <li><a href="#item-1">Treatments</a></li>
        <li><a href="#item-2">Payments</a></li>
      </ul>
    </div>
  </div>
</section>


<?php for($i = 0; $i < 3; $i++) : ?>
<section>
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="two-faq-col">
      <div class="two-faq-col__el category">
        <div class="hr"></div>
        <h4>What to know</h4>
        <h1 class="green">Appointments</h1>
      </div>
      <div class="two-faq-col__el content">
        <?php for($c = 0; $c < 4; $c++) : ?>
        <div class="faq-card">
      
          <div class="faq-card_el">
            <div class="question">
              <div class="indicator-parent">
                <button class="indicator-el">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                  <g id="Group_68" data-name="Group 68" transform="translate(0.001 0)">
                    <rect id="Rectangle_102" data-name="Rectangle 102" width="3.394" height="13.576" transform="translate(9.6 0) rotate(45)" fill="#87b840"/>
                    <rect id="Rectangle_103" data-name="Rectangle 103" width="3.394" height="13.576" transform="translate(12 9.6) rotate(135)" fill="#87b840"/>
                  </g>
                </svg>

                </button>
              </div>
              <h4>Lorem ipsum dolor sit amet consectetur?</h4>
            </div>
            <div class="answer">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis voluptates voluptate, animi reprehenderit dolor doloribus a quam corporis neque eius <a href="https://google.com">hello</a>  illo ad sit cumque aperiam maiores. Non voluptate dolorem laborum?</p>
            </div>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<?php endfor; ?>
<section>
<div class="spacing spacing--lg"></div>
</section>

<?php get_template_part('partials/our-practice'); ?>

<?php get_template_part('partials/recent-blogs'); ?>

<?php get_template_part('partials/news-letter'); ?>


<?php get_footer(); ?>