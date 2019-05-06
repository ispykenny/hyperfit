export default function() {
  let $miniNav = $('.mini-nav-el');
  let $faqCard = $('.question');
  let $faqSpeed = 140;

  let displayCard = event => {
    let $t = $(event.currentTarget)
   if(!$t.parents('.faq-card').hasClass('is-active')) {
    $t.parents('.faq-card').addClass('is-active')
    $t.parents('.faq-card').find('.answer').slideDown($faqSpeed);
   } else {
    $t.parents('.faq-card').removeClass('is-active')
    $t.parents('.faq-card').find('.answer').slideUp($faqSpeed);
   }
  }

  $faqCard.on('click', displayCard)
}