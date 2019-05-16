<?php $root = get_template_directory_uri(); ?>
<?php $root = get_template_directory_uri(); ?>


<section id="features-two-col-services">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1 class="spacing-btn">Features & Benefits</h1>
    </div>
    <?php 
      $count = 0; 
      for($i = 0; $i < 2; $i++) :
        $count++;
        $className = $count % 2 === 0 ? "is-reversed" : '';
    ?>
    <div class="is-stacked-managed manage-number <?php echo $className; ?>">
			<div class="image-column two-col-num">
				<div class="image-nest">
					<div class="image-el bg-el no-overlay" data-bg-src="<?php echo "$root/dist/assets/images/hero.jpeg" ;?> "></div>
					<div class="bar-image-services">
						<div class="mini-bar-services"></div>
					</div>
				</div>
			</div>
			<div class="text-block-column two-col-num">
				<h3>Overview</h3>
				<span class="hr"></span>
				<div class="manage-num-btn">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius odio totam tempora quod amet ut dolore pariatur nostrum ducimus vel, cum repellat explicabo aut ex delectus. Commodi sit aperiam dignissimos.
            <ul>
              <li> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, minus.</li>
              <li> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, minus.</li>
              <li> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, minus.</li>
              <li> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, minus.</li>
            </ul>
          </p>
				</div>
      </div>
		</div>
    <?php endfor; ?>
   
  </div>
  <div class="spacing spacing--lg"></div>
</section>