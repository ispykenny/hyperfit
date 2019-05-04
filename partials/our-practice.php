<?php $root = get_template_directory_uri(); ?>


<section>
  <div class="spacing spacing--lg"></div>
  <div class="inner inner-most">
    <div class="has-max is-center content-block is-over hr-large-btm">
      <h3 class="is-green"><?php the_field('our_practice_sub_title', 'options') ?></h3>
      <h1 class="is-white"><?php the_field('our_practice_title', 'options') ?></h1>
      <span class="hr"></span>
    </div>

    <div class="four-column-icon-section">
      <?php $iconSection = get_field('our_practice_elements', 'options'); ?>
      <?php foreach($iconSection as $theIconSet) { ?>
        <div class="icon-section-element">
          <div class="icon-section-element__inner">
            <div class="four-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
            </div>
          </div>
          <div class="icon-section-element__inner">
            <p><?php echo $theIconSet['title']; ?></p>
            <p><?php echo $theIconSet['blurb']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="center view-all">
      <?php $ourPracCta = get_field('our_practice_cta', 'options'); ?>
      <a href="<?php echo $ourPracCta['url'];?>" class="cta">
        <span class="text">
          <span class="text-el text-current">
          <?php echo $ourPracCta['title'];?>
          </span>
          <span class="text-el text-new">
          <?php echo $ourPracCta['title'];?>
          </span>
        </span>
      </a>
    </div>
  </div>
  <div class="bg-el overlay-dark" data-bg-src="<?php the_field('our_practice_background', 'options') ;?>"></div>
  <div class="slant-green"></div>
  <div class="spacing spacing--lg"></div>
  </section>