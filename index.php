<!DOCTYPE html>
<html>

<head>
<meta name="veiwport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
	<title>User Registration</title>
</head>

<body>


<h2 style="text-align: center; color: white; background-color: blue; font-family: Arial;"> REGISTRATION FORM-ADD USER</h2>
<p>Use this to form to register a new user in the system.</p>

<div class"container">
	<form action="sqlinsert.php" method="post">
		<div class="row">
			<div class="col-25">
				<label for="fname">First Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">last Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="acceslevel"> Access Level</label>
			</div class="col-75">
				<select id="accesslevel" name="accesslevel">
					<option value="ordinaryuser"> Ordinary User </option>
					<option value="supervosoryuser"> Supervisory User </option>
					<option value="superuser"> Super User </option>
				</select>
			</div>
				<div class="row">
					<div class="col-25">
						<label for="address">Address</label>
					</div>
						<div class="col-75">
							<textarea id="address" name="address" placeholder="Your Address.." style="height:70px"></textarea>
						</div>
				</div>
			<div class="row">
				<div class="col-25">
					<label for="password">Password</label>
				</div>
					<div class="col-75">
						<input type="text" id="password" name="password" placeholder="Your Password..">
					</div>
			</div>
			<div class="row">
				<input type="submit" value="Save!" name="save">
			</div>
		
			<div class="row">
				<input type="button" value="Delete!" name="delete">
			</div>
		
			</form>
		</div>
	</div>
</body>

</html>
