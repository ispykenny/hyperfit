export default function() {
  let jQueryBridget = require('jquery-bridget');
  let Flickity = require('flickity');
  let $threeBlockParent = $('.three-card-block');
  let $mobileEl = $('.mt-trigger');
  let isMobile = null;

  let checkMobile = () => {
    if($mobileEl.is(':visible')) {
      isMobile = true
    } else {
      isMobile = false;
    }
    console.log(isMobile);
  }

  checkMobile();
  $(window).on('resize', checkMobile)
  

  $threeBlockParent.flickity({
    cellAlign: isMobile ? 'center' : 'left',
    wrapAround: true
  });
}