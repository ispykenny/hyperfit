export default function() {
  let $nav = $('nav');
  let $body = $('body')
  let $downDown = $('.dropdown-trigger');
  let downDownShowing = false;
  let mobileMenu = false;
  let $parentNav = $('#menu-main-nav');
  let $mTrigger = $('.mt-trigger');
  let $dropDownEl = $('.menu-item-has-children');
  let $childNav = $('.sub-menu');
  let $speed = 150;

  let modifyDropDownNav = () => {
    $dropDownEl.each((i, $element) => {
      $($element).find('a').first().append(`
        <span class="drop-crt">
          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 6 7"><path d="M391.545,543l-3.511,6h7Z" transform="translate(549 -388.034) rotate(90)" fill="#87b840"></path></svg>
        </span>
      `)
    })
  }


  $(window).on('load', modifyDropDownNav);

  if($('.request-box').is(":visible")) {
    $('.pre-nav').hide();
  }

  let homeHdr = () => {
    $('header').css({'padding-top': $nav.outerHeight()})
  }

  $(window).on('load', homeHdr)
  $(window).on('resize', homeHdr)

  let dropDown = event => {
    event.preventDefault();
    let $element = $(event.currentTarget);
    if(!downDownShowing) { 
      $body.addClass('show-dropdown');
      if($mTrigger.is(":visible")) {
        $element.parent().find('.sub-menu').slideDown($speed)
      } else {
        $element.parent().find('.sub-menu').addClass('is-visible');
      }
       downDownShowing = true;
    } else {
      if($mTrigger.is(":visible")) {
        $element.parent().find('.sub-menu').slideUp($speed)
      } else {
        $element.parent().find('.sub-menu').removeClass('is-visible');
      }
      $body.removeClass('show-dropdown')
       downDownShowing = false;
    }
  }

  let killdropdown = () => {
    downDownShowing = false;
    if($mTrigger.is(":visible")) {
      $childNav.slideUp($speed);
    } else {
      $childNav.removeClass('is-visible');
    }
    $body.removeClass('show-dropdown')
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

  $dropDownEl.on('click', event => dropDown(event))
  $dropDownEl.on('mouseleave', killdropdown);
  $mTrigger.on('click', showMobileNav);

}