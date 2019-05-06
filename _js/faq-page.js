export default function() {
  let $miniNav = $('.mini-nav-el');
  let $faqCard = $('.question');
  let $faqSpeed = 140;
  let $slideNav = $('.slide-nav');



  let displayCard = event => {
    let $t = $(event.currentTarget);
    let $base = $t.parents('.faq-card');

    if(!$base.hasClass('is-active')) {
      $base.addClass('is-active')
      $base.find('.answer').slideDown($faqSpeed);
    } else {
      $base.removeClass('is-active')
      $base.find('.answer').slideUp($faqSpeed);
    }
  }

  let slideNavFunc = event => {
    event.preventDefault();
    let $t = $(event.currentTarget);
    $('html, body').animate({
      'scrollTop': $($t.attr('href')).offset().top - $('.main-nav').outerHeight()
    }, 300)
  }
  

  $slideNav.on('click', event => slideNavFunc(event))
  $faqCard.on('click', displayCard)
}