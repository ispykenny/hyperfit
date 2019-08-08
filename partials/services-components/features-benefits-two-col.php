<?php $root = get_template_directory_uri(); ?>
<?php $showGrid = get_field('show_icon_grid'); ?>

<section id="features-two-col-services">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1 class="spacing-btn"><?php the_field('features_and_benefits_title'); ?></h1>
    </div>
    <?php 
      $count = 0;
      $cardAndImage = get_field('card_and_image'); 
      if($cardAndImage) :
      foreach($cardAndImage as $theValProp) :
        $count++;
        $className = $count % 2 === 0 ? "is-reversed" : '';
    ?>
    <div class="is-stacked-managed manage-number <?php echo $className; ?>">
			<div class="image-column two-col-num">
				<div class="image-nest">
					<div class="image-el bg-el no-overlay" data-bg-src="<?php echo $theValProp['image']; ;?> "></div>
					<div class="bar-image-services">
						<div class="mini-bar-services"></div>
					</div>
				</div>
			</div>
			<div class="text-block-column two-col-num">
				<h3><?php echo $theValProp['title'] ?></h3>
				<span class="hr"></span>
				<div class="manage-num-btn">
					<?php echo $theValProp['blurb'] ?>
				</div>
      </div>
		</div>
      <?php endforeach; endif;?>
   
  </div>
  
  <?php if($showGrid) : ?>
  <div class="spacing spacing--lg"></div>
  <div class="inner three-stack">
    <?php 
      $howWorkGrid = get_field('icon_grid');
      foreach($howWorkGrid as $theWorkers) :
    ?>
    <div class="card-services">
      <div class="icon-nest">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
      </div>
      <div class="card-services__inner is-center">
        <h4 class="card-title"><?php echo $theWorkers['title']; ?></h4>
        <div class="hr"></div>
        <p><?php echo wp_trim_words( $theWorkers['blurb'], 20, '...' ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  
  </div>
      <?php endif; ?>
  <div class="spacing spacing--lg"></div>
</section>