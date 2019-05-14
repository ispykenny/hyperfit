export default function() {
  let jQueryBridget = require('jquery-bridget');
  let Flickity = require('flickity');
  let $threeBlockParent = $('.three-card-block');
  let $mobileEl = $('.mt-trigger');
  let $btn = $('.next');
  let $slideTest = $('.slide-parent-card');
  let $slideBtnTest = $('.slide-item-btn');

  let isMobile = null;

  if($slideTest.is(":visible")) {
    $slideTest.flickity({
      pageDots: false,
      prevNextButtons: false,
      wrapAround: true,
      autoPlay: 5000,
      pauseAutoPlayOnHover: false,
      cellAlign: 'left',
      dragThreshold: 10
    });
  }
  
  

  let $body = $('body');
  let $blogSlide = $('.blog-slide-parent')
  if($('.manage-number').length > 0) {
    $blogSlide.flickity({
      wrapAround: true,
      prevNextButtons: false,
      dragThreshold: 10,
      pageDots: false
    });

    $blogSlide.each((item, $element) => {
      if($($element).find('.blog-slide-item').length <= 1) {
        $($element).parents('.blog-block').find('.btn-group').hide();
      }
    })
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

  let swapTest = event => {
    let $t = $(event.currentTarget);
    let $getBase = $t.parents('.two-col-slide-main').find('.slide-parent-card');
    $getBase.flickity('stopPlayer');
    if($t.hasClass('prev')) {
      $getBase.flickity('previous');
    } else {
      $getBase.flickity('next');
    }
  }

  $slideBtnTest.on('click', swapTest)
  $btn.on('click', changeBlogPost)
}