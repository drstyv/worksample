$(function(){
	function addPartisipant(){
		var username = document.getElementById('participantname').value;
		var email = document.getElementById('participantemail').value;
		var phone = document.getElementById('participantphone').value;

		if(username != "" && email != "" && phone != "") {
		    var entry = document.createElement('li');
			entry.appendChild(document.createTextNode(username + ' - ' + email + ' - ' + phone));
			list.appendChild(entry);
			document.getElementById('participantname').value = '';
			document.getElementById('participantemail').value = '';
			document.getElementById('participantphone').value = '';
		}
		else {
			alert("Please fill out the whole form!");
		}
		return false;
	}
});