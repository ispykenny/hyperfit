<?php /* Template Name: Home Page */ 
	get_header(); 
	$root = get_template_directory_uri();
?>

<header>
	<div class="inner">
		<div class="hdr-content">
			<div class="hdr-content__el">
				<div class="hero-anime">
					<h1><?php the_field('hero_title'); ?></h1>
				</div>
				<div class="hero-anime"><p><?php the_field('hero_blurb'); ?></p></div>
				<div class="cta-el hero-anime">
					<?php $primaryLink = get_field('hero_cta_primary'); ?>
					<a href="<?php echo $primaryLink['url'];?>" class="cta">
						<span class="text">
							<span class="text-el text-current">
							<?php echo $primaryLink['title'];?>
							</span>
							<span class="text-el text-new">
							<?php echo $primaryLink['title'];?>
							</span>
						</span>
					</a>
					<?php $showSecondary = get_field('show_secondary_cta');
						$secondaryCta = get_field('secondary_cta');
						if($showSecondary) {?>
							<a href="<?php echo $secondaryCta['url'];?>"><?php echo $secondaryCta['title'];?><svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)" fill="#fff"/></svg></a>
						<?php } ;?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-el par" data-bg-src="<?php the_field('hero_background_image');?> "></div>
	<div class="stripe"></div>
</header>

<section>
	<div class="inner">
		<div class="has-max is-center content-block">
			<h3><?php the_field('second_section_subtitle'); ?></h3>
			<h1><?php the_field('second_section_title'); ?></h1>
			<span class="hr"></span>
			<?php the_field('second_section_blurb') ?>
		</div>

		
		<div class="three-card-block">
			<?php 
				$slideItems = get_field('second_section_slider'); 
				foreach($slideItems as $theSlideEl) { ?>
				<div class="three-card-block__element">
					<div class="icon-nest">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
					</div>
					<div class="three-card-inner">
						<h4><?php echo $theSlideEl['title']; ?></h4>
						<div class="hr"></div>
						<p><?php echo $theSlideEl['blurb']; ?></p>
						<a href="<?php echo $theSlideEl['cta']['url'];?>" class="cta">
							<span class="text">
								<span class="text-el text-current">
									<?php echo $theSlideEl['cta']['title'];?>
								</span>
								<span class="text-el text-new">
									<?php echo $theSlideEl['cta']['title'];?>
								</span>
							</span>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="spacer-large"></div>
	<div class="slant-top"></div>
</section>

<?php get_template_part('partials/our-practice'); ?>

<section>
	<div class="spacer-large"></div>
	<div class="inner">
		<div class="manage-number">
			<div class="image-column two-col-num">
				<div class="image-nest">
					<div class="image-el bg-el no-overlay" data-bg-src="<?php the_field('image_element'); ;?> "></div>
					<div class="bar-image">
						<div class="mini-bar"></div>
					</div>
				</div>
			</div>
			<div class="text-block-column two-col-num">
				<h3><?php the_field('two_column_title'); ?></h3>
				<span class="hr"></span>
				<?php the_field('two_column_blurb'); ?>
				<div class="manage-num-btn">
					<?php $twoColCta = get_field('two_column_cta'); ?>
					<a href="<?php echo $twoColCta['url'];?> " class="cta">
						<span class="text">
							<span class="text-el text-current">
								<?php echo $twoColCta['title'];?> 
							</span>
							<span class="text-el text-new">
							<?php echo $twoColCta['title'];?> 
							</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="inner">
		<div class="has-max is-center content-block is-over hr-large-btm">
			<h1 class="is-green">Recent News</h1>
		</div>
		<div class="is-padded-border blog-slide-parent">
			<?php 
			$homeBlog = new WP_Query(array(
				'post-type' => 'posts',
				"posts_per_page" => 3
			));
			if($homeBlog->have_posts()) : while($homeBlog->have_posts()) : $homeBlog->the_post();
			?>
			<div class="manage-number is-reversed">
				<div class="image-column two-col-num">
					<div class="image-nest">
						<div class="image-el bg-el no-overlay" data-bg-src="<?php the_field('featured_image', $post->ID);?> "></div>
						<div class="bar-image"></div>
					</div>
				</div>
				<div class="text-block-column two-col-num">
					<h3><?php the_title(); ?></h3>
					<span class="hr"></span>
					<p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
					<div class="manage-num-btn read-more">
						<a href="<?php the_permalink();?>">Read More <svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)" fill="#000"/></svg></a>
					</div>
				</div>
			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<section>
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




<?php get_footer(); ?>
