window.$ = window.jQuery;
require('slick-carousel');

(function($) {

	console.log('Loaded app.js')

	var show = false
  var nav = $('#header')

  $(window).scroll((event) => {
		if(document.body.scrollTop === 0) {
			nav.removeClass('active')
		} else {
			nav.addClass('active')
		}
  })

	$('.carousel').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: true
	})


	$('.search-submit').click((e) => {
		e.preventDefault()
		if ($('.nav-secondary').hasClass('open')) {
			console.log('Trigger submit')
			$('.search-form').submit()
		} else {
			console.log('Trigger open')
			$('.nav-secondary').addClass('open')
			$('.search-field').focus()
		}
	})

	// $('.search-field').blur((e) => {
	// 	if ($('.nav-secondary').hasClass('open')) {
	// 		$('.nav-secondary').removeClass('open')
	// 	}
	// })


})( jQuery );
