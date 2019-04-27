export default function() {
	;(function($) {
		const $dribbbleUrl = 'https://dev.kennykrosky.com/dribbbleendpoint/';
		const $body = $('body');
		const $dribbbleInject = $('.dribbble-container--inner');

		const fetchDribbblePost = () => {
			$.ajax({
				url: $dribbbleUrl,
				dataType: 'json',
				beforeSend: function() {
					$body.addClass('dribbble-loading')
				},
				success: function(data) {

					for(let i = 0; i < 6; i++) {
						let $title = data[i].title;
						let $imgSrc = data[i].images.hidpi;
						let $imgUrl = data[i].html_url;
						let $des = data[i].description;
						
					
						$dribbbleInject.append(`
							<div class="dribbble-el">
								<figure class="dribbble-img">
									<img src="${ $imgSrc }" alt="" />
									<div class="sleeve-dribbble"></div>
								</figure>
								<h4 class="dribbble-title"><span>${$title}</span></h4>
								<div class="dribbble-summary">
									${$des}
								</div>
								<a class="dribbble-link" target="_BLANK" href="${$imgUrl}">
									<span>View Post</span>
								</a>
							</div>
						`)
					
					}
				},
				complete: function() {
					$body.removeClass('dribbble-loading')
					$body.addClass('dribbble-loaded');
				}
			})
		}

		fetchDribbblePost();
	})(jQuery);
}