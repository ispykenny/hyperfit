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
  let $mobileChecker = $('.mt-trigger').is(':visible');
  console.log($mobileChecker);


  // page-check
  if(!$body.hasClass('page-template-services')) return;
  console.log($hasRequestHeight)

  let sniper = () => {
    if($mobileChecker) return;
    if($winOffSet + $navHeight >= $parentEl.offset().top) {
      $requestBox.css({
        'position': 'fixed',
        'width': activeWidth,
        'top': $navHeight + 10,
        'bottom': 'auto',
      }).addClass('is-fixed');
    } else {
      $requestBox.css({
        'position': '',
        'width': '',
        'top': '',
        'bottom': ''
      }).removeClass('is-fixed');
    } 
    if($winOffSet + $navHeight >= $hasRequestHeight + $hasRequest.offset().top - $requestBox.height()) {
      $requestBox.css({
        'position': 'absolute',
        'width': activeWidth,
        'top': 'auto',
        'bottom': '0em'
      }).removeClass('is-fixed');
    } else if($winOffSet + $navHeight >= $hasRequestHeight + $hasRequest.offset().top ) {
      $requestBox.css({
        'position': 'fixed',
        'width': activeWidth,
        'top': $navHeight + 10,
        'bottom': '0em'
      }).addClass('is-fixed')
    }
  }

  let collectInfo = () => { 
    activeWidth = $hasRequest.width();
    $hasRequestHeight = $hasRequest.height();
    $mobileChecker = $('.mt-trigger').is(':visible');
    console.log($mobileChecker)
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