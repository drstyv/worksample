<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container-fluid">
		<form>
			<section class="websections course">
				<div class="row">
					<div class="col-md-12">
						<h1>Course</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="selectcourse">Name:</label>
						<select name="selectcourse" class="mdb-select md-form">
		  					<option value="" disabled selected>Select Course</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
					</div>
					<div class="col-md-6">
						<label class="control-label">Date:</label>
						<input type="date" name="date">
					</div>
				</div>
			</section>
			<section class="websections company">
				<h1>Company</h1>
				<div class="form-group">
					<label for="companyname">Name:</label>
					<input type="text" name="companyname">
				</div>
				<div class="form-group">
					<label for="companyphone">Phone:</label>
					<input type="tel" name="companyphone">
				</div>
				<div class="form-group">
					<label for="companyemail">Email:</label>
					<input type="email" name="companyemail">
				</div>
			</section>
			<section class="websections participants">
				<h1>Participants</h1>

				<div class="form-group">
					<label for="participantname">Name:</label>
					<input type="text" name="participantname">
				</div>

				<div class="form-group">
					<label for="participantphone">Phone:</label>
					<input type="tel" name="participantphone">
				</div>

				<div class="form-group">
					<label for="participantemail">Email:</label>
					<input type="email" name="participantemail">
				</div>

			</section>
			<section class="websections submit">
				<input value="Submit Application" type="button">
			</section>
		</form>
	</div>
</body>
</html>