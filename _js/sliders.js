export default function() {
  let jQueryBridget = require('jquery-bridget');
  let Flickity = require('flickity');
  let $threeBlockParent = $('.three-card-block');
  let $mobileEl = $('.mt-trigger');
  let $btn = $('.next');
  let isMobile = null;

  let $body = $('body');
  let $blogSlide = $('.blog-slide-parent')
  if($('.manage-number').length > 0) {
    $blogSlide.flickity({
      wrapAround: true,
      prevNextButtons: false,
      dragThreshold: 10
    });
  }

  let checkMobile = () => {
    if($mobileEl.is(':visible')) {
      isMobile = true
    } else {
      isMobile = false;
    }
  }

  checkMobile();
  $(window).on('resize', checkMobile)
  

  $threeBlockParent.flickity({
    cellAlign: 'center',
    wrapAround: true,
    autoPlay: 3000,
    pauseAutoPlayOnHover: false,
    dragThreshold: 10
  });

  let changeBlogPost = event => {
    let $t = $(event.currentTarget);
    if(!$t.hasClass('prev')) {
      $t.parents('.inner').find('.blog-slide-parent').flickity('next')
    } else {
      $t.parents('.inner').find('.blog-slide-parent').flickity('previous')
    }
  }

  $btn.on('click', changeBlogPost)
}