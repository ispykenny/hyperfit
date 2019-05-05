export default function() {
  let $modalTrigger = $('.modal-trigger');
  let $modal = $('.modal');
  let $closeModal = $('.close-modal');
  let $modalContent = $('.modal-content');
  let $body = $('body')

  const fetchModal = event => {
    event.preventDefault();
    let $t = $(event.currentTarget);
    let $base = $t.parents('.two-col-about__inner');
    let $blurbInfo = $base.find('.blurb-info').html();
    let $modalBlurb = $base.find('.blurb-content-full').html();
    let $avatar = $base.siblings().html();

    $body.css({'overflow': 'hidden'});

    $modalContent.append(`
      <div class="avatar">
          ${$avatar}
      </div>
      <div class="is-center">
        <div class="the-info-modal">
          ${$blurbInfo}
        </div>
      </div>
      <div class="modal-blurb">
        ${$modalBlurb}
      </div>
    `)
    
    $modal.fadeIn();
  }


  $modalTrigger.on('click', event => fetchModal(event))
  $closeModal.on('click', () => {
    $modal.fadeOut();
    $modalContent.html('');
    $body.css({'overflow': 'auto'});
  });

}
