$(document).ready(function() {
	
	$('#home_Click').click(trackHome);

	function trackHome () {
		_gaq.push(['_trackEvent', 'Clicks', 'Phone', 'Call From Home Page']);
		console.log('Clicked home tracking event');
	}

});
