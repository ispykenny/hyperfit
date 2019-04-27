import debounce from './debounce.js';

export default function() {
	;(function() {
		let HeightElements = {
			'nav': $('nav'),
			'hdrContent': $('.hdr-content'),
			'header': $('header, .header-inner')
		} 

		
		let calcHeight = () => {
			let navHeight = HeightElements.nav.outerHeight();
			let hdrContentHeight = HeightElements.hdrContent.outerHeight();
			let calcTotalHeight = navHeight + hdrContentHeight;
			HeightElements.header.css({
				'min-height': calcTotalHeight + 100
			})
		}

		
	
		let recalculateHeight = debounce(function() {
			calcHeight();
		}, 100)

		

		calcHeight();
		$(window).on('resize', recalculateHeight)
	})(jQuery);
}