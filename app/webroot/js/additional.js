/**
 * Author: Alfrenido Cenera
 * Description: Put additional scripts here.
 */

function isNumKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function isDecKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46)
		return false;
	return true;
}

function convDecimal(elID) {
	var newVal=document.getElementById(elID).value;
	
	if (newVal > 0)
		document.getElementById(elID).value = Math.ceil(newVal * 100) / 100;
}

$(document).ready(function() {
	setTimeout(function() {
		$('.flasher').slideUp('slow');
	}, 3000);
});
