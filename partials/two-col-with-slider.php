<?php $root = get_template_directory_uri(); ?>
<?php $test = true; ?>

<section class="on-black">
  <div class="spacing spacing--lg"></div>
    <div class="inner">
      <div class="has-max is-center content-block">
        <h3 class="on-green">What our customers</h3>
        <h1>Have to say about us</h1>
      </div>

      <div class="two-col-slide-main">
        <div class="two-col-slide-main__el">
          <div class="content-block">
            <h1>What our customers have to say</h1>
          </div>
          <div class="hr"></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dolores fuga saepe illo ex eveniet! Quasi molestiae ex non eveniet quo necessitatibus sint voluptatem aliquid? Sint eum dolorem facere vel.</p>
          <div class="btn-group left desktop">
            <button class="slide-item-btn prev">
              <?php get_template_part('dist/assets/svgs/arrow-left'); ?>
            </button>
            <button class="slide-item-btn">
            <?php get_template_part('dist/assets/svgs/arrow-right'); ?>
            </button>
          </div>
        </div>
        <div class="two-col-slide-main__el">
          <div class="slide-parent-card">
            <?php for($i = 0; $i < 4; $i++) : ?>
              <div class="slide-card">
                <div class="slide-card__inner">
                  <div class="slide-image" style="background-image: url(https://hyperfitmd.com/wp-content/uploads/2017/09/Dr._Guglin_Photo_2.png);"></div>
                  <div class="test-area">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis maiores saepe iste alias tempora impedit magnam tenetur est quam qui rem obcaecati temporibus doloremque voluptatem, unde, adipisci reiciendis illo repellat velit. Sequi debitis sunt ratione dolorum, totam mollitia beatae voluptatum!</p>
                  </div>
                  <div class="from-test">
                    <strong>- John Doe</strong>
                  </div>
                </div>
                <div class="quote">
                  <svg xmlns="http://www.w3.org/2000/svg" width="172.578" height="115.053" viewBox="0 0 172.578 115.053">
                    <g id="ic_format_quote_18px" transform="translate(0)">
                      <path id="Path_71" data-name="Path 71" d="M103.671,5V76.908H143.22l-25.168,43.145h32.358l25.168-43.145V5ZM3,76.908H42.549L17.382,120.052H49.74L74.908,76.908V5H3Z" transform="translate(-3 -5)"/>
                    </g>
                  </svg>
                </div>
              </div>
            <?php endfor ?>
          </div>
          <div class="btn-group left mobile">
              <button class="slide-item-btn prev">
                <?php get_template_part('dist/assets/svgs/arrow-left'); ?>
              </button>
              <button class="slide-item-btn">
              <?php get_template_part('dist/assets/svgs/arrow-right'); ?>
              </button>
            </div>
        </div>

    

      
      </div>
    
    </div>
  <div class="spacing spacing--lg"></div>
  <div class="blog-featured-strip"></div>
</section>