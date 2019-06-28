var objects = new Array();

function updateDate(){ // shows the course date of the current selected course.
	var e = document.getElementById("scourse");
	var date = e.options[e.selectedIndex].getAttribute('data');
	document.getElementById('coursedatefield').value=date;
}

function addPartisipant(){ // Adds all partisipants in "objects" variable and JSON.stringify them to "hiddenparticipants" field so it can be sent to Controller.php via post.

	var username = document.getElementById('participantname').value;
	var email = document.getElementById('participantemail').value;
	var phone = document.getElementById('participantphone').value;

	var compname = document.getElementById('compname').value;
	var compemail = document.getElementById('compemail').value;
	var compphone = document.getElementById('compphone').value;	

	if(compname != "" && compemail != "" && compphone != "") // Company form must be filled out in order to add participants.
	{
		if(username != "" && email != "" && phone != "") { // Only add participants if all 3 fields are filled.
			objects.push({ pname: username, pemail: email, pphone: phone });
			var objectString = JSON.stringify(objects);
			document.getElementById('hiddenparticipants').value = objectString;

		    var entry = document.createElement('li');
			entry.appendChild(document.createTextNode(username + ' - ' + email + ' - ' + phone));
			list.appendChild(entry);

			document.getElementById('participantname').value = '';
			document.getElementById('participantemail').value = '';
			document.getElementById('participantphone').value = '';
		}
	}
	else 
	{
		alert("Please fill out the form!");
	}
}