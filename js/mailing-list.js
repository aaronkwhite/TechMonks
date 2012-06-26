/*///////////////////////////////////////////////////////////////////////


	
	$('#signup').submit(function() {
		// update user interface
		$('.robot').fadeOut('fast');
		$('#response').html('Adding email address...');
		
		// Prepare query string and send AJAX request
		$.ajax({
			url: '/wp-content/themes/techmonks/inc/store-address.php',
			data: 'ajax=true&email=' + escape($('#email').val()),
			success: function(msg) {
				$('#response').html(msg);
			}
		});
	
		return false;
	});
});