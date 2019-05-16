<?php $root = get_template_directory_uri(); ?>
<?php $root = get_template_directory_uri(); ?>


<section id="features-two-col-services">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1 class="spacing-btn"><?php the_field('features_and_benefits_title'); ?></h1>
    </div>
    <?php 
      $count = 0;
      $cardAndImage = get_field('card_and_image'); 
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
      <?php endforeach; ?>
   
  </div>
  <div class="spacing spacing--lg"></div>
</section>