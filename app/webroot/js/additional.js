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

function submitForm(elID) {
	var chkID = document.getElementById(elID);
	document.getElementById('hiddenCancel').value = 'cancelled';
	
	if (chkID.id == 'add') {
		document.getElementsByTagName('form')[0].submit();
	}
	else if (chkID.id == 'edit') {
		document.getElementsByTagName('form')[1].submit();
	}
}

function clearForm(elmnt) {
	tags = elmnt.getElementsByTagName('input');
	for(i = 0; i < tags.length; i++) {
		switch(tags[i].type) {
			case 'password':
			case 'text':
				if (tags[i].id == 'datepicker2') {
					var dt = new Date();
					var dtMnth = dt.getMonth() + 1;
					tags[i].value = dt.getFullYear() + '-' + dtMnth + '-' + dt.getDate();
				}
				else {
					tags[i].value = '';
				}
				break;
			case 'checkbox':
			case 'radio':
                tags[i].checked = false;
                break;
        }
    }
	
	tags = elmnt.getElementsByTagName('select');
	for(i = 0; i < tags.length; i++) {
		if (tags[i].type == 'select-one') {
			tags[i].selectedIndex = 0;
		}
		else {
			for(j = 0; j < tags[i].options.length; j++) {
				tags[i].options[j].selected = false;
			}
		}
	}
	
	tags = elmnt.getElementsByTagName('textarea');
	for(i = 0; i < tags.length; i++) {
		tags[i].value = '';
    }
	
	tags = elmnt.getElementsByTagName('div');
	for(i = 0; i < tags.length; i++) {
		if (tags[i].className == 'error-message') {
			tags[i].remove();
		}
	}
}

function checkAddress(elID) {
	//if (document.getElementById(elID.value) != '') {
		document.getElementById('hiddenZIP').value = 'zipped';
		document.getElementsByTagName('form')[0].submit();
	//}
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

function couponFunction(value)
{
	if (value == '1')
		{
			document.getElementById("CouponCpnParam").value=""
			document.getElementById("CouponCpnParam").disabled=true
		}
	else{
			document.getElementById("CouponCpnParam").disabled=false
	}
}
