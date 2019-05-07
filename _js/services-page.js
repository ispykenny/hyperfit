export default function() {
  let $body = $('body');
  let userScroll = false;
  let $navHeight = $('nav').height();
  let $winOffSet = $(window).scrollTop();
  let $parentEl = $('.services-two-col__el');
  let $hasRequest = $('.has-request');
  let $requestBox = $('.request-box');
  let activeWidth = $hasRequest.width();
  let $hasRequestHeight = $hasRequest.height();


  // page-check
  if(!$body.hasClass('page-template-services')) return;
  console.log($hasRequestHeight)

  let sniper = () => {
    if($winOffSet + $navHeight >= $parentEl.offset().top) {
      $requestBox.css({
        'position': 'fixed',
        'width': activeWidth,
        'top': $navHeight 
      })
    } else {
      $requestBox.css({
        'position': '',
        'width': '',
        'top': ''
      })
    } 
    if($winOffSet + $navHeight >= $hasRequestHeight + $hasRequest.offset().top - $requestBox.height()) {
      $requestBox.css({
        'position': 'absolute',
        'top': 'auto',
        'bottom': '1em'
      })
    }
  }

  // figuring out how to make it fixed again once the user scrolls back up from this section.

  let collectInfo = () => { 
    activeWidth = $hasRequest.width();
    $hasRequestHeight = $hasRequest.height();
    console.log($hasRequestHeight);
    sniper();   
  }

  let updatingScrollPos = () => {
    userScroll = true;
    $winOffSet = $(window).scrollTop();
  }

  let serviceScrollTicker = () => {
    if(userScroll) {
      sniper();
      userScroll = false;
    }
    requestAnimationFrame(serviceScrollTicker);
  }

  requestAnimationFrame(serviceScrollTicker);
  $(window).on({
    'scroll': updatingScrollPos,
    'resize': collectInfo,
    'load': sniper
  });
}