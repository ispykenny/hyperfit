<?php $root = get_template_directory_uri(); ?>


<section id="how-it-works">
  <div class="spacing spacing--lg"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h1 class="spacing-btn">How It Works</h1>
    </div>
    <div class="four-column-icon-section on-light">
      <?php for($i = 0; $i < 4; $i++) : ?>
        <div class="icon-section-element">
          <div class="icon-section-element__inner">
            <div class="four-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
            </div>
          </div>
          <div class="icon-section-element__inner">
            <p>Value Prop</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iure similique optio repudiandae! Corporis incidunt doloremque repellat, natus quos accusantium? Reiciendis laudantium eius.</p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
  <div class="spacing spacing--lg"></div>
</section>