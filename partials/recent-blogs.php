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
