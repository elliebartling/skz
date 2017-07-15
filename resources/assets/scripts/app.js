


(function($) {

	console.log('Loaded app.js')

	var show = false
  var nav = $('#header')

  $(window).scroll((event) => {
    nav.addClass('active')
  })

})( jQuery );
