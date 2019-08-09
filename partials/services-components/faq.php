<?php 
  $Ecount = 0;
  $faq = get_field('faq_elements');
  foreach($faq as $theFaqParent) : $Ecount++
?>
<section id="item-<?php echo $count; ?>">
<div class="spacing spacing--md"></div>
  <div class="inner">
  <div class="has-max is-center content-block" style="padding-bottom: 6em;">
      <h1 class="spacing-btn"><?php the_field('faq_title'); ?></h1>
    </div>
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
        <a class="primary-cta cta load-more-faq" href="#0">
            Load More Faqs
        </a>
      </div>
    </div>
  </div>
  <div class="spacing spacing--lg"></div>
  <div class="blog-featured-strip"></div>
</section>
<?php endforeach; ?>