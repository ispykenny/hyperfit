export default function() {
  let jQueryBridget = require('jquery-bridget');
  let Flickity = require('flickity');
  let $threeBlockParent = $('.three-card-block');
  let $mobileEl = $('.mt-trigger');
  let isMobile = null;

  let $body = $('body');
  let $blogSlide = $('.blog-slide-parent')
  if($body.hasClass('page-template-home')) {
    $blogSlide.flickity({
      wrapAround: true,
      prevNextButtons: false
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
    wrapAround: true
  });
}