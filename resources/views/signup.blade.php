<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/addparticipant.js"></script>
</head>
<body>
	<form action="/insert" method="post">
	<input type="hidden" id="hiddenparticipants" name="hiddenparticipants" value="">
	<div class="course websections pt-3 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Course</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>Names:</label>
					<select name="selectedcourse" id="scourse" class="custom-select" onchange="updateDate()">
						<?php 
							foreach($allCourses as $course) // print out courses as selectable options.
							{
								echo '<option' . ' data="' . $course->cdate . '"' . ' value="' . $course->id . '">' . $course->cname . '</option>'; // should be in blade
							}
						?>
					</select>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>Date:</label>
						<input id="coursedatefield" type="text" class="form-control" style="min-width: 15em;" readonly>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END course -->

	<div class="company websections pt-3 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Company</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					{{ csrf_field() }}
					<label>Name:</label>
					<input type="text" name="compname" id="compname" class="form-control" required>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>E-Mail:</label>
					<input type="email" name="compemail" id="compemail" class="form-control" required>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>Phone:</label>
					<input type="tel" name="compphone" id="compphone" class="form-control" required>
				</div>
			</div>
		</div>
	</div><!-- END company -->

	<div class="participants websections pt-3 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Participants</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul id="list"></ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>Name:</label>
					<input id="participantname" name="pname" type="text" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>E-Mail:</label>
					<input id="participantemail" name="pphone" type="email" class="form-control">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>Phone:</label>
					<input id="participantphone" name="pemail" type="tel" class="form-control">
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-md-4 col-md-offset-8">
					<input onclick='addPartisipant()' type="button" value="Add a participant" name="addparticipant" class="form-control">
				</div>
			</div>
		</div>
	</div><!-- END participants -->

	<div class="submit websections pt-3 pb-5">
		<div class="container">
			<div class="row">
				<input type="submit" value="Submit" name="submit" class="form-control">
			</div>
		</div>
	</div><!-- END submit -->
	</form>
</body>
</html>