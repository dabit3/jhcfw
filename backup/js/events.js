$(document).ready(function() {

	$('#home_Click').click(trackHome);

	$('#contact_Click').click(trackHome);

	/* $('#home_Nav').click(trackHomeNav); */

	function trackHome () {
		ga('send', 'event', 'Click', 'Call', 'Call From Home Page');
		console.log('Clicked home tracking event');
	}

	function trackContactCall () {
		ga('send', 'event', 'Click', 'Call', 'Call From Contact Page');
		console.log('Clicked Contact Page tracking event');
	}

	var overiFrame = -1;
    $('iframe').hover( function() {
        overiFrame = $(this).closest('.banner').attr('bannerid');
    }, function() {
        overiFrame = -1
    });

    $(window).blur( function() {
        if( overiFrame != -1 ) {
        ga('send', 'event', 'Click', 'Navigation', 'Google Maps From Mobile Site');
				console.log('Clicked mobile nav tracking event');
			}
  });

});
