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
        <?php 
          $count;
          $faqCatItems = get_field('faq_elements');
          foreach($faqCatItems as $theFaqListEl) {
          $count++
        ?>
          <li><a href="#item-<?php echo $count; ?>" class="slide-nav"><?php echo $theFaqListEl['category']; ?></a></li>
          <?php };  $count = null?>
      </ul>
    </div>
  </div>
</section>


<?php 
  $faq = get_field('faq_elements');
  foreach($faq as $theFaqParent) : $count++
?>
<section id="item-<?php echo $count; ?>">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="two-faq-col">
      <div class="two-faq-col__el category">
        <div class="hr"></div>
        <h4>What to know</h4>
        <h1 class="green"><?php echo $theFaqParent['category']; ?></h1>
      </div>
      <div class="two-faq-col__el content">
        <?php 
          $theFaqCats = $theFaqParent['qa']; 
          foreach($theFaqCats as $qa):
        ?>
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
              <h4><?php echo $qa['question']; ?></h4>
            </div>
            <div class="answer">
            <?php echo $qa['answer']; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>
<section>
<div class="spacing spacing--lg"></div>
</section>

<?php get_template_part('partials/our-practice'); ?>

<?php get_template_part('partials/recent-blogs'); ?>

<?php get_template_part('partials/news-letter'); ?>


<?php get_footer(); ?>