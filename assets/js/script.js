$( document ).ready(function() {

	$('input').focus(function() {
		$(this).removeClass('valid');
		$(this).removeAttr('placeholder');
		$(this).removeClass('invalid');
	});

});