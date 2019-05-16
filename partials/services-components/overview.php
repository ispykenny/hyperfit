<?php $root = get_template_directory_uri(); ?>
<section id="overview-s">
<div class="spacing spacing--lg"></div>
	<div class="inner drop-padd">
		<div class="manage-number is-reversed">
			<div class="image-column two-col-num">
				<div class="image-nest">
					<div class="image-el bg-el no-overlay" data-bg-src="<?php the_field('overview_image');?> "></div>
					<div class="bar-image-services">
						<div class="mini-bar-services"></div>
					</div>
				</div>
			</div>
			<div class="text-block-column two-col-num">
				<h3><?php the_field('overview_headline'); ?></h3>
				<span class="hr"></span>
				<?php the_field('two_column_blurb'); ?>
				<div class="manage-num-btn">
					<?php the_field('overview_blurb'); ?>
				</div>
			</div>
		</div>
  </div>
  <div class="spacing spacing--lg"></div>
  <div class="spacing spacing--lg"></div>
  <div class="blog-featured-strip"></div>
</section>
