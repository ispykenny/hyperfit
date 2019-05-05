<section>
	<div class="spacing spacing--lg"></div>
		<div class="inner">
			<div class="has-max is-center content-block is-over hr-large-btm">
				<h1 class="is-green">Recent News</h1>
			</div>
			<div class="blog-slide-parent">
				<?php 
				$homeBlog = new WP_Query(array(
					'post-type' => 'posts',
					"posts_per_page" => 3
				));
				if($homeBlog->have_posts()) : while($homeBlog->have_posts()) : $homeBlog->the_post();
				?>
				<div class="manage-number is-reversed blog-slide-item">
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
							<a href="<?php the_permalink();?>" class="read-more-cta">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="7.818" height="9" viewBox="0 0 7.818 9"><path d="M392.548,543l-4.514,7.818h9Z" transform="translate(550.818 -388.034) rotate(90)"/></svg></span></a>
						</div>
					</div>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
			<div class="btn-group">
				<button class="next prev">
					<?php get_template_part('dist/assets/svgs/arrow-left'); ?>
				</button>
				<button class="next">
				<?php get_template_part('dist/assets/svgs/arrow-right'); ?>
				</button>
			</div>
		</div>
</section>
