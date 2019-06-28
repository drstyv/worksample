<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container-fluid">
		<form>
			<div class="row course websections justify-content-center">
				<h1>Course</h1>
				<div class="">
					<label for="selectcourse">Name:</label><br>
					<select name="selectcourse" class="mdb-select md-form">
	  					<option value="" disabled selected>Select Course</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
					<div class="form-group">
						<label class="control-label">Date:</label><br>
						<input type="date" name="date">
					</div>
				</div>
			</div>

			<div class="row company websections justify-content-center">
				<h1>Company</h1>
				<div class="form-group">
					<label for="companyname">Name:</label><br>
					<input type="text" name="companyname">
				</div>
				<div class="form-group">
					<label for="companyphone">Phone:</label><br>
					<input type="tel" name="companyphone">
				</div>
				<div class="form-group">
					<label for="companyemail">Email:</label><br>
					<input type="email" name="companyemail">
				</div>
			</div>

			<div class="row participants websections justify-content-center">
				<h1>Participants</h1>
				<div class="form-group">
					<label for="participantname">Name:</label><br>
					<input type="text" name="participantname">
				</div>

				<div class="form-group">
					<label for="participantphone">Phone:</label><br>
					<input type="tel" name="participantphone">
				</div>

				<div class="form-group">
					<label for="participantemail">Email:</label><br>
					<input type="email" name="participantemail">
				</div>
			</div>

			<div class="row submit websections justify-content-center">
				<input value="Submit Application" type="button">
			</div>
		</form>
	</div>
</body>
</html>