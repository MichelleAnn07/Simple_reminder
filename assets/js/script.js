$( document ).ready(function() {

	$('input').focus(function() {
		$(this).removeClass('valid');
		$(this).removeAttr('placeholder');
		$(this).removeClass('invalid');
	});

});

$('.datepicker').pickadate({

	selectMonths: true, // Creates a dropdown to control month
	selectYears: 15 // Creates a dropdown of 15 years to control year

});

$('#reminder_time').lolliclock({
	autoclose:false
});