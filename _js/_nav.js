export default function() {
  let $nav = $('nav');
  let $body = $('body')
  let $downDown = $('.dropdown-trigger');
  let downDownShowing = false;
  let mobileMenu = false;
  let $hasDropDown = $('.has-dropdown');
  let $parentNav = $('.parent-nav');
  let $mTrigger = $('.mt-trigger');

  let homeHdr = () => {
    $('header').css({'padding-top': $nav.outerHeight()})
  }

  $(window).on('load', homeHdr)
  $(window).on('resize', homeHdr)

  let dropDown = event => {
    event.preventDefault();
    if(!downDownShowing) { 
      $body.addClass('show-dropdown')
       downDownShowing = true;
    } else {
      $body.removeClass('show-dropdown')
       downDownShowing = false;
    }
  }

  let killdropdown = () => {
    downDownShowing = false;
    $body.removeClass('show-dropdown');
  }

  let showMobileNav = () => {
    if(!mobileMenu) {
      mobileMenu = true;
      $body.addClass('mobile-showing')
      $parentNav.slideDown(200);
      setTimeout(() => $body.addClass('show-li'))
    } else {
      $body.removeClass('mobile-showing')
      $parentNav.slideUp(200);
      $body.removeClass('show-li')
      mobileMenu = false;
    }
  }

  $downDown.on('click', event => dropDown(event))
  $hasDropDown.on('mouseleave', killdropdown);
  $mTrigger.on('click', showMobileNav);

}