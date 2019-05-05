<?php 
	$root = get_template_directory_uri();
?>

<footer>
  <div class="inner">
    <div class="footer-columns">
      <div class="footer-columns__element">
        <a href="<?php echo site_url('');?> " id="footer-logo">
          <img src="<?php the_field('logo', 'options') ;?>" alt="">
        </a>
        <div class="copy">
          <?php the_field('copy_right', 'options'); ?>
        </div>
      </div>
      <div class="footer-columns__element">
        <span class="mico-hr"></span>
        <h5 class="site-cats">Company</h5>
        <div class="local-with-icon">
          <a href="<?php the_field('address_link', 'options');?>">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
              <g id="pin_drop" transform="translate(-609.5 -3209.5)">
                <rect id="Path" width="24" height="24" stroke-width="1" fill="rgba(0,0,0,0)" stroke="rgba(0,0,0,0)" transform="translate(610 3210)"/>
                <path id="Icon" d="M629,3232H615v-2h14v2Zm-7-3h0a38.272,38.272,0,0,1-3-3.812c-1.369-2-3-4.863-3-7.187a6,6,0,0,1,12,0c0,2.325-1.631,5.192-3,7.187a38.272,38.272,0,0,1-3,3.812Zm0-15a4,4,0,0,0-4,4c0,.663.288,3.193,4,7.91.937-1.2,4-5.3,4-7.91A4,4,0,0,0,622,3214Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,622,3220Z" fill="#87b840" stroke="rgba(0,0,0,0)" stroke-width="1"/>
              </g>
            </svg>
          </span>
          <span class="local-text">
            <?php the_field('address', 'options'); ?>
          </span>
          </a>
        </div>
        <div class="local-with-icon">
          <a href="tel:<?php the_field('phone_number', 'options');?>">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g id="stay_primary_portrait" transform="translate(-338 -1304)">
                  <rect id="Path" width="24" height="24" transform="translate(338 1304)" fill="rgba(0,0,0,0)"/>
                  <path id="Icon" d="M355,1327H345a2,2,0,0,1-1.99-2v-18a2,2,0,0,1,1.99-2l10,.01a2,2,0,0,1,2,1.99v18A2,2,0,0,1,355,1327Zm-10-18v14h10v-14Z" fill="#87b840"/>
                </g>
              </svg>
              <span class="local-text">
                <?php the_field('phone_number' , 'options'); ?>
              </span>

            </span>
          </a>
        </div>
      </div>
      <div class="footer-columns__element">
        <span class="mico-hr"></span>
        <h5 class="site-cats">Follow us</h5>
        <ul>
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
      <div class="footer-columns__element">
        <span class="mico-hr"></span>
        <h5 class="site-cats">Contact us</h5>
        <div class="footer-cta">
          <a href="" class="cta">
            <span class="text">
              <span class="text-el text-current">
                Contact Us
              </span>
              <span class="text-el text-new">
                Contact Us
              </span>
            </span>
          </a>
          <a href="" class="cta is-white">
            <span class="text">
              <span class="text-el text-current">
                Request Appointment
              </span>
              <span class="text-el text-new">
                Request Appointment
              </span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="legal">
    <div class="inner">
      Privacy Policy
    </div>
  </div>
</footer>

<!-- Modal for Our Practice Page -->
<div class="modal">
  <div class="is-max-width">
    <div class="modal-content"></div>
    <button class="close-modal">
      <span></span>
      <span></span>
    </button>
  </div>
</div>

</main>

<script src="<?php echo "$root/dist/assets/js/app.bundle.js?=" ?>"></script>
<?php  wp_footer();  ?>
</body>
</html>