<section>
<div class="spacing spacing--md"></div>
	<div class="inner">
		<div class="form-signup">
			<div class="is-center push-btm">
				<figure class="logo is-lg">
          <img src="<?php the_field('logo', 'options') ;?>" alt="">
				</figure>
			</div>
			<div class="form-nest">
				<div class="form-nest__el form-sl">
					<ul class="form-sl_el">
						<?php $socialLinksFooter = get_field('social_links', 'options');
              foreach($socialLinksFooter as $sslF) { ?>
              <li>
                <a href="<?php echo $sslF['link'];?>" target="_blank">
                  <?php  get_template_part('dist/assets/svgs/'.$sslF['icon']); ?>
                </a>
              </li>
            <?php } ?>
					</ul>		
				</div>
				<div class="form-nest__el form-el">
					<?php echo do_shortcode('[wpforms id="770" title="false" description="false"]'); ?>
				</div>
			</div>
			<div class="subscribe-blurb">
				<p><?php the_field('newsletter_blurb', 'options'); ?></p>
			</div>
		</div>
	</div>
	<div class="spacing spacing--lg"></div>
</section>