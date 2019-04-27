export default function() {
  let $image = $('.lazy-image');
  let bgImage = $('.bg-el');

  let snagBgImages = () => {
    bgImage.each( (i, img) => {
      let $t = $(img);
      let bgSrc = $t.attr('data-bg-src');
      let imger = new Image();
      $(imger).attr('src', bgSrc).on('load', () => {
        $t.addClass('ready').css({'background-image': 'url('+ bgSrc  + ')'})
        $t.parent().addClass('bg-is-set')
      })
    })
  }

  let injectImageSrc = () => {
    $image.each( (i, el) => {
      let $t = $(el);
      let $src = $t.attr('data-lazy');
      $t.attr('src', $src);
      $t.on('load', () => $t.parents('figure').addClass('is-loaded'));
    })
  }

  $(window).on('load', () => {
    injectImageSrc();
    snagBgImages();
  })
}