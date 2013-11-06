/**
 * Author: Alfrenido Cenera
 * Description: Put additional scripts here.
 */

// JavaScripts
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
		newVal = (Math.ceil(newVal * 100) / 100).toFixed(2);
		document.getElementById(elID).value = newVal;
}

function remRequired() {
	var searched = document.getElementsByTagName('body')[0].innerHTML;
	var replaced = searched.replace(/required="required"/g, '');
	
	document.getElementsByTagName('body')[0].innerHTML = replaced;
}

function submitForm() {
	document.getElementById('hiddenCancel').value = 'cancelled';
	document.getElementsByTagName('form')[0].submit();
}

// JQueries
$(document).ready(function() {
	setTimeout(function() {
		$('.flasher').parent().slideUp('slow');
	}, 3000);
});

$(function() {
	$("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' });
});