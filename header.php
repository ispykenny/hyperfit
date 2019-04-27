<?php 
	$root = get_template_directory_uri();
?>
<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Starter Kit</title>
	<link rel="stylesheet" href="<?php echo "$root/dist/assets/css/style.css?=" ?>">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
	<script src="https://use.fontawesome.com/1eda73ce4d.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main>
<nav>
  <div class="pre-nav">
    <div class="inner">
      <div class="pre-nav-section">
        <div class="contact-flex">
          <div class="contact-flex__el location">
            <a href="">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="pin_drop" transform="translate(-609.5 -3209.5)">
                  <rect id="Path" width="24" height="24" stroke-width="1" fill="rgba(0,0,0,0)" stroke="rgba(0,0,0,0)" transform="translate(610 3210)"/>
                  <path id="Icon" d="M629,3232H615v-2h14v2Zm-7-3h0a38.272,38.272,0,0,1-3-3.812c-1.369-2-3-4.863-3-7.187a6,6,0,0,1,12,0c0,2.325-1.631,5.192-3,7.187a38.272,38.272,0,0,1-3,3.812Zm0-15a4,4,0,0,0-4,4c0,.663.288,3.193,4,7.91.937-1.2,4-5.3,4-7.91A4,4,0,0,0,622,3214Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,622,3220Z" fill="#000" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                </g>
              </svg>
            </span>
          <span class="local-text">
            88 Nobile Avenue, Suite 105 Millford, CT 06460
          </span>
          <span class="local-text-trim mobile">
            Location
          </span>
          </a>
          </div>
          <div class="contact-flex__el number">
            <a href="">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g id="stay_primary_portrait" transform="translate(-338 -1304)">
                  <rect id="Path" width="24" height="24" transform="translate(338 1304)" fill="rgba(0,0,0,0)"/>
                  <path id="Icon" d="M355,1327H345a2,2,0,0,1-1.99-2v-18a2,2,0,0,1,1.99-2l10,.01a2,2,0,0,1,2,1.99v18A2,2,0,0,1,355,1327Zm-10-18v14h10v-14Z" fill="#000"/>
                </g>
              </svg>
              <span class="local-text">
                203.890.9777
              </span>
              <span class="local-text-trim mobile">
                Call Today
              </span>

            </span>
          </a>
          </div>
        </div>
      </div>

      <div class="pre-nav-section">
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
  <div class="inner">
    <div class="nav-section">
      <a href="" class="logo">
        <img src="https://hyperfitmd.com/wp-content/themes/hyperfit/images/logo.png" alt="">
      </a>
      <button class="mt-trigger">
        <span class="hamburger sr-only">Menu</span>
        <span class="mt-el mt-top"></span>
        <span class="mt-el mt-mid"></span>
        <span class="mt-el mt-btm"></span>
      </button>
    </div>
    <div class="nav-section has-nav-el">
      <ul class="parent-nav">
        <li><a href="">Home</a></li>
        <li><a href="">Our Practice</a></li>
        <li class="has-dropdown"><a href="#0" class="dropdown-trigger">Services <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 6 7"><path d="M391.545,543l-3.511,6h7Z" transform="translate(549 -388.034) rotate(90)" fill="#87b840"/></svg></a>

          <ul class="child-nav">
            <li><a href="">Preventive & Functional Medicine</a></li>
            <li><a href="">Hair Transplantation</a></li>
            <li><a href="">Advanced Diagnostics</a></li>
            <li><a href="">Bio Identical Hormone Optimization</a></li>
            <li><a href="">Weight Loss & Nutrition Counseling</a></li>
            <li><a href="">Stress Management</a></li>
            <li><a href="">IV Nutrient Therapy</a></li>
            <li><a href="">New and Aesthetic Services</a></li>
            <li><a href="">Stem Cell Therapy and Regenerative Medicine</a></li>
          </ul>
      
        </li>
        <li><a href="">Faqs</a></li>
        <li><a href="<?php echo site_url('blog');?>">Blog</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

