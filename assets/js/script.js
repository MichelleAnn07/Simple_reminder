$( document ).ready(function() {

	$('input').focus(function() {
		$(this).removeClass('valid');
		$(this).removeClass('invalid');
	});

});